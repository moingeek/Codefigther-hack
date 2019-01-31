<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;


class PersonalDetails extends Controller
{
    public function halfdetails(Request $request,Response $response){
        
        if( $request->type = 'Student') {
            $user = DB::table('users')->where('email',$request->email)->get();
            $name= $user[0]->name;
            $aadhar = $request->aadhar_no;
            $type = $request->type;
            $stype= $request->sudtype;
            DB::table('users')->where('name',$name)->update([
                'aadhar_no' => $aadhar,
                'type'=> $type,
                'stype' => $stype
            ]);
            return view('home');
        }else{
            $user = DB::table('users')->where('email',$request->email)->get();
            $name= $user[0]->name;
            $aadhar = $request->aadhar_no;
            $type = $request->type;
            $stype= $request->org_name;
            DB::table('users')->where('name',$name)->update([
                'aadhar_no' => $aadhar,
                'type'=> $type,
                'stype' => $stype
            ]);
            return view('home');
        }
    }
}
