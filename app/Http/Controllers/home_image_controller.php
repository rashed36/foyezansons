<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class home_image_controller extends Controller
{
    public function home_image(){
        $all_home_catagory=DB::table('product_name')->get();
    	return view('backend.pages.home_image', compact('all_home_catagory'));
    }

   public function insurt_home_image(request $request){
       $validatedData = $request->validate([
        'product_name'=> 'required',
        'product_price'=> 'required',
        'description'=> 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:291',
       ]);
        $data= array();
        $data['catgory']= $request->catgory;
        $data['product_name']= $request->product_name;
        $data['Product_price']= $request->product_price;
        $data['Product_detils']= $request->description;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/assets/backend/img/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(500,775)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
            $data['image']=$image_url;
             $data_insrt=DB::table('home_image')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully product Added',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
        }
    }

    public function all_photo(){
        $all_photo=DB::table('home_image')->get();
        return view('backend.pages.all_photo', compact('all_photo'));
    }


    
    public function edit_product($id){
        $all_product=DB::table('home_image')->where('id',$id)->first();
        $all_home_catagory=DB::table('product_name')->get();
    	return view('backend.pages.edit_product', compact('all_product', 'all_home_catagory'));
    }

    public function update_product(request $request,$id){
        $validatedData = $request->validate([
         'product_name'=> 'required',
         'product_price'=> 'required',
         'description'=> 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:291',
        ]);
         $data= array();
         $data['catgory']= $request->catgory;
         $data['product_name']= $request->product_name;
         $data['Product_price']= $request->product_price;
         $data['Product_detils']= $request->description;
         $image=$request->file('image');
         if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/assets/backend/img/';
             $image_url=$upload_path.$image_full_name;
             $resize=Image::make($image)->resize(500,775)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
             $data['image']=$image_url;
              $data_insrt=DB::table('home_image')->where('id',$id)->update($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully product Updated',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
         }
     }
 


    function delete_photo($delete_photo_id){
        $delete_news= DB::table('home_image')->where('id',$delete_photo_id)->first();
        $image_url=$delete_news->image;
        $deletelatest_news= DB::table('home_image')->where('id',$delete_photo_id)->delete();
        unlink($image_url);
        if ($deletelatest_news) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 


    public function home_create_product(){
        return view('backend.pages.home_create_product');
    }

   public function insurt_product_name_sub(request $request){
       $validatedData = $request->validate([
         'name' => 'required|max:291',
         'short_description' => 'required',
         'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',
       ]);
        $data= array();
        $data['name']= $request->name;
        $data['short_description']= $request->short_description;
        $image=$request->file('images');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/assets/backend/img/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
            $data['images']=$image_url;
             $data_insrt=DB::table('product_name')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('product_name')->insert($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
    }


    public function all_productname(){
        $all_productname=DB::table('product_name')->get();
        return view('backend.pages.all_productname', compact('all_productname'));
    }

    public function update_photo_p_name($id){
        $all_product=DB::table('product_name')->where('id',$id)->first();
    	return view('backend.pages.edit_photo_p_name', compact('all_product'));
    }

    public function update_product_name(request $request,$id){
        $validatedData = $request->validate([
          'name' => 'required|max:291',
          'short_description' => 'required',
          'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8000',
        ]);
         $data= array();
         $data['name']= $request->name;
         $data['short_description']= $request->short_description;
         $image=$request->file('images');
         if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/assets/backend/img/';
             $image_url=$upload_path.$image_full_name;
             $resize=Image::make($image)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
             $data['images']=$image_url;
              $data_insrt=DB::table('product_name')->where('id',$id)->update($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully Post Update',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
             }else{
                  DB::table('product_name')->insert($data);
                  $notification=array(
                     'messege'=>'Successfully Post Inserted',
                     'alert-type'=>'success'
                      );
                   return redirect()->back()->with($notification);
         }
     }





    function delete_photo_p_name($delete_photo_id){
        $delete_news= DB::table('product_name')->where('id',$delete_photo_id)->first();
        $image_url=$delete_news->images;
        $deletelatest_news= DB::table('product_name')->where('id',$delete_photo_id)->delete();
        unlink($image_url);
        if ($deletelatest_news) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 





}
