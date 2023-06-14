<?php

namespace App\Http\Controllers;

use App\Account;
use App\Item;
use App\Product;
use App\ProductUint;
use App\Uint;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class ProductController extends Controller
{
    public function subAjaxUnit(Request $request) {
        $input = $request->all();
        $unit = Uint::create($input);
        return response()->json(['success'=>$unit->id]);
    }


    public function subAjaxItem(Request $request) {
        $input = $request->all();
        $unit = Item::create($input);
        return response()->json(['success'=>$unit->id]);
    }



    public function getUnit() {
        $unit = Uint::all();
        return response()->json($unit);
    }

    public function getProduct(){
        $Product = Product::latest('id');
        $data = Datatables()->eloquent($Product)
        ->addColumn('action' , function($Product){
            return view('Product.actions' , ['type' => 'action' , 'Product' => $Product]);
        })

        ->editColumn('type', function ($Product){
            if ($Product->type == 1) {
                return  "منتج";
            } elseif ($Product->type == 2) {
                return  "منتج مجمع";
            }  elseif ($Product->type == 3) {
                return  "مادة اولية";
            }  elseif ($Product->type == 4) {
                return  "خدمة";
            }  elseif ($Product->type == 5) {
                return  "مصروف";
            }
        })

        ->editColumn('id_unit', function ($Product){
            $unit = Uint::where('id', $Product->id_unit)->first();
            return $unit->name;
        })
        ->editColumn('id_des',  function ($Product){
            $item = Item::where('id', $Product->id_des)->first();
            return $item->name;
        })

        ->toJson();



        return $data;
    }
    public function index()
    {
        $Product = Product::all();
        return view('Product.index', compact(
            [
                'Product'
            ]
        ));
    }

    public function tenant()
    {
        return view('Product.add-product');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $product_id = $id;
        $title      = "";
        if ($product_id == 1) {
            $title = "منتج";
        } elseif ($product_id == 2) {
            $title = "منتج مجمع";
        }  elseif ($product_id == 3) {
            $title = "مادة اولية";
        }  elseif ($product_id == 4) {
            $title = "خدمة";
        }  elseif ($product_id == 5) {
            $title = "مصروف";
        }
        $units      = Uint::all();
        $items      = Item::all();
        $accounts     = Account::all();
        return view('Product.create', compact('product_id', 'units', 'items', 'title', 'accounts'));
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
        $len  = count($data['test']) / 7;
        $end   = 0;
        $start = 0;
        $group = [];
        $unit  = [];
       for ($i=0; $i < $len; $i++) {

           $group[] = array_slice($data['test'],$start , 7, false);

           $start += 7;

        }

        $product = Product::create($data);
        // dd($data);
        foreach ($group as $index) {
            $unit[] = [
                'id_unit'           => $index[0],
                'price_buy'         => $index[2],
                'is_buy_tex'        => $index[3],
                'price_sell'        => $index[4],
                'is_sell_text'      => $index[5],
                'barcode'           => $index[6],
                'id_product'        => $product->id
            ];
        }

        ProductUint::insert($unit);
        return redirect()->route('Product.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product = Product::find($id);
        return response()->json($Product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = Product::FindOrFail($id);
        return view('Product.update', compact('Product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Product = Product::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $Product->update($data);
        return redirect()->route('Product.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Product = Product::find($id);
            $deleted =  $Product->delete();
            if (!$deleted) {
                return redirect()->route('Product.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Product.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Product.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
