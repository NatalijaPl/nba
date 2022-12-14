<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *id, name, email, address, city

     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('adress');
            $table->string('city');
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
        Schema::dropIfExists('teams');
    }
};
