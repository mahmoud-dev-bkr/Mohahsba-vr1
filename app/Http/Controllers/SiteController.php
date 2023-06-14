<?php

namespace App\Http\Controllers;

use App\Site;
use App\Inventory;
use Dotenv\Validator;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class SiteController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function getSite(){
        $Site = Site::latest('id');
        $data = Datatables()->eloquent($Site)
        ->addColumn('action' , function($Site){
            return view('Site.actions' , ['type' => 'action' , 'Site' => $Site]);
        })
        ->editColumn('Inventory_id', function ($Site){
            $Inventory = Inventory::where('id', $Site->Inventory_id)->first();
            return $Inventory->name;
        })
        ->toJson();


        return $data;
    }
    public function index()
    {
        $Site = Site::all();
        return view('Site.index', compact(
            [
                'Site'
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
        $Inventory = Inventory::all();
        return view('Site.create', compact(['Inventory']));
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

        if ($request->pointsSite == 'on') {
            $data['pointsSite'] = 1;
        } else {
            $data['pointsSite'] = 0;
        }
        Site::create($data);
        // fill appointments em ployees
        return redirect()->route('Site.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $Site
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Site)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $Site
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Site = Site::FindOrFail($id);
        $Inventory = Inventory::all();
        return view('Site.update', compact(['Inventory','Site']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $Site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Site = Site::findOrFail($id);
        $data = $request->all();

        if ($request->pointsSite == 'on') {
            $data['pointsSite'] = 1;
        } else {
            $data['pointsSite'] = 0;
        }
        //update in db
        $Site->update($data);
        return redirect()->route('Site.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $Site
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Site = Site::find($id);
            $deleted =  $Site->delete();
            if (!$deleted) {
                return redirect()->route('Site.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('Site.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('Site.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }
}
