<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsistenteConferencia extends Model
{
    protected $primaryKey = "asc_id";
    protected $table = "asistente_conferencia";
    public $timestamps = true; 
    protected $dates = ['asc_created_at','asc_updated_at'];

    const CREATED_AT="asc_created_at";
    const UPDATED_AT="asc_updated_at";

    protected $fillable = ['usu_id','con_id','asc_nrodocumento','asc_foto','asc_fototype'];

    protected $hidden = ['asc_id'];

    // public function espacio()
    // {
    //     return $this->belongsTo('App\Espacio','esp_id');
    // }
}
