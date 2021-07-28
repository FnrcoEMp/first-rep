<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Image;
use App\Model\Service;
use App\Model\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Traits\imageUploader;
class serviceController extends Controller
{

    use imageUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::orderby('id','desc')->paginate(20);
        return view('system.services.index' ,compact('services'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::all();
        return view('system.services.create' ,compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();

        $validator=Validator::make($request->all() ,[
            'title_en'=>'required|string',
            'title_ar'=>'required|string',
            'description_en'=>'sometimes|nullable|string',
            'description_ar'=>'sometimes|nullable|string',
            'icon'=>'required|string',
            'tags'=>'required|array|min:1',
            'tags.*'=>'required|numeric',
            'image'=>'sometimes|nullable|file|mimes:jpeg,png,jpg'
        ]);
        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }
        try {
            DB::beginTransaction();

            if($request->hasFile('image')){
                $data['image']=$this->uploadSingleImage($request->image ,'Service');
            }

            $service= Service::create($data);
            $service->tags()->sync($request->tags);
            DB::commit();

            return  'Saved';
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

        return  'saved';

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
    public function edit(Service $service)
    {
        $tags=Tag::all();
        $tagService=$service->tags()->pluck('tag_id')->toArray();
        return view('system.services.edit',compact('service','tags','tagService'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data=$request->all();

        $validator=Validator::make($request->all() ,[
            'title_en'=>'required|string',
            'title_ar'=>'required|string',
            'description_en'=>'sometimes|nullable|string',
            'description_ar'=>'sometimes|nullable|string',
            'icon'=>'required|string',
            'tags'=>'required|array|min:1',
            'tags.*'=>'required|numeric',
            'image'=>'sometimes|nullable|file|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()){
            return response(['errors'=>$validator->errors()]);
        }

        try {
            DB::beginTransaction();
            if($request->hasFile('image')){
                $data['image']=$this->uploadSingleImage($request->image ,'Service');
            }
             $service->update($data);
            $service->tags()->sync($request->tags);

            DB::commit();
            return  'Updated';

        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service  $service)
    {
        $service->images()->delete();
        $service->delete();
        return 'Deleted';
    }


}
