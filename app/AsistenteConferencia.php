<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsistenteConferencia extends Model
{
    protected $primaryKey="asc_id" ;
    protected $table="asistente-conferencias" ;
    public $timestamps=true; 
    protected $dates = ['asc_created_at','asc_updated_at'];

    const CREATED_AT="asc_created_at";
    const UPDATED_AT="asc_updated_at";

    protected $fillable = ['ins_id','con_tema','esp_id','con_fecha','con_horainicio','con_horafin'];

    protected $hidden = ['asc_id'];

    public function espacio()
    {
        return $this->belongsTo('App\Espacio','esp_id');
    }
}
