<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableRealisationmasterclassUpdateColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('realisationmasterclass', function (Blueprint $table) {
            //
            $table->string('youtube_embed')->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('realisationmasterclass', function (Blueprint $table) {
            //
            $table->string('youtube_embed')->change();
        });
    }
}
