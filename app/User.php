<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function hasAnyRoles($roles) {
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }

        return false;
    }

    public function hasRole($role) {
        if($this->roles()->where('name', $role)->first()){
            return true;
        }

        return false;
    }


    /* Get highest role */

    public function highestRole($type)
    {
        if($type === 'short'){
            return $this->roles()->orderBy('role_id')->pluck('short')->first();
        }

        if($type === 'long'){
            return $this->roles()->orderBy('role_id')->pluck('long')->first();
        }

    }
}
