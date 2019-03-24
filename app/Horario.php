<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $primaryKey="hor_id" ;
    protected $table="horarios" ;
    public $timestamps=false;


    protected $fillable = ['horainicio','horafin'];

    protected $hidden = ['hor_id'];

}
