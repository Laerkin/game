<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
	protected $table = 'commentaires';

    public function story(){
    	return $this->belongsTo(story::class);
    }
}
