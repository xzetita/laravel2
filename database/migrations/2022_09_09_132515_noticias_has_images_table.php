<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('image_noticia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('noticia_id');  
        $table->foreign('noticia_id')->references('id')->on('noticias')->onDelete('cascade');
        $table->unsignedBigInteger('image_id')->nullable();  
        $table->foreign('image_id')->references('id')->on('images')->onDelete('set null');
    
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_noticia');
    }
};
