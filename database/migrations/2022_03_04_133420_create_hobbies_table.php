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
        Schema::create('hobbies', function (Blueprint $table) {
            $table->id();
            $table->string('sctitle');
            $table->string('image')->nullable();
            $table->text('section');
            $table->timestamps();
        });
    }
    // title like  "Hobbies" hardcoded on site       +(add section button)

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
        Schema::dropIfExists('hobbies');
    }
};
