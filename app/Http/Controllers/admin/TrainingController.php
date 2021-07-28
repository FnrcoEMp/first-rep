<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Course;
use App\Model\Team;
use App\Model\Trainning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\imageUploader;
use App\Http\Requests\TrainingValidate;
class TrainingController extends Controller
{
    use imageUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $trainings=Trainning::with('trainer')->paginate(20);
       return view('system.training.index' ,compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams=Team::all();
        return  view('system.training.create',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingValidate $request)
    {

        //dd($request->all());

        $data=$request->except('work');
        $data['image']=$this->uploadSingleImage($request->image ,'Training');

        $training=Trainning::create($data);



        foreach ($request->work as $course)
        {


            Course::create([
                'title'=>$course['title'],
                'description'=>$course['description'],
                 'training_id'=>$training->id,
                ]);
        }
        return 'done';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams=Team::all();
        $training=Trainning::with('courses')->findOrFail($id);

       // dd($training['courses']);
        return  view('system.training.edit',compact('teams','training'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainning $training)
    {
        $data = $request->except('work');
        if ($request->hasFile) {
            $data['image'] = $this->uploadSingleImage($request->image, 'Training');
        }

        $training->update($data);

        if (isset($request->work))
        {
            $training->courses()->delete();
            foreach ($request->work as $course) {
                if($course['title'] !=null && $course['description'] !=null){
                    Course::create([
                        'title' => $course['title'],
                        'description' => $course['description'],
                        'training_id' => $training->id,
                    ]);
                }

            }
    }
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainning $training)
    {
        $training->courses()->delete();
        $training->delete();
        return 'deleted';
    }
}
