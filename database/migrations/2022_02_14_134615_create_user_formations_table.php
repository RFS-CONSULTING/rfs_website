<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_formations', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("secondname");
            $table->text("firstname");
            $table->text("statut");
            $table->text("autreStatut")->nullable();

            $table->text("compagnie");
            $table->text("domaine");
            $table->text("address");
            $table->text("address2")->nullable();
            $table->text("city");
            $table->text("country");
            $table->text("code_postal")->nullable();
            $table->text("email");
            
            $table->text("phone");
            $table->text("sig");
            $table->text("teledetection");
            $table->text("outils-collectes");
            $table->text("language");
            $table->text("paiement");
            $table->text("type_formation");
            $table->text("mode_formation");
            $table->text("available_for_update")->nullable();
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
        Schema::dropIfExists('user_formations');
    }
}
