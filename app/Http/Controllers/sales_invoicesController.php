<?php

namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\Client;
use App\Clientbond;
use App\Journal;
use App\Product;
use App\PurchaseInvoiceDetails;
use App\PurchaseInvoices;
use Illuminate\Http\Request;
use App\sales_invoices;
use Illuminate\Support\Facades\Validator;


class sales_invoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSales_invoices(){
        $PurchaseInvoices = PurchaseInvoices::where('type', "2");
        $data = Datatables()->eloquent($PurchaseInvoices)
        ->addColumn('action' , function($PurchaseInvoices){
            return view('Sales.Sales_invoices.actions' , ['type' => 'action' , 'PurchaseInvoices' => $PurchaseInvoices]);
        })
        ->editColumn('id_supplers', function ($PurchaseInvoices){
            $Client = Client::where('id', $PurchaseInvoices->id_supplers)->first();
            return  $Client->name;
        })

        ->toJson();


        return $data;
    }
    public function index()
    {
        $PurchaseInvoices = PurchaseInvoices::all();
        return view('Sales.Sales_invoices.index', compact(
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
        $Clients = Client::where('status', 1)->get();
        $products   = Product::all();
        return view('Sales.Sales_invoices.create', compact('Clients', 'products'));
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
        $data['type'] = 2;
        $data['residual'] = $request->total;
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
            'type' => '2',
            'account_type' => $PurchaseInvoices->id,
            'ammount_from' => 0,
            'ammount_to'   => $request->total,
        ];
        CcountEstrictions::create($CcountEstrictions);
        $Journal = [];
        $Journal[] = [
            'journal_id' => $PurchaseInvoices->id,
            'type' => 2,
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
        return redirect()->route('sales_invoices.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseInvoices  $PurchaseInvoices
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('Sales.Sales_invoices.invoice');
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
        $Clients   = Client::all();
        return view('Sales.Sales_invoices.update', compact('PurchaseInvoices', 'Clients'));
    }

    public function payment($id)
    {

        $PurchaseInvoices = PurchaseInvoices::FindOrFail($id);
        $Clients   = Client::where('id', $PurchaseInvoices->id_supplers)->get();
        $accounts  = Account::all();
        return view('Sales.Sales_invoices.payment', compact('PurchaseInvoices', 'Clients', 'accounts'));
    }

    public function paymentPost(Request $request) {
        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'Amount' => 'required',
            'id_Account' => 'required',
            'Date' => 'required',
            'id_customers' => 'required',
            'type' => 'required',
            'code' => 'required',
            'PurchaseInvoices_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $Clientbond=  Clientbond::create($data);
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
        $PurchaseInvoices = PurchaseInvoices::findOrFail($request->PurchaseInvoices_id);
        $updateInvoiceResidual = [ 'residual' => $request->residual];
        $PurchaseInvoices->update($updateInvoiceResidual);
        return redirect()->route('Clientbond.index')->with(['success' => 'تم الحفظ بنجاح']);
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
        return redirect()->route('sales_invoices.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
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
                return redirect()->route('sales_invoices.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('sales_invoices.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('sales_invoices.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
