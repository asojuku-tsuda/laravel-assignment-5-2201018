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
        Schema::create('sports',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->integer('players_count');
            $table->boolean('is_olympic')->default(0);
            $table->string('origin_country')->nullable();
            $table->integer('established_year')->nullable();
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
        Schema::dropIfExists('sports');
    }
};
