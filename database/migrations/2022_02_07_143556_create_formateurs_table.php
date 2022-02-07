<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("secondname");
            $table->text("firstname");
            $table->text("statut");
            $table->text("profession");
            $table->text("compagnie");
            $table->text("etudes");
            $table->text("domaine");
            $table->text("address");
            $table->text("nationalite");
            $table->text("country");
            $table->text("email");
            $table->text("image");
            $table->text("phone");
            $table->text("plan");
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
        Schema::dropIfExists('formateurs');
    }
}
