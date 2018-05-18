<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'stories';

    public function commentaires(){
        return $this->hasMany(commentaire::class, 'stories_id', 'id')->get(); 
    }    
}
