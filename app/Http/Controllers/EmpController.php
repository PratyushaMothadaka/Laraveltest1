<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmpController extends Controller
{
    public function show($empid){
        $data = DB::table('empdetails')->where('empid',$empid)->first();
        dd($data);
        return view('emp',[
            'data'=> $data
        ]);
    }
}