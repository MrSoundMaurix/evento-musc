<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $primaryKey="tal_id";
    protected $table="talleres";
    public $timestamps=true;
    protected $dates = ['tal_created_at','tal_updated_at'];

    const CREATED_AT="tal_created_at";
    const UPDATED_AT="tal_updated_at";

    protected $fillable = ['tal_tema','tal_resumen','tal_estado','tal_fecha','hor_id','tal_materiales','tal_cprevios','cat_id','esp_id','ins_id'
                        ,'tal_foto','tal_fototype'];

    //protected $hidden = ['pivot'];

     protected $hidden = ['tal_id'];

    public function espacio()
    {
        return $this->belongsTo('App\Espacio','esp_id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','cat_id');
    }
    public function instructor()
    {
        return $this->belongsTo('App\Instructor','ins_id');
    }

    public function asistentes(){
        return $this->belongsToMany('App\User','asistente_taller','tal_id','asi_id');
    }
    public function horario()
    {
        return $this->belongsTo('App\Horario','hor_id');
    }
}
