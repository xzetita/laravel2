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
        Schema::create('images', function (Blueprint $table) {

            $table->id('id');
            $table->text('url');
            $table->string('nombre');
            $table->string('alt');
            $table->tinyInterger('estado',[1,2]);

            $table->timestamps();
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
        Schema::dropIfExists('images');
    }
};
