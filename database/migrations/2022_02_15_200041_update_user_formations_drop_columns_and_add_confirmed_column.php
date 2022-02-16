<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserFormationsDropColumnsAndAddConfirmedColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_formations', function (Blueprint $table) {
            //
            $table->dropColumn('sig');
            $table->dropColumn('teledetection');
            $table->dropColumn('outils-collectes');
            $table->dropColumn('language');
            $table->boolean('confirmed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_formations', function (Blueprint $table) {
            //
            $table->text('sig');
            $table->text('teledetection');
            $table->text('outils-collecte');
            $table->text('langage');
            $table->dropColumn('confirmed');
        });
    }
}
