<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Tag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::orderby('id','desc')->paginate(20);
        return view('system.tag.index' ,compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
           'title_en'=>'required|string',
           'title_ar'=>'required|string',
        ]);

        if($validator->fails()){
            return  response(['errors'=>$validator->errors()]);
        }


         Tag::UpdateOrCreate([
             'title_en'=>$request->title_en,
             'title_ar'=>$request->title_ar,
         ]);

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
    public function update(Request $request, $id)
    {
        $validator=Validator::make($request->all() ,[
            'title_en'=>'required|string|unique:tags,name_en,'.$id,
            'title_ar'=>'required|string|unique:tags,name_en,'.$id,
        ]);

        if($validator->falis()){
            return  response(['errors'=>$validator->erros()]);
        }

        Tag::UpdateOrCreate('id',$id)->update($request->all());
        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return 'deleted';
    }
}
