<?php

namespace App\Http\Controllers;

use App\Account;
use App\CcountEstrictions;
use App\DailyAccountingEntries;
use App\Site;
use Illuminate\Http\Request;

class DailyAccountingEntriesController extends Controller
{




    public function getDailyAccountingEntries(){

        $DailyAccountingEntries = DailyAccountingEntries::latest('id');
        $data = Datatables()->eloquent($DailyAccountingEntries)
        ->addColumn('action' , function($DailyAccountingEntries){
            return view('DailyAccountingEntries.actions' , ['type' => 'action' , 'DailyAccountingEntries' => $DailyAccountingEntries]);
        })

        ->editColumn('type', function ($DailyAccountingEntries){
            if ($DailyAccountingEntries->type == 1) {
                return  "تحركات اموال";
            } elseif ($DailyAccountingEntries->type == 2) {
                return  " اضافة راس مال";
            }  elseif ($DailyAccountingEntries->type == 3) {
                return  " اهلاك اصل ثابت";
            }  elseif ($DailyAccountingEntries->type == 4) {
                return  "سحب المالك";
            }  elseif ($DailyAccountingEntries->type == 5) {
                return  "توزيع الارباح ";
            }  elseif ($DailyAccountingEntries->type == 5) {
                return  " محاسبة الرواتب ";
            }
        })

        ->editColumn('id_account_from', function ($DailyAccountingEntries) {
            $accunt = Account::where('id', $DailyAccountingEntries->id_account_from)->first();
            return $accunt->name;
        })
        ->editColumn('id_account_to', function ($DailyAccountingEntries) {
            $accunt = Account::where('id', $DailyAccountingEntries->id_account_to)->first();
            return $accunt->name;
        })


        ->toJson();



        return $data;
    }
    public function index()
    {
        $DailyAccountingEntries = DailyAccountingEntries::all();
        return view('DailyAccountingEntries.index', compact(
            [
                'DailyAccountingEntries'
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


        $Sites      = Site::all();
        // dd($accunt);
        return view('DailyAccountingEntries.create', compact( 'Sites'));
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


        return redirect()->route('DailyAccountingEntries.index')->with(['success' => 'تم الحفظ بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DailyAccountingEntries  $DailyAccountingEntries
     * @return \Illuminate\Http\Response
     */
    public function show(Request $DailyAccountingEntries)
    {
        return $_GET;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DailyAccountingEntries  $DailyAccountingEntries
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DailyAccountingEntries = DailyAccountingEntries::find($id);
        $DailyAccountingEntries_id = $id;
        $title      = "";
        if ($DailyAccountingEntries_id == 1) {
            $title = "تحركات اموال";
        } elseif ($DailyAccountingEntries_id == 2) {
            $title = "اضافة راس مال ";
        }  elseif ($DailyAccountingEntries_id == 3) {
            $title = "اهلاك اصل ثابت";
        }  elseif ($DailyAccountingEntries_id == 4) {
            $title = "سحب المالك";
        }  elseif ($DailyAccountingEntries_id == 5) {
            $title = "توزيع ارباح";
        }  elseif($DailyAccountingEntries_id == 6){
            $title = " محاسبة الرواتب";
        }
        $accunts      = Account::all();
        // dd($accunt);
        return view('DailyAccountingEntries.update', compact('DailyAccountingEntries_id', 'accunts',  'title', 'DailyAccountingEntries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DailyAccountingEntries  $DailyAccountingEntries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $DailyAccountingEntries = DailyAccountingEntries::findOrFail($id);
        $data = $request->all();
        // dd($data);
        //update in db

        $DailyAccountingEntries->update($data);
        return redirect()->route('DailyAccountingEntries.index')->with(['success' => 'تم تحديث بيانات العميل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DailyAccountingEntries  $DailyAccountingEntries
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $DailyAccountingEntries = DailyAccountingEntries::find($id);
            $deleted =  $DailyAccountingEntries->delete();
            if (!$deleted) {
                return redirect()->route('DailyAccountingEntries.index')->with(['error' => 'هذه الوظيفة لا يمكن مسحها']);
            }
            return redirect()->route('DailyAccountingEntries.index')->with(['success' => 'تم حذف الوظيفة بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->route('DailyAccountingEntries.index')->with(['error' => 'هناك خطأ برجاء المحاولة ثانيا']);
        }
    }

}
