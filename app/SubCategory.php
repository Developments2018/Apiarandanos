<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function articles(){
        
            return $this->hasMany(Article::class);
    
        }
}