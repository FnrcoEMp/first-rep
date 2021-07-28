<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CertificateRequest extends Model
{
    protected $fillable=['certificate_id','user_id','trainer_id','isCreated','status','title','date','start_date','end_date','serial','username_certificate','compnay_id'];


    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function certificate(){
        return $this->belongsTo('App\Model\Certification','certificate_id');
    }
}
