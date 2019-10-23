<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdicionaCondominioTabelaReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservas', function (Blueprint $table) {

            $table->bigInteger('condominio_id')->unsigned()->nullable();
            $table->foreign('condominio_id')->references('id')->on('condominios');


            $table->bigInteger('unidade_id')->unsigned()->nullable();
            $table->foreign('unidade_id')->references('id')->on('unidades');

            $table->bigInteger('area_id')->unsigned()->nullable();
            $table->foreign('area_id')->references('id')->on('areas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservas', function (Blueprint $table) {
            //$table->dropForeign('reservas_condominio_id_foreign');
            //$table->dropColumn('condominio_id');

            //$table->dropForeign('reservas_unidade_id_foreign');
            //$table->dropColumn('unidade_id');

            //$table->dropForeign('reservas_area_id_foreign');
            //$table->dropColumn('area_id');


        });
    }
}
