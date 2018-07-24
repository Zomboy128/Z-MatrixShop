<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->stirng('image')->default('default.png');
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('modelo');
            $table->string('Fecha_fabricacion');
            $table->string('Num_serie');
            $table->text('caracteristicas');
            $table->double('Precio_venta');
            $table->integer('cantidad_ingresar');
            $table->integer('brand_id');
            $table->integer('category_id');
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
        Schema::dropIfExists('products');
    }
}
