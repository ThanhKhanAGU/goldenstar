<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'Posts';

    public function trademark(){
        return $this->hasMany('App\Posts', 'id_trademark', 'id');
    }

    public function distributor(){
        return $this->hasMany('App\Posts', 'id_distributor', 'id');
    }
    
    public function images(){
        return $this->hasMany("App\Images","id_post","id");
    }
}

/**
 * posts: ps
 * product: pr
 * action: ac
 * trademake: tr
 * distributor: ds
 */
