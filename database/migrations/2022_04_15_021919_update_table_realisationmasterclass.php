<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableRealisationmasterclass extends Migration
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
            $table->string('youtube_embeded');
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
            $table->dropColumn('youtube_embeded');
        });
    }
}
