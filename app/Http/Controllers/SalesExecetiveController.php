<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesExecetiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function DailyReportForm(){
        return view('Web.ProfileManager.SalesExecutives.DailyReportSalesExecutive');
    }
    public function PostDailyReportForm(Request $request){
        dump($request->all());
    }
}
