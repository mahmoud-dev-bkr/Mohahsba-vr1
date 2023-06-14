<?php

namespace App\Http\Controllers;


use App\Supplier;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function getSuppliers(){
        $Supplier = Supplier::latest('id');
        $data = Datatables()->eloquent($Supplier)
        ->addColumn('action' , function($Supplier){
            return view('Procurement.Suppliers.actions' , ['type' => 'action' , 'Supplier' => $Supplier]);
        })
        ->editColumn('status', function ($Supplier){
            if ($Supplier->status == 1) {
                return "مفعل";
            } else {
                return "غير مفعل";
            }
        })
        ->toJson();


        return $data;
    }
    public function index()
    {
        $Supplier = Supplier::all();
        return view('Procurement.Suppliers.index', compact(
            [
                'Supplier'
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
        return view('Procurement.Suppliers.create');
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

        if ($request->pointsSupplier == 'on') {
            $data['pointsSupplier'] = 1;
        } else {
            $data['pointsSupplier'] = 0;
        }
        Supplier::create($data);
        // fill appointments em ployees
        return redirect()->route('Supplier.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Supplier)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Supplier = Supplier::FindOrFail($id);
        return view('Procurement.Suppliers.update', compact('Supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Supplier = Supplier::findOrFail($id);
        $data = $request->all();

        if ($request->pointsSupplier == 'on') {
            $data['pointsSupplier'] = 1;
        } else {
            $data['pointsSupplier'] = 0;
        }
        //update in db
        $Supplier->update($data);
        return redirect()->route('Supplier.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $Supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Supplier = Supplier::find($id);
            $deleted =  $Supplier->delete();
            if (!$deleted) {
                return redirect()->route('Supplier.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Supplier.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Supplier.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
