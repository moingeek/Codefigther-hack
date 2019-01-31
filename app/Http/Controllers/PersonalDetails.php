<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\User;
use DB;
use App\personal_details;
use App\education_details;
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

    public function fulldetails(Request $request,Response $response){
        $details = new personal_details();
        $details->address = $request->address;
        $id = Auth::user()->id;
        $details->user_id = $id;
        $details->account_no = $request->account;
        $details->father_name = $request->father;
        $details->mother_name = $request->mother;
        $details->f_salary = $request->fsal;
        $details->m_salary = $request->msal;
        $details->f_occupation = $request->focc;
        $details->m_occupation = $request->mocc;
        $details->annual_income = $request->annsal;
        $details->save();
        return view('home');
    }

    public function edudetails(Request $request,Response $response){
        $edu = new education_details();
        
        $id = Auth::user()->id;
        $edu->user_id = $id;
        $edu->ssc_percantage = $request->ssc;
        $edu->hsc_percantage = $request->hsc;
        $edu->diploma = $request->diploma;
        $edu->degree_overall = $request->degree;
        
        $edu->save();
        return view('home');
    }
}
