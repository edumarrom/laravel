<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emple', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamp('fecha_alt');
            $table->decimal('salario', $precision = 6, $scale = 2);
            $table->unsignedBigInteger('depart_id');
            $table->string('denominacion');
            $table->timestamps();

            $table->foreign('depart_id')->references('id')->on('depart');
            $table->foreign('denominacion')->references('denominacion')->on('depart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emple');
    }
}
