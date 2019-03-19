<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $primaryKey="ins_id" ;
    protected $table="instructores" ;
    public $timestamps=true;
    protected $dates = ['ins_created_at','ins_updated_at'];

    const CREATED_AT="ins_created_at";
    const UPDATED_AT="ins_updated_at";

    protected $fillable = ['ins_cedula','ins_nombres','ins_apellidos','ins_email','ins_pais'
                    ,'ins_cv','ins_cvtype','ins_foto','ins_fototype'];

    protected $hidden = ['ins_id'];
}
