<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){
        $pakaian = DB::select("SELECT COUNT(*) as baju from cucipakaians");
        $selimut = DB::select("SELECT COUNT(*) as selimut from cuciselimuts");
        
        return view ('adminDashboard',['pakaian'=>$pakaian],['selimut'=>$selimut]);
    }

    public function sepatu(){
        $sepatu = DB::select("SELECT COUNT(*) as sepatu from cucisepatus");
        return view ('adminDashboard',['sepatu'=>$sepatu]);
    }
}
