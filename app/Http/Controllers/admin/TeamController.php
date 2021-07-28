<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\imageUploader;
class TeamController extends Controller
{

    use imageUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::paginate(10);
        return view('system.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name_en' =>'required|string',
            'name_ar' =>'required|string',
            'position_ar' =>'sometimes|nullable|string',
            'position_en' =>'sometimes|nullable|string',
            'description_en' =>'required|string',
            'description_ar' =>'required|string',
            'image' =>'required|file|mimes:jpeg,jpg,png'
        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }

        $data=$request->all();
        $data['image']=$this->uploadSingleImage($request->image ,'Teams');
        Team::create($data);


        return 'saved';
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
    public function edit(Team $team)
    {
        return view('system.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data=$request->all();

        $validator=Validator::make($request->all(),[
            'name_en' =>'required|string',
            'name_ar' =>'required|string',
            'position_ar' =>'sometimes|nullable|string',
            'position_en' =>'sometimes|nullable|string',
            'description_en' =>'required|string',
            'description_ar' =>'required|string',
            'image' =>'sometimes|nullable|file|mimes:jpeg,jpg,png'
        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }

      if($request->hasFile('image')){
          $data['image']=$this->uploadSingleImage($request->image ,'Teams');
      }
        $team->update($data);
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return 'destroy';
    }
}
