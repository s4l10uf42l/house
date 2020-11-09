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
        Schema::create('locataire', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('date-naissance');
            $table->string('lieu-naissance');
            $table->string('appartement_id')->nullable();
            $table->string('profession');
            $table->string('contact');
            $table->timestamps();
        });


    Schema::table('locataire', function ($table) {
        $table->foreign('appartement_id')->references('noma')
        ->on('appartement')
        ->onDelete('cascade')
        ->onUpdate('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {       
        // Schema::dropForeign(['appartement_id']);
        Schema::dropIfExists('locataire');
    }
}
