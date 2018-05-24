<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Gstt\Achievements\achiever;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Achievements\UserCompletedStory;

class User extends Authenticatable
{
    use Achiever;

    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ip', 'role', 'localisation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
