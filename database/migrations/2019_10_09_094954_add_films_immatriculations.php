<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFilmsImmatriculations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immatriculations', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('films_id')->nullable();
            $table->foreign('films_id')->references('id')->on('films');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('immatriculations', function (Blueprint $table) {
            //
            $table->dropForeign('films_id');
            $table->dropColumn('films_id');
        });
    }
}
