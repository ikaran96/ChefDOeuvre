<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SousFormations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous-formations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_desc');
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
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sous-formations');

    }
}
