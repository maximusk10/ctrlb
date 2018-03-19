<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->string('nombre', 100);
            $table->string('target', 100);
            $table->date('fecha_inicio');
            $table->string('comentarios', 200);
            $table->string('moneda', 100);
            $table->double('presupuesto_inicial', 8, 2);
            $table->timestamps();
        });

        Schema::table('campanas', function($table) {
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanas');
    }
}
