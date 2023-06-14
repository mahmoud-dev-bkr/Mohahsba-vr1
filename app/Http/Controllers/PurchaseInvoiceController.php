<?php

namespace App\Http\Controllers;

use App\Product;
use App\PurchaseInvoiceDetails;
use App\PurchaseInvoices;
use App\Supplier;
use App\Account;
use App\CcountEstrictions;
use App\Supplierbond;
use App\Journal;
use Illuminate\Http\Request;

class PurchaseInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPurchase_Invoices(){
        $PurchaseInvoices = PurchaseInvoices::where('type', 1)->latest('id');
        $data = Datatables()->eloquent($PurchaseInvoices)
        ->addColumn('action' , function($PurchaseInvoices){
            return view('Procurement.Purchase_Invoices.actions' , ['type' => 'action' , 'PurchaseInvoices' => $PurchaseInvoices]);
        })
        ->editColumn('id_supplers', function ($PurchaseInvoices){
            $Supplier = Supplier::where('id', $PurchaseInvoices->id_supplers)->first();
            return  $Supplier->name;
        })

        ->toJson();


        return $data;
    }
    public function index()
    {
        $PurchaseInvoices = PurchaseInvoices::all();
        return view('Procurement.Purchase_Invoices.index', compact(
            [
                'PurchaseInvoices'
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
        $products   = Product::all();
        return view('Procurement.Purchase_Invoices.create', compact('Suppliers', 'products'));
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
        $data['type'] = 1;
        $len  = count($data['test']) / 8;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];

        for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 8, false);

           $start += 8;

        }
        $PurchaseInvoices = PurchaseInvoices::create($data);
        $CcountEstrictions = [
            'account_id' => '1',
            'type' => '1',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => 0,
            'ammount_to'   => $request->total,
            'from_to'      => 1,
        ];
        CcountEstrictions::create($CcountEstrictions);
        $Journal = [];
        $Journal[] = [
            'journal_id' => $PurchaseInvoices->id,
            'type' => 1,
            'acount_from' => 1,
            'acount_to' => 2,
        ];
        Journal::insert($Journal);



        // dd($group);
        foreach ($group as $index) {
            $unit[] = [
                'product_id'                 => $index[0],
                'qun'                        => $index[1],
                'descunt'                    => $index[3],
                'price_before'               => $index[4],
                'tax'                        => $index[5],
                'tax_value'                  => $index[6],
                'price_after'                => $index[7],
                'purchase_invoice_id'        => $PurchaseInvoices->id
            ];
        }
        PurchaseInvoiceDetails::insert($unit);
        // fill appointments em ployees
        return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function show(Request $PurchaseInvoices)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PurchaseInvoices = PurchaseInvoices::FindOrFail($id);
        $Suppliers   = Supplier::all();
        return view('Procurement.Purchase_Invoices.update', compact('PurchaseInvoices', 'Suppliers'));
    }

    public function payment($id)
    {
        $PurchaseInvoices = PurchaseInvoices::FindOrFail($id);
        $Suppliers   = Supplier::where('id', $PurchaseInvoices->id_supplers)->get();
        $accounts  = Account::all();
        return view('Procurement.Purchase_Invoices.payment', compact('PurchaseInvoices', 'Suppliers', 'accounts'));
    }

    public function paymentPost(Request $request) {
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
            'acount_from' => 3,
            'acount_to' => $request->id_Account,
        ];
        Journal::insert($Journal);
        // fill appointments em ployees
        return redirect()->route('Supplierbond.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseInvoices  $Purchase_orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $PurchaseInvoices = PurchaseInvoices::findOrFail($id);
        $data = $request->all();

        //update in db
        $PurchaseInvoices->update($data);
        return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $PurchaseInvoices = PurchaseInvoices::find($id);
            $deleted =  $PurchaseInvoices->delete();
            if (!$deleted) {
                return redirect()->route('Purchase_Invoices.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Purchase_Invoices.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Purchase_Invoices.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
