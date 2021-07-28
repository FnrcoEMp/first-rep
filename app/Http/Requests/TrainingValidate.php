<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
            [
                'title_en'=>'required|string',
                'image'=>$this->image(),
                'description_ar' =>'required|string',
                'objective_en'    =>'required|string',
                'attend_en'       =>'required|string',
                'benefits_en'      =>'required|string',
                'meeting_en'       =>'required|string',
                'benefits_implement'  =>'required|string',
                'trainer_id'       =>'required|string',
                'level_en'         =>'required|string',
                'lesson_en'        =>'required|string' ,
                'enrolled_en'      =>'required|string',
                'access_en'        =>'required|string',
                'language_en'      =>'required|string',
                'material_en'      =>'required|string',

        ];
    }

   public function image(){

        if(\Request::route()->getName()=='trainings.store'){
            return 'required|file|mimes:jpeg,png,jpg';
        }else{
            return 'sometimes|nullable|file|mimes:jpeg,png,jpg';

        }
   }
}
