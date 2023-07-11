<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class StaffController extends Controller
{
    public function staff(){
        return view('backend.pages.add_staff');
    }

    public function all_staff(){
        $all_staff=DB::table('staff')->get();
        return view('backend.pages.all_staff', compact('all_staff'));
    }

   public function add_staff(request $request){
       $validatedData = $request->validate([
        'name'=> 'required',
        'position'=> 'required',
        'detils'=> 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:291',
       ]);
        $data= array();
        $data['name']= $request->name;
        $data['position']= $request->position;
        $data['detils']= $request->detils;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/assets/backend/img/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(400,400)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
            $data['image']=$image_url;
             $data_insrt=DB::table('staff')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Added Staff',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
        }
    }
    
    function delete_staff($id){
        $delete_news= DB::table('staff')->where('id',$id)->first();
        $image_url=$delete_news->image;
        $deletelatest_news= DB::table('staff')->where('id',$id)->delete();
        unlink($image_url);
        if ($deletelatest_news) {
                $notification=array(
                'messege'=>'Successfully Staff deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 
}
