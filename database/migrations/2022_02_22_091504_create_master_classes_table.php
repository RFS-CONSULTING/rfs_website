<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_classes', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("secondname");
            $table->text("firstname");
            $table->text("statut");
            $table->text("autreStatut")->nullable();
            $table->text("domaine");
            $table->text("address");
            $table->text("city");
            $table->text("country");
            $table->text("code_postal")->nullable();
            $table->text("email");
            $table->text("suggestion")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_classes');
    }
}
