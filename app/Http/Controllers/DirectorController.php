<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class DirectorController extends Controller
{

    public function managing_Director(){
        return view('backend.pages.managing_director');
    }
    

    public function all_managing_Director(){
        $all_director=DB::table('director')->get();
        return view('backend.pages.all_director', compact('all_director'));
    }

    public function add_managing_Director(request $request){
        $validatedData = $request->validate([
         'name'=> 'required',
         'poasition'=> 'required',
         'education'=> 'required',
         'director_msg'=> 'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:291',
        ]);
         $data= array();
         $data['name']= $request->name;
         $data['poasition']= $request->poasition;
         $data['education']= $request->education;
         $data['director_msg']= $request->director_msg;
         $image=$request->file('image');
         if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/assets/backend/img/';
             $image_url=$upload_path.$image_full_name;
             $resize=Image::make($image)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
             $data['image']=$image_url;
              $data_insrt=DB::table('director')->insert($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully Added Director',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
         }
     }


     public function edit_managing_Director($id){
    	$edit_managing_director=DB::table('director')->where('id',$id)->first();
    	return view('backend.pages.edit_managing_director', compact('edit_managing_director'));
    }




    public function update_managing_Director(request $request,$id){
        $validatedData = $request->validate([
            'name'=> 'required',
            'poasition'=> 'required',
            'education'=> 'required',
            'director_msg'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:291',
            ]);
         $data= array();
         $data['name']= $request->name;
         $data['poasition']= $request->poasition;
         $data['education']= $request->education;
         $data['director_msg']= $request->director_msg;
         $image=$request->file('image');
         if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/assets/backend/img/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->encode('jpg')->save(Public_path('assets/backend/img/'.$image_full_name));
            $data['image']=$image_url;
             $data_insrt=DB::table('director')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Director Info Updated',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }

    }




        function delete_managing_Director($id){
            $delete_director= DB::table('director')->where('id',$id)->first();
            $image_url=$delete_director->image;
            $deletelatest_director= DB::table('director')->where('id',$id)->delete();
            unlink($image_url);
            if ($deletelatest_director) {
                    $notification=array(
                    'messege'=>'Successfully director deleted',
                    'alert-type'=>'success'
                    );
                    return redirect()->back()->with($notification);
            }    
}       }
