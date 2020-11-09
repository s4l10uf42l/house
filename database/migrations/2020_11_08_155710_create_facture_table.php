<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('profession');
            $table->bigIncrements('locataire_id')->nullable()->index();
            $table->string('appartement_id')->nullable();
            $table->string('mois')->nullable();
            $table->string('numb_jour')->nullable();
            $table->timestamps();
        });

        Schema::table('facture', function ($table) {
            $table->foreign('locataire_id')->references('id')
            ->on('locataire')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        // Schema::dropForeign(['locataire_id']);
        // Schema::dropForeign(['appartement_id']);
        Schema::dropIfExists('facture');
    }
}
