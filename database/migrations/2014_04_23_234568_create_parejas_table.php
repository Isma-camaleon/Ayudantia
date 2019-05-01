<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parejas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('notaAlumno', 1, 1);
            $table->float('notaAyudante', 1, 1);
            $table->integer('alumno_id')->unsigned()->index();
            $table->foreign('alumno_id')->references('id')->on('users');
            $table->integer('ayudante_id')->unsigned()->index();
            $table->foreign('ayudante_id')->references('id')->on('users');
            $table->integer('estado_id')->unsigned()->index();
            $table->foreign('estado_id')->references('id')->on('estado_parejas');
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('parejas');
    }
}
