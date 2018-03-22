<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_dias', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->double('presupuesto_gastado', 12,2);
            $table->double('total_ganado', 12,2);
            $table->integer('campana_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('detalle_dias', function($table) {
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
        Schema::dropIfExists('detalle_dias');
    }
}
