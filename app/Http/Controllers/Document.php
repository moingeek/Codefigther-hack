<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\documents;

class Document extends Controller
{
    public function uploader(Request $request, Response $response){
        $file = $request->file('pdf');
            $allowedExts = array("pdf");
            $array = explode(".", $_FILES["file"]["name"]);
            $extension = end($array);
            if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 20000000) && in_array($extension, $allowedExts)) {
                if ($_FILES["file"]["error"] > 0) {
                    echo "Return Code: " . $_FILES["pdf"]["error"] . "<br>";
                    echo "Error" . '<br>';
                } else {
                    $path = "/home/moin/Codefigther-hack/frontend/";
                    move_uploaded_file($_FILES["file"]["tmp_name"], $path . $_FILES['file']['name']);
                    $Filename = basename($_FILES['file']['name']);
               
                        $newDoc = new documents();
                        $newDoc->aadhar = $Filename;
                        $newDoc->user_id = Auth::user()->id;
                        $newDoc->save();
                        return Redirect::back()->with('message', 'Document uploaded sucessfully !');
                    
            }
        }
    }
}
