<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class strenghscontroller extends Controller
{
    public function b_strengths(){
        $b_strengths=DB::table('strengths')->first();
    	return view('backend.pages.b_strengths', compact('b_strengths'));
    }

    public function edit_b_strengths($strengths_id){
    	$edit_b_strengths=DB::table('strengths')->where('id',$strengths_id)->first();
    	return view('backend.pages.edit_b_strengths', compact('edit_b_strengths'));
    }

    public function message_submit_view(){
        $message_submit_view=DB::table('messages')->get();
        return view('backend.pages.message_submit_view', compact('message_submit_view'));
    }
    
    public function update_b_strengths(request $request,$id){
         $validatedData = $request->validate([
         'update_b_strengths' => 'required|max:6000',
       ]);
        $data= array();
        $data['textbox']= $request->update_b_strengths;
             $insure=DB::table('strengths')->where('id',$id)->update($data);
             if ($insure) {
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
             }

        }
}
