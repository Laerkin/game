<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Commentaire extends Model
{
	protected $table = 'commentaires';

    public function story(){
    	return $this->belongsTo(story::class);
    }

    public function user()
    {
    	return $this->belongsTo(user::class, 'users_id' , 'id')->first();
    }
}
