<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesAreaManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function BeforeMonthlyReportForm(){
        return view('Web.ProfileManager.AreaSalesManagers.BeforeMonthlyManagerReportForm');
    }
}
