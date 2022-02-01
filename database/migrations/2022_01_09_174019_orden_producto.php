<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdenProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_orden');
            $table->unsignedBigInteger('id_producto');
            $table->timestamps();

            $table -> foreign('id_orden')->references('id')->on('orden') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table -> foreign('id_producto')->references('id')->on('producto') ->onUpdate('cascade')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
