<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    public function trademark(){
        return $this->hasMany('App\posts', 'id_trademark', 'id');
    }

    public function distributor(){
        return $this->hasMany('App\posts', 'id_distributor', 'id');
    }
    
    public function images(){
        return $this->hasMany("App\images","id_post","id");
    }
}

/**
 * posts: ps
 * product: pr
 * action: ac
 * trademake: tr
 * distributor: ds
 */
