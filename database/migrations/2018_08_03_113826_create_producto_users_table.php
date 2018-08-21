<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_users', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                     ->on('users')
                     ->onDelete('cascade');

            $table->integer('producto_imagen_id')->unsigned();
            $table->foreign('producto_imagen_id')->references('id')
                     ->on('producto_imagenes')
                     ->onDelete('cascade');

            $table->integer('act');
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
        Schema::dropIfExists('producto_users');
    }
}
