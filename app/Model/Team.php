<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=['name_en','name_ar','position_ar','position_en','description_en','description_ar','image','role_ar','role_en'];
}
