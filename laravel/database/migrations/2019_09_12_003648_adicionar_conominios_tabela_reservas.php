<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarConominiosTabelaReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservas', function (Blueprint $table) {
            $table->integer('condominios_id')
                    ->unsigned()
                    ->nullable();
            $table->foreign('condominios_id')
                    ->references('id')
                    ->on('condominios');

            $table->integer('areas_id')
                ->unsigned()
                ->nullable();
            $table->foreign('areas_id')
                ->references('id')
                ->on('areas');

            $table->integer('unidades_id')
                ->unsigned()
                ->nullable();
            $table->foreign('unidades_id')
                ->references('id')
                ->on('unidades');
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
            $table->dropForeign('reservas_condominios_id_foreign');
            $table->dropColumn('condimonio_id');
        });
    }
}
