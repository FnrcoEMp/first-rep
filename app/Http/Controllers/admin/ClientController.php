<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Client;
use Illuminate\Support\Facades\Validator;
use App\Traits\imageUploader;
class ClientController extends Controller
{
    use imageUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clients=Client::orderby('id','desc')->paginate(20);
        return view('system.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all() ,[
            'image'=>'required|image:mimes:jpeg,png,jpg',

        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }




        $data['image']=$this->uploadSingleImage($request->image ,'clients');


        Client::create($data);
        return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data=[];
        $validator=Validator::make($request->all() ,[
            'image'=>'sometimes|nullable|image:mimes:jpeg,png,jpg',

        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }


        if($request->hasFile('image')){
            $data['image']=$this->uploadSingleImage($request->image ,'clients');
        }
        $client->update($data);
        return 'Saved';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return 'deleted';
    }
}
