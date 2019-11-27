<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdicionaCondominioTabelaUnidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unidades', function (Blueprint $table) {
            $table->bigInteger('condominio_id')->unsigned()->nullable();
            $table->foreign('condominio_id')->references('id')->on('condominios')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidades', function (Blueprint $table) {

            $table->dropForeign('unidades_condominio_id_foreign');
            $table->dropColumn('condominio_id');
        });
    }
}
