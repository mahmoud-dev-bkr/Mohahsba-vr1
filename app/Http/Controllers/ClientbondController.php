<?php

namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\Client;
use App\Clientbond;
use App\Journal;
use Illuminate\Http\Request;

class ClientbondController extends Controller
{

    public function getClientbond(){
        $Clientbond = Clientbond::latest('id');
        $data = Datatables()->eloquent($Clientbond)
        ->addColumn('action' , function($Clientbond){
            return view('Sales.Clientbond.actions' , ['type' => 'action' , 'Clientbond' => $Clientbond]);
        })
        ->editColumn('id_customers', function ($Clientbond){
            $Client = Client::where('status', 1)->where('id', $Clientbond->id_customers)->first();
            return $Client->name;
        })

        ->editColumn('id_Account', function ($Clientbond){
            $Account = Account::where('id', $Clientbond->id_Account)->first();
            return $Account->name;
        })

        ->editColumn('type', function ($Clientbond){
            if ($Clientbond->type == 1) {
                return "قبض";
            }  else {
                return "صرف";
            }
        })

        ->toJson();



        return $data;
    }
    public function index()
    {
        $Clientbond = Clientbond::all();
        return view('Sales.Clientbond.index', compact(
            [
                'Clientbond'
            ]
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $Clients  = Client::where('status', 1)->get();
       $accounts = Account::all();
        return view('Sales.Clientbond.create', compact('Clients', 'accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $Clientbond = Clientbond::create($data);
        // fill appointments em ployees
        $CcountEstrictions = [
            'account_id' => $request->id_Account,
            'type' => '4',
            'account_type' => $Clientbond->id,
            'ammount_from' => $request->Amount,
            'ammount_to'   => 0,
        ];
        CcountEstrictions::create($CcountEstrictions);
        $CcountEstrictions = [
            'account_id' => '2',
            'type' => '4',
            'account_type' => $Clientbond->id,
            'ammount_from' => 0,
            'ammount_to'   => $request->Amount,
        ];
        CcountEstrictions::create($CcountEstrictions);
        // fill appointments em ployees
        $Journal = [];
        $Journal[] = [
            'journal_id' => $Clientbond->id,
            'type' => 4,
            'acount_from' => $request->id_Account,
            'acount_to' => 2,
        ];
        Journal::insert($Journal);
        return redirect()->route('Clientbond.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientbond  $Clientbond
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Clientbond)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientbond  $Clientbond
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Clientbond = Clientbond::FindOrFail($id);
        $Clients   = Client::all();
        $accounts  = Account::all();
        return view('Sales.Clientbond.update', compact('Clientbond', 'Clients', 'accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientbond  $Clientbond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Clientbond = Clientbond::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $Clientbond->update($data);
        return redirect()->route('Clientbond.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientbond  $Clientbond
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Clientbond = Clientbond::find($id);
            $deleted =  $Clientbond->delete();
            if (!$deleted) {
                return redirect()->route('Clientbond.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Clientbond.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Clientbond.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }

}
