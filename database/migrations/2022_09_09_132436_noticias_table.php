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
    {       Schema::create('noticias', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->text('copete');
        $table->text('descripcion');
        $table->dateTime('date');
        $table->tinyInteger('estado');

        $table->timestamps();

        $table->unsignedBigInteger('user_id');  
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        //
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
};
