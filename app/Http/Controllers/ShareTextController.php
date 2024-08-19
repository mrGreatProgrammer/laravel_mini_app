<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareTextController extends Controller
{
    //
    public function shareText(Request $request){
        // $request->query("/")
         return    redirect('/share/text');
        // return view('sharetxt');
    }
}
