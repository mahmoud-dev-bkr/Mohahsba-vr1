<?php

namespace App\Http\Controllers;

use App\Account;
use App\Clientbond;
use App\EasyRestriction;
use App\PurchaseInvoices;
use App\Sales_invoices;
use App\Supplierbond;
use App\Journal;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Reports.index');
    }

    public function ReportRestriction() {
        $Journals = Journal::all();
        return view('Reports.ReportRestriction', compact('Journals'));
    }

    public function Statement() {
        $Accounts = Account::tree();
        return view('Reports.Statement.index', compact([
            'Accounts'
        ]));
    }

    public function ReportTeacher() {
        $Accounts = Account::tree();
        return view('Reports.Report1_Tec.index', compact([
            'Accounts'
        ]));
    }
    public function Report3() {
        $Accounts = Account::tree();
        return view('Reports.Report3.index', compact([
            'Accounts'
        ]));
    }



}
