<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocataireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locataires', function (Blueprint $table) {
            
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('NIN');
            $table->string('sexe');
            $table->string('lieudelivre');
            $table->string('datedelivre');
            $table->string('date_naissance');
            $table->string('lieu_naissance');
            $table->string('appartement_id')->nullable();
            $table->string('profession');
            $table->string('contact');
            $table->string('deb_mois');
            $table->string('deb_ans');
            $table->string('fin_mois');
            $table->string('fin_ans');
            $table->timestamps();
        });


    // Schema::table('locataires', function ($table) {
    //     $table->foreign('appartement_id')->references('noma')
    //     ->on('appartement')
    //     ->onDelete('cascade')
    //     ->onUpdate('cascade');
    // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {       
        // Schema::dropForeign(['appartement_id']);
        Schema::dropIfExists('locataires');
    }
}
