<?php

namespace App\Http\Controllers;

use App\Exports\ExportClientbonds;
use App\Exports\ExportClients;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function ExportClients ()
    {
        return Excel::download(new ExportClients, 'Clients.xlsx');
    }
    public function ExportClientbonds ()
    {
        return Excel::download(new ExportClientbonds, 'Clientbonds.xlsx');
    }
}
