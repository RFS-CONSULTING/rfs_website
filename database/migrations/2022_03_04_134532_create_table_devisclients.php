<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDevisclients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devisclients', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("secondname");
            $table->string("firstname");
            $table->string("compagnie")->nullable();
            $table->string("address");
            $table->string("country");
            $table->string("email");
            $table->string("phone");
            $table->string('description');
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
        Schema::dropIfExists('devisclients');
    }
}
