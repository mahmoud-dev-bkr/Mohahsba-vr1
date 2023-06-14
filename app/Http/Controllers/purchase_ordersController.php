<?php

namespace App\Http\Controllers;

use App\Client;
use App\Purchase_orders;
use App\Supplier;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class purchase_ordersController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  function getPurchase_orderss(){
        $Purchase_orders = Purchase_orders::latest('id');
        $data = Datatables()->eloquent($Purchase_orders)
        ->addColumn('action' , function($Purchase_orders){
            return view('Procurement.purchase_orders.actions' , ['type' => 'action' , 'Purchase_orders' => $Purchase_orders]);
        })
        ->editColumn('id_supplers', function ($Purchase_orders){
            $Supplier = Supplier::where('id', $Purchase_orders->id_supplers)->first();
            return  $Supplier->name;
        })

        ->toJson();


        return $data;
    }
    public function index()
    {
        $Purchase_orders = Purchase_orders::all();
        return view('Procurement.Purchase_orders.index', compact(
            [
                'Purchase_orders'
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
        $Suppliers = Supplier::where('status', 1)->get();
        return view('Procurement.Purchase_orders.create', compact('Suppliers'));
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

        if ($request->pointsPurchase_orders == 'on') {
            $data['pointsPurchase_orders'] = 1;
        } else {
            $data['pointsPurchase_orders'] = 0;
        }
        Purchase_orders::create($data);
        // fill appointments em ployees
        return redirect()->route('Purchase_orders.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase_orders  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Purchase_orders)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase_orders  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Purchase_orders = Purchase_orders::FindOrFail($id);
        $Suppliers   = Supplier::all();
        return view('Procurement.Purchase_orders.update', compact('Purchase_orders', 'Suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase_orders  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Purchase_orders = Purchase_orders::findOrFail($id);
        $data = $request->all();

        //update in db
        $Purchase_orders->update($data);
        return redirect()->route('Purchase_orders.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase_orders  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Purchase_orders = Purchase_orders::find($id);
            $deleted =  $Purchase_orders->delete();
            if (!$deleted) {
                return redirect()->route('Purchase_orders.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Purchase_orders.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Purchase_orders.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
