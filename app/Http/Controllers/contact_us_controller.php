<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class contact_us_controller extends Controller
{

    public function contact_us(){
        $contact_us=DB::table('contact_us')->first();
    	return view('backend.pages.contact_us', compact('contact_us'));
    }

    public function edit_contact_us($contact_us){
    	$see_contact_us=DB::table('contact_us')->where('id',$contact_us)->first();
    	return view('backend.pages.edit_contact_us', compact('see_contact_us'));
    }

    public function update_contact_us(request $request,$id){
         $validatedData = $request->validate([
         'update_contact_us' => 'required|max:6000',
       ]);
        $data= array();
        $data['textbox']= $request->update_contact_us;
             $insure=DB::table('contact_us')->where('id',$id)->update($data);
             if ($insure) {
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
             }

        }




    

}
