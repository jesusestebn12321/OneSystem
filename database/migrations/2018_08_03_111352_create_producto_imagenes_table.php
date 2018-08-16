<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_imagenes', function (Blueprint $table) {
            $table->increments('id');

            
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')
                     ->on('productos')
                     ->onDelete('cascade');

            $table->integer('imagen_id')->unsigned();
            $table->foreign('imagen_id')->references('id')
                     ->on('imagenes')
                     ->onDelete('cascade');
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
        Schema::dropIfExists('producto_imagen_posts');
    }
}
