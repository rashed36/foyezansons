<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CarrierMail;
use Mail;
use DB;
use File;

class frontendController extends Controller
{
    public function homefronted(){
    // $all_blog= DB::table('latest_news')->latest()->paginate(3);
	$home_image= DB::table('home_image')->limit(16)->latest()->orderBy('id','DESC')->get();
    $product_name= DB::table('product_name')->limit(16)->latest()->orderBy('id','DESC')->get();
    $slider= DB::table('slider')->orderBy('id','DESC')->get();
	// $middle_photo= DB::table('middle_photo')->first();
    	return view('frontend.pages.home', compact('home_image','product_name','slider'));
    }
    public function aboute(){
    $aboute= DB::table('about')->first();
	// $middle_photo= DB::table('middle_photo')->first();
    $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
    	return view('frontend.pages.aboute', compact('aboute','product_name'));
    }
    public function contact(){
    $contact_us= DB::table('contact_us')->first();
    // $middle_photo= DB::table('middle_photo')->first();
    $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
        return view('frontend.pages.home_contact', compact('contact_us','product_name'));
    }
    public function home_products(){
    //$home_products= DB::table('home_image')->where('catgory',1)->get();

    $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
    
    $home_image= DB::table('home_image')->latest()->orderBy('id','DESC')->get();

        return view('frontend.pages.home_products', compact('product_name','home_image'));
    }
    public function home_men(){
    $home_men= DB::table('home_image')->where('catgory',2)->get();
    // $middle_photo= DB::table('middle_photo')->first();
        return view('frontend.pages.home_men', compact('home_men'));
    }
    public function children(){
    $children= DB::table('home_image')->where('catgory',3)->get();
    // $middle_photo= DB::table('middle_photo')->first();
        return view('frontend.pages.children', compact('children'));
    }
    public function home_furnishings(){
    $home_furnishings= DB::table('home_image')->where('catgory',4)->get();
    // $middle_photo= DB::table('middle_photo')->first();
        return view('frontend.pages.home_furnishings', compact('home_furnishings'));
    }
    public function home_accessories(){
    $home_accessories= DB::table('home_image')->where('catgory',5)->get();
    // $middle_photo= DB::table('middle_photo')->first();
        return view('frontend.pages.home_accessories', compact('home_accessories'));
    }
    public function strenghs(){
    $strenghs= DB::table('strengths')->first();
        return view('frontend.pages.strenghs', compact('strenghs'));
    }
    public function achivements(){
    $achivements= DB::table('achoevements')->first();
    $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
        return view('frontend.pages.achivements', compact('achivements','product_name'));
    }




    public function product_name_v($id){
    $product_name_v= DB::table('product_name')
    ->join('home_image', 'product_name.id', '=', 'home_image.catgory')
    ->where('product_name.id',$id)->get();
        return view('frontend.pages.product_name_v', compact('product_name_v'));
    }



    public function home_products_v($id){

    $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
       
    $home_image= DB::table('product_name')
    ->join('home_image', 'product_name.id', '=', 'home_image.catgory')
    ->where('product_name.id',$id)->get();
        return view('frontend.pages.home_products', compact('home_image','product_name'));
    }


    public function uk_office(){
        $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
        $uk_of= DB::table('office')->get();
            return view('frontend.pages.uk_office', compact('product_name','uk_of'));
    }


    public function bd_office(){
        $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
        $bd_of= DB::table('office')->where('location','=','bd-office')->get();
            return view('frontend.pages.bd_office', compact('product_name','bd_of'));
    }

    public function carrier(){
        $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
            return view('frontend.pages.carier', compact('product_name'));
    }

    public function single_product(request $request,$id){
        $product_name= DB::table('product_name')->latest()->orderBy('id','DESC')->get();
        $p_name= DB::table('home_image')->where('id',$id)->get();
            return view('frontend.pages.single_product', compact('p_name','product_name'));
    }

    public function sendEmail(Request $request)
    {
        $data= array();
        $data['title']= $request->title;
        $data['name']= $request->name;
        $data['phone']= $request->phone;
        $data['email']= $request->email;
        $data['dob']= $request->dob;
        $data['natinality']= $request->natinality;
        $data['education']= $request->education;
        $data['ins']= $request->ins;
        $file=$request->file('file');
        if ($file) {
            $file_name=hexdec(uniqid());
            $ext=strtolower($file->getClientOriginalExtension());
            $file_full_name=$file_name.'.'.$ext;
            $upload_path='assets/backend/img/';
            $file_url=$upload_path.$file_full_name;
            $file_url_for_m='https://foyezandsons.co.za/'.$upload_path.$file_full_name;
            $img_path=Public_path($file_url);
            file_put_contents($img_path,base64_decode($file));
            $data['file']=$file_url;
             $data_insrt=DB::table('carrier')->insert($data);
             if ($data_insrt) {

                $details = [
                    'title' => $request->title,
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'dob' => $request->dob,
                    'natinality' => $request->natinality,
                    'file' => $file_url_for_m,
                    'education' => $request->education,
                    'ins' => $request->ins
                ];
                Mail::to('rashed4pa@gmail.com')->send(new CarrierMail($details));
                return back()->with('message_sent','Your Carrier Has Send Succussfully!');
             }
        }  
    }

    public function our_products(){
        $product_name= DB::table('product_name')->limit(16)->latest()->orderBy('id','DESC')->get();
        // $middle_photo= DB::table('middle_photo')->first();
            return view('frontend.pages.our_products', compact('product_name'));
    }

    public function company_profile(){
        return view('frontend.pages.company_profile');
    }

    public function bord_of_directors(){
        $director= DB::table('director')->orderBy('id','ASC')->get();
        return view('frontend.pages.bord_of_directors', compact('director'));
    }

    public function our_services(){
        return view('frontend.pages.our_services');
    }

    public function responsibilities_and_capabilities(){
        return view('frontend.pages.responsibilities_and_capabilities');
    }

    public function vision_miission_and_values(){
        return view('frontend.pages.vision_miission_and_values');
    }

    public function staff_members(){
        $s_name= DB::table('staff')->get();
        return view('frontend.pages.staff_members', compact('s_name'));
    }

    public function work_with_us(){
        return view('frontend.pages.work_with_us');
    }

    public function director1($id){
        return view('frontend.pages.director1');
    }

    public function director2(){
        return view('frontend.pages.director2');
    }


    public function director_profile($id){
        $director_of=DB::table('director')->where('id',$id)->first();
        return view('frontend.pages.director1', compact('director_of'));
    }


   

    

    

}
