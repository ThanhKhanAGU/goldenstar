<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    public function trademark(){
        return $this->belongsTo('App\Posts', 'id_trademark', 'id');
    }

    public function distributor(){
        return $this->belongsTo('App\Posts', 'id_distributor', 'id');
    }
    
    public function product(){
        if($table->type == 'tr'){
            return $this->hasMany('App\Posts', 'id_trademark', 'id');
        }
        if($table->type == 'ds'){
            return $this->hasMany('App\Posts', 'id_distributor', 'id');
        }
    }
}

/**
 * posts: ps
 * product: pr
 * action: ac
 * trademake: tr
 * distributor: ds
 */
