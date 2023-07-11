<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class slider_controller extends Controller
{
    public function home_slider (){
        return view('backend.pages.home_slider');
    }

    public function all_slider (){
        $all_slider=DB::table('slider')->get();
        return view('backend.pages.all_slider', compact('all_slider'));
    }

    public function add_slider(request $request){
        $validatedData = $request->validate([
          'name' => 'required|max:291',
          'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',
        ]);
         $data= array();
         $data['title']= $request->name;
         $image=$request->file('images');
         if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/assets/backend/img/';
             $image_url=$upload_path.$image_full_name;
             $resize=Image::make($image)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
             $data['images']=$image_url;
              $data_insrt=DB::table('slider')->insert($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully Slider Added',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
             }else{
                  DB::table('slider')->insert($data);
                  $notification=array(
                     'messege'=>'Successfully Slider Inserted',
                     'alert-type'=>'success'
                      );
                   return redirect()->back()->with($notification);
         }
     }
 

    function delete_slider($slider_photo_id){
        $delete_slider= DB::table('slider')->where('id',$slider_photo_id)->first();
        $image_url=$delete_slider->images;
        $deletelatest_slider= DB::table('slider')->where('id',$slider_photo_id)->delete();
        unlink($image_url);
        if ($deletelatest_slider) {
                $notification=array(
                'messege'=>'Successfully slider deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 

}
