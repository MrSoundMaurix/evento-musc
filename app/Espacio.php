<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    protected $primaryKey="esp_id" ;
    protected $table="espacios" ;
    public $timestamps=true; 
    protected $dates = ['esp_created_at','esp_updated_at'];

    const CREATED_AT="esp_created_at";
    const UPDATED_AT="esp_updated_at";

    protected $fillable = ['esp_nombre','esp_capacidad'];

    protected $hidden = ['esp_id'];

    public function conferencias()
    {
        return $this->hasMany('App\Conferencia','esp_id');
    }
}
