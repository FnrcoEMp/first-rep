<?php
namespace App\Traits;

trait imageUploader
{

    public function uploadSingleImage($image,$path){
        $newname=$image->HashName();
        $image->storeAs('public/'.$path,$newname);
        return $path.'/'.$newname;
    }
}
