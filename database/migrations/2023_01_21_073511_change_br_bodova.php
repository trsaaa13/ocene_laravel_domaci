<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBrBodova extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ocenes', function (Blueprint $table) {
            $table->renameColumn('br_bodova', 'broj_bodova');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ocenes', function (Blueprint $table) {
            $table->renameColumn('broj_bodova', 'br_bodova');
        });
    }
}
