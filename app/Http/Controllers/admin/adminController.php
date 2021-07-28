<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{

    public function ShowLogin(){

        return view('system.layouts.login');
    }

    public function doLogin(Request  $request){


        $validator=Validator::make($request->all() ,[
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }

        if(auth()->guard('admin')->attempt(['email'=>$request->email ,'password'=>$request->password] ,true)){
            return 'success';
        }else{
            return response(['errors'=>['Email Or Password InValid Try again']]);
        }
    }

    public function dashboard(){
        return view('system.layouts.dashboard');
    }

    public function Logout(){

        auth()->guard('admin')->logout();
        return redirect('admin/login');

    }
}
