<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scholarship_details;
use DB;
use Mail;
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
    
    public function notifiy(Request $request, Response $response) {
        $newData = new scholarship_details;
        $newData->name_scholarship = $request->name;
        $newData->start_date = $request->duration;
        $newData->eligibilty = $request->desc;
        $newData->save();
        $user = Auth::user()->id;
        Mail::send('appliedScholarship', ['user' => $user], function ($m) use ($user) {
            $m->from('gadmoin@gmail.com', 'E-Scholarship');
            $m->to(Auth::user()->email, Auth::user()->name)->subject('New ScholarShip!');
      
        return Redirect::back()->with('message', 'Added sucessfully !');
        });
    

}
}
