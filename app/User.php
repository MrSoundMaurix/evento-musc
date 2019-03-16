<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MailResetPasswordNotification;

use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Authenticatable
{
    use Notifiable,EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'pais', 'cedula','name', 'apellido','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function sendPasswordResetNotification($token)
    {
    $this->notify(new MailResetPasswordNotification($token));
    }   

    public function roles()
    {
        return $this
            ->belongsToMany('App\Role');
    }
       

}
