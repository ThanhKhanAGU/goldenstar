<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            //posts
            $table->string('name')->nullable();
            $table->text('summary')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable(); 
            $table->boolean('show')->default(0); 
            $table->integer('view')->default(0);  
            
            //product
            $table->bigInteger('price')->nullable();
            $table->bigInteger('promotion_price')->nullable();
            $table->integer('id_trademark')->nullable();
            $table->integer('id_distributor')->nullable();
            
            //action
            $table->string('place')->nullable();
            $table->date('timetake')->nullable();
            
            //trademark
            $table->char('telephone',12)->nullable();
            $table->string('email')->nullable();

            $table->char('type',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
