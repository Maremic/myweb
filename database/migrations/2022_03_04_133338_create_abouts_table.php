<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('sctitle');
            $table->text('section');
            $table->timestamps();
        });
    }

    // title like  "about me" hardcoded on site       +(add section button)

    //-----------------------------------------
    // /////////////section title /////////////
    //-----------------------------------------
    //section
    //section
    //section
    //-----------------------------------------
    // /////////////section title /////////////
    //-----------------------------------------
    //section
    //section
    //section

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
};
