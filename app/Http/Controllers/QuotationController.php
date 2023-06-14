<?php

namespace App\Http\Controllers;

use App\Client;
use App\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    function getQuotations(){
        $Quotations = Quotation::latest('id');
        $data = Datatables()->eloquent($Quotations)
        ->addColumn('action' , function($Quotation){
            return view('Sales.Quotations.actions' , ['type' => 'action' , 'Quotation' => $Quotation]);
        })
        ->editColumn('client_id', function ($Quotation){
            $Client = Client::where('status', 1)->where('id', $Quotation->client_id)->first();   
            return $Client->name; 
        })
        ->toJson();


        return $data;
    }
    public function index()
    {
        $Quotation = Quotation::all();
        return view('Sales.Quotations.index', compact(
            [
                'Quotation'
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
        $Clients = Client::where('status', 1)->get();
        return view('Sales.Quotations.create', compact('Clients'));
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

        Quotation::create($data);
        // fill appointments em ployees
        return redirect()->route('Quotation.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quotation  $Quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Quotation)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quotation  $Quotation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Quotation = Quotation::FindOrFail($id);
        $Clients   = Client::all();
        return view('Sales.Quotations.update', compact('Quotation', 'Clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quotation  $Quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Quotation = Quotation::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db
        
        $Quotation->update($data);
        return redirect()->route('Quotation.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quotation  $Quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Quotation = Quotation::find($id);
            $deleted =  $Quotation->delete();
            if (!$deleted) {
                return redirect()->route('Quotation.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Quotation.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Quotation.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
