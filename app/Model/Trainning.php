<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Trainning extends Model
{
    protected $fillable= ['description_ar','objective_en','attend_en','benefits_en','meeting_en',
        'benefits_implement','trainer_id','level_en','lesson_en','enrolled_en',
            'access_en','language_en','material_en','title_en', 'iso','image'
        ];

    public function courses(){
        return $this->hasMany('App\Model\Course' ,'training_id');
    } public function trainer(){
        return $this->belongsTo('App\Model\Team' ,'trainer_id');
    }
}
