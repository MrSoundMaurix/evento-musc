<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    protected $primaryKey="css_id" ;
    protected $table="concursos" ;
    public $timestamps=true;
    protected $dates = ['css_created_at','css_updated_at'];

    const CREATED_AT="css_created_at";
    const UPDATED_AT="css_updated_at";

    protected $fillable = ['css_nombre','css_reglamento'];

    protected $hidden = ['css_id'];


}
