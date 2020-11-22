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
        Schema::create('factures', function (Blueprint $table) {
            // $table->id()->unique();
            $table->id();
            $table->string('type');
            $table->string('locataire_name');
            $table->string('appartement_id');
            $table->string('deb_mois');
            $table->string('fin_mois');
            $table->string('numb_jour')->nullable();
            $table->timestamps();
        });

        // Schema::table('factures', function ($table) {
        //     $table->foreign('locataire_id')->references('id')
        //     ->on('locataire')
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');

        // //     $table->foreign('appartement_id')->references('noma')
        // //     ->on('appartement')
        // //     ->onDelete('cascade')
        // //     ->onUpdate('cascade');
        // // });
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
        Schema::dropIfExists('factures');
    }
}
