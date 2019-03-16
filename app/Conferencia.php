<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conferencia extends Model
{
    protected $primaryKey="con_id" ;
    protected $table="conferencias" ;
    public $timestamps=true; 
    protected $dates = ['con_created_at','con_updated_at'];

    const CREATED_AT="con_created_at";
    const UPDATED_AT="con_updated_at";

    protected $fillable = ['ins_id','con_tema','esp_id','con_fecha','con_horainicio','con_horafin'];

    protected $hidden = ['con_id'];

    public function espacio()
    {
        return $this->belongsTo('App\Espacio','esp_id');
    }
}
