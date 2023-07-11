<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class achievementscontroller extends Controller
{
    public function achievements(){
        $achievements=DB::table('achoevements')->first();
    	return view('backend.pages.achievements', compact('achievements'));
    }

    public function edit_achievements($strengths_id){
    	$edit_achievements=DB::table('achoevements')->where('id',$strengths_id)->first();
    	return view('backend.pages.edit_achievements', compact('edit_achievements'));
    }
    
    public function update_achievements(request $request,$id){
         $validatedData = $request->validate([
         'update_achievements' => 'required|max:6000',
       ]);
        $data= array();
        $data['textbox']= $request->update_achievements;
             $insure=DB::table('achoevements')->where('id',$id)->update($data);
             if ($insure) {
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
             }

        }
}
