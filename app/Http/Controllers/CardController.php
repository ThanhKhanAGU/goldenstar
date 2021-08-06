<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CardController extends Controller
{
    public function createSchema(){
        Schema::create('card', function($table){
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('content');
            $table->string('img');
            $table->integer('id_tab');
            $table->timestamps();
        });
        echo 'Create Schema Card Successfully';
    }
}
