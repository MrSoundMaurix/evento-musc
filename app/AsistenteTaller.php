<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsistenteTaller extends Model
{
    protected $primaryKey="asi_id" ;
    protected $table="asistente_taller" ;
    public $timestamps=true;
    protected $dates = ['ut_created_at','ut_updated_at'];

    const CREATED_AT="ut_created_at";
    const UPDATED_AT="ut_updated_at";

    protected $fillable = ['asi_id','tal_id'];

    protected $hidden = ['asi_id'];


}
