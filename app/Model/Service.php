<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['title_en','title_ar','description_en','description_ar','icon','image'];


    public function tags(){
        return $this->belongsToMany('App\Model\Tag' ,'service_tags');
    }


}
