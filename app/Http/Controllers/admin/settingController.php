<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Model\Setting;
use App\Model\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class settingController extends Controller
{


    public function Our_Values(){

        $setting=Setting::orderby('id','desc')->first();



        return view('system.setting.ourValue',compact('setting'));

    }

    public function Our_Values_Update(Request $request){

        $validator=Validator::make($request->all() ,[
            'our_mission_en'=>'required|string',
            'our_mission_ar' =>'required|string',
            'our_vision_en' =>'required|string',
            'our_vision_ar'=>'required|string',
            'message_en'=>'required|string',
            'message_ar'=>'required|string',
            'about_ar'=>'required|string',
            'about_en'=>'required|string',
        ]);
        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
        $setting=Setting::orderby('id','desc')->first();

        $setting->update($request->all());
        return  'Updated';

    }

    public function contactus(){
        $contact=Contact::orderby('id','desc')->first();
        return view('system.setting.contact',compact('contact'));
    }


    public function ContactUs_update(Request $request){

        $validator=Validator::make($request->all() ,[
            'phone'         =>'required|string',
            'email'         =>'required|email',
            'address_en'    =>'required|string',
            'address_ar'    =>'required|string',
            'time_hour_en'  =>'required|string',
            'time_hour_ar'  =>'required|string',
        ]);
        if($validator->fails()) {
            return response(['errors' => $validator->errors()]);
        }
        $setting=Contact::orderby('id','desc')->first();
        $setting->update($request->all());
        return  'Updated';

    }



}
