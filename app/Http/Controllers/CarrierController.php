<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CarrierController extends Controller
{
    public function all_career(){
        $career_submit_view=DB::table('carrier')->get();
        return view('backend.pages.career_submit_view', compact('career_submit_view'));
    }

}
