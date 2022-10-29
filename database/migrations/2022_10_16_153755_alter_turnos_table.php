<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('turnos', function(Blueprint $table){
            $table->integer('usuario')->unsigned()->nullable()
                ->default(null)
                ->after('propietario')
                ->change();
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
        Schema::table('tiendas', function(Blueprint $table){
            $table->dropColumn('propietario');
        });
    }
};
