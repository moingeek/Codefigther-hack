<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scholarship_details;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class Dashboard extends Controller
{   
    public function dash(Request $request, Response $response){
        $data = DB::table('scholarship_details')->limit('10')->get();
        // dd($data);
        $type = DB::table('scholarship_details')->where('eligibilty','MBBS')->get();
        return view('dashboard',compact('data','type'));
    } 
}
