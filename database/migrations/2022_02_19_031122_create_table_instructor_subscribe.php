<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInstructorSubscribe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructorSubscribe', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('postnom');
            $table->string('etat_civile');
            $table->string('nationalite');
            $table->string('mail');
            $table->string('telephone');
            $table->string('adress');
            $table->string('cv_path');
            $table->string('identite_path');
            $table->string('programme_path');
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
        Schema::dropIfExists('instructorSubscribe');
    }
}
