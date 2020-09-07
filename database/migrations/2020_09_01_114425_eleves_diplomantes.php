<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ElevesDiplomantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves_diplomantes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->date('dob');
            $table->string('address')->nullable();
            $table->unsignedBigInteger('ecole_id');
            $table->foreign('ecole_id')->references('id')->on('formations');
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formations_diplomantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves_diplomantes');
    }
}
