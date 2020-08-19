<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eleves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->date('dob');
            $table->string('address')->nullable();
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formations');
            $table->unsignedBigInteger('sousformation_id');
            $table->foreign('sousformation_id')->references('id')->on('sous-formations');
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
