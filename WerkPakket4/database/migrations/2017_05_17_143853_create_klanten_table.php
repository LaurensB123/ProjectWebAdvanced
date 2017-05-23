<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlantenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klanten', function (Blueprint $table) {
            $table->increments('klantid');
            $table->string('Naam');
            $table->string('Voornaam');
            $table->string('email')->unique();
            $table->string('gemeente');
            $table->string('postcode');
            $table->string('straat');
            $table->string('telefoon');
            $table->string('gsm');
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
        Schema::dropIfExists('klanten');
    }
}
