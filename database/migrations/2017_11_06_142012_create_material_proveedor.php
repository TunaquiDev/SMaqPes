<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_proveedor', function (Blueprint $table) {
            $table->increments('id_material_proveedor');
            $table->integer('id_material')->unsigned();
            $table->string('codigo', 20);
            $table->string('nombre', 50)->nullable();
            $table->string('descripcion', 250)->nullable();
            $table->decimal('precio', 10, 2);
            $table->timestamps();
            $table->foreign('id_material')->references('id_material')->on('material');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_proveedor');
    }
}
