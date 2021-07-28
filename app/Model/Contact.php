<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['phone','email','address_en','address_ar','time_hour_ar','time_hour_en'];



}
