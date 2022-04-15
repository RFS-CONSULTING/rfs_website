<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableRealisationconference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('realisationconferences', function (Blueprint $table) {
            //
            $table->string('youtube_embed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('realisationconferences', function (Blueprint $table) {
            //
            $table->dropColumn('youtube_embed');
        });
    }
}
