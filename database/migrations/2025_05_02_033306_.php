<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ghibli_films',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('director');
            $table->integer('release_year');
            $table->integer('runtime');
            $table->bigInteger('box_office')->nullable();
            $table->boolean('is_classic')->default(0);
            $table->timestamps();
            // $table->timestamp('create_at')->nullable();
            // $table->timestamp('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('ghibli_films');
    }
};
