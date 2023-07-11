<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class about_us_controller extends Controller
{
    public function edit_see_about_us($about_us){
    	$see_about_us=DB::table('about')->where('id',$about_us)->first();
    	return view('backend.pages.about_us', compact('see_about_us'));
    }
    public function see_about_us(){
        $see_about_us=DB::table('about')->first();
    	return view('backend.pages.see_about_us', compact('see_about_us'));
    }
    public function update_about_us(request $request,$id){
         $validatedData = $request->validate([
         'update_abute_us' => 'required|max:6000',
       ]);
        $data= array();
        $data['textbox']= $request->update_abute_us;
             $insure=DB::table('about')->where('id',$id)->update($data);
             if ($insure) {
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
             }

        }

}


