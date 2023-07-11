<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class office_controller extends Controller
{
    public function home_office_info (){
        return view('backend.pages.add_office_info');
    }

    public function all_office_info () {
        $all_office=DB::table('office')->get();
        return view('backend.pages.all_office_info', compact('all_office'));
    }

    public function add_office_info(request $request){
        $validatedData = $request->validate([
          'location' => 'required|max:100',
          'name' => 'required|max:291',
          'posation' => 'required|max:291',
          'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',
          'map_link' => 'required'
        ]);
         $data= array();
         $data['location']= $request->location;
         $data['name']= $request->name;
         $data['posation']= $request->posation;
         $data['phone']= $request->phone;
         $data['email']= $request->email;
         $data['map_link']= $request->map_link;
         $data['address']= $request->address;
         $image=$request->file('images');
         if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/assets/backend/img/';
             $image_url=$upload_path.$image_full_name;
             $resize=Image::make($image)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
             $data['images']=$image_url;
              $data_insrt=DB::table('office')->insert($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully Office Info Added',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
             }else{
                  DB::table('office')->insert($data);
                  $notification=array(
                     'messege'=>'Successfully Office Info Inserted',
                     'alert-type'=>'success'
                      );
                   return redirect()->back()->with($notification);
         }
     }

     public function edit_office_info($id){
    	$edit_office_info=DB::table('office')->where('id',$id)->first();
    	return view('backend.pages.edit_office_info', compact('edit_office_info'));
    }

     public function update_office_info(request $request,$id){
        $validatedData = $request->validate([
          'location' => 'required|max:100',
          'name' => 'required|max:291',
          'posation' => 'required|max:291',
          'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',
          'map_link' => 'required'
        ]);
         $data= array();
         $data['location']= $request->location;
         $data['name']= $request->name;
         $data['posation']= $request->posation;
         $data['phone']= $request->phone;
         $data['email']= $request->email;
         $data['map_link']= $request->map_link;
         $data['address']= $request->address;
         $image=$request->file('images');
         if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/assets/backend/img/';
             $image_url=$upload_path.$image_full_name;
             $resize=Image::make($image)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
             $data['images']=$image_url;
              $data_insrt=DB::table('office')->where('id',$id)->update($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully Office Info Updated',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
             }
     }
}
