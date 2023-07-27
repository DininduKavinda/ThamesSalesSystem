<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesExecetiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function BeforeDailyReportForm(){
        return view('Web.ProfileManager.SalesExecutives.BeforeDailyReportSalesExecutive');
    }

    public function PostBeforeDailyReportForm(Request $request){
        dump($request->all());
    }
}
