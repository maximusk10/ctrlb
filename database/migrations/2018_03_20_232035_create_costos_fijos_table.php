<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostosFijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costos_fijos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descripcion', 100);
            $table->double('costo', 12,2);
            $table->integer('periodo');
            $table->integer('campana_id')->unsigned();
            $table->integer('team_id')->unsigned();

        });

        Schema::table('costos_fijos', function($table) {
            $table->foreign('campana_id')->references('id')->on('campanas');
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
        Schema::dropIfExists('costos_fijos');
    }
}
