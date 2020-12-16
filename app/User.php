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
    # One to one
    /**
     * only the relationship is added in the user 
     * since it is not necessary 
     * to access the users from the profiles
     *  */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    #One to many
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    #One to one  Polymorphic
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
