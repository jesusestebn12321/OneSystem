<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('productos', function (Blueprint $table) {
        
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('stock');
            
            $table->integer('categorias_id')->unsigned();
            $table->foreign('categorias_id')->references('id')
                    ->on('categorias')
                    ->onDelete('cascade');           
            
            $table->double('precio');

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
        Schema::dropIfExists('productos');
    }
}
