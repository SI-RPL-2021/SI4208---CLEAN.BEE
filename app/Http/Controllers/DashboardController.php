<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){
        $selimut = DB::select("SELECT COUNT(*) as selimut from cuciselimuts");
        $pakaian = DB::select("SELECT COUNT(*) as baju from cucipakaians");
        $sepatu = DB::select("SELECT COUNT(*) as sepatu from cucisepatus");
        
        
       
        return view ('adminDashboard',['pakaian'=>$pakaian],['selimut'=>$selimut],['sepatu'=>$sepatu]);
    }

    
}
