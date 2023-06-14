<?php

namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\Journal;
use App\Supplier;
use App\Supplierbond;
use Illuminate\Http\Request;

class SupplierbondController extends Controller
{
    public function getSupplierbond(){
        $Supplierbond = Supplierbond::latest('id');
        $data = Datatables()->eloquent($Supplierbond)
        ->addColumn('action' , function($Supplierbond){
            return view('Procurement.Supplierbond.actions' , ['type' => 'action' , 'Supplierbond' => $Supplierbond]);
        })
        ->editColumn('id_supplers', function ($Supplierbond){
            $Supplier = Supplier::where('status', 1)->where('id', $Supplierbond->id_supplers)->first();
            return $Supplier->name;
        })

        ->editColumn('id_Account', function ($Supplierbond){
            $Account = Account::where('id', $Supplierbond->id_Account)->first();
            return $Account->name;
        })

        ->editColumn('type', function ($Supplierbond){
            if ($Supplierbond->type == 1) {
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
        $Supplierbond = Supplierbond::all();
        return view('Procurement.Supplierbond.index', compact(
            [
                'Supplierbond'
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

       $Suppliers  = Supplier::where('status', 1)->get();
       $accounts = Account::all();
        return view('Procurement.Supplierbond.create', compact('Suppliers', 'accounts'));
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
        // dd($data);
        $Supplierbond=  Supplierbond::create($data);
        $CcountEstrictions = [
            'account_id' => $request->id_Account,
            'type' => '3',
            'account_type' => $Supplierbond->id,
            'ammount_from' => 0,
            'ammount_to'   => $request->Amount,
            'from_to'      => 0,
        ];
        CcountEstrictions::create($CcountEstrictions);
        $CcountEstrictions_from = [
            'account_id' => '1',
            'type' => '3',
            'account_type' => $Supplierbond->id,
            'ammount_from' => $request->Amount,
            'ammount_to'   => 0,
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions_from);
        $Journal = [];
        $Journal[] = [
            'journal_id' => $Supplierbond->id,
            'type' => 3,
            'acount_from' => 1,
            'acount_to' => $request->id_Account,
        ];
        Journal::insert($Journal);
        return redirect()->route('Supplierbond.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplierbond  $Supplierbond
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Supplierbond)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplierbond  $Supplierbond
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Supplierbond = Supplierbond::FindOrFail($id);
        $Suppliers   = Supplier::all();
        $accounts  = Account::all();
        return view('Procurement.Supplierbond.update', compact('Supplierbond', 'Suppliers', 'accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplierbond  $Supplierbond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Supplierbond = Supplierbond::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $Supplierbond->update($data);
        return redirect()->route('Supplierbond.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplierbond  $Supplierbond
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Supplierbond = Supplierbond::find($id);
            $deleted =  $Supplierbond->delete();
            if (!$deleted) {
                return redirect()->route('Supplierbond.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Supplierbond.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Supplierbond.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
