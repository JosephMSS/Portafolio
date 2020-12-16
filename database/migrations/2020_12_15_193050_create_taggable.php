<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggable', function (Blueprint $table) {
            $table->id();
        
            $table->bigInteger('tag_id');
        
            $table->morphs('taggable');
        
            $table->timestamps();
            
            $table->foreign('tag_id')->references('id')->on('tags')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taggable');
    }
}