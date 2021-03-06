<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','dob','address','phone'
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


	public function posts(){
        return $this->hasMany('App\Post');
    }
    public function comment(){
	    return $this->hasMany('App\Comment');
    }
    public function reply(){
	    return $this->hasMany('App\Reply');
    }

	public function getJWTIdentifier()
	{
		return $this->getKey();
	}
    public function album(){
        return $this->hasMany('App\Album');
    }

	/**
	 * Return a key value array, containing any custom claims to be added to the JWT.
	 *
	 * @return array
	 */
	public function getJWTCustomClaims()
	{
		return [];
	}

	public function setPasswordAttribute($value)
	{
		return $this->attributes['password'] = bcrypt($value);
	}

}
