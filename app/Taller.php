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

    protected $fillable = ['tal_tema','tal_resumen','tal_estado','tal_fecha','tal_horainicio'
                        ,'tal_horafin','tal_materiales','tal_cprevios','cat_id','esp_id','ins_id'];

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
}
