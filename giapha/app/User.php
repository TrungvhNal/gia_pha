<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'idwfie_husband',
            'idPerant',
            'name',
	        'short_name',
            'images',
            'birthday',
            'diedate_at',
            'phone',
            'email',
            'address',
            'password',
            'sexy',
	        'url_photo',
            'description',
            'idRoles'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
