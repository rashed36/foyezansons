<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class messagecontroller extends Controller
{
    public function message_submit(request $request){
         $validatedData = $request->validate([
         'name' => 'required|max:50',
         'phone' => 'required|max:16',
         'email' => 'required|max:60',
         'subject' => 'required|max:600',
         'message' => 'required|max:3000',
       ]);


        $data= array();
        $data['name']= $request->name;
        $data['phone']= $request->phone;
        $data['email']= $request->email;
        $data['subject']= $request->subject;
        $data['message']= $request->message;
     
         $data_insrt=DB::table('messages')->insert($data);
         if ($data_insrt) {
            return back()->with('message_sent','Your Message Has Send Succussfully!');
         }
         
    











    }
}
