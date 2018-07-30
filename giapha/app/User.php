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
            'gender',
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

    /**
     * get ông tổ của cả họ.
     */
    public function getMembersIndex()
    {
        return User::where('status',2)->first();
    }

    /**
     * Lấy con cua bố mẹ
     *
     * @param $id
     * @return mixed
     */
    public function getChildMemeber($id)
    {
        return User::where('idPerant', $id)->orderBy('sort', 'DESC')->get();
    }

    /**
     * Lấy vợ hoặc chông
     *
     * @param $id
     * @return mixed
     */
    public function getHusbandWife($idParent)
    {
        return User::Where('idwfie_husband', $idParent)->orderBy('sort', 'DESC')->get();
    }

    /**
     * count all members
     *
     * @return int
     */
    public function countAllMembers()
    {
        return User::all()->count();
    }

    /**
     * count all members
     *
     * @return int
     */
    public function getAllMembers()
    {
        return User::whereNull('deleted_at')->orderBy('status', 'DESC')->get();
    }
}
