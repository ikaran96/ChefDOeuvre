<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormationsContinues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations_continues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('long_desc')->nullable();
            $table->string('logo');
            $table->string('duree')->nullable();
            $table->string('condition_admission')->nullable();
            $table->string('niveau_requis')->nullable();
            $table->string('niveau_sortie')->nullable();
            $table->string('historique')->nullable();
            $table->string('programme')->nullable();
            $table->string('frais')->nullable();
            $table->string('statut')->nullable();
            $table->string('inscription')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('ecole_id');
            $table->foreign('ecole_id')->references('id')->on('formations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations_continues');
    }
}
