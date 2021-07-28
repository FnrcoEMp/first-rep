<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $fillable=['our_mission_en','our_mission_ar','our_vision_en','our_vision_ar','message_en','message_ar','about_ar','about_en','our_quality_objective_ar','our_quality_objective_en'];
}
