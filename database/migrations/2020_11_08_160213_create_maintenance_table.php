<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance', function (Blueprint $table) {
            $table->string('type');
            $table->id('locataire_id')->unique();
            $table->string('appartement_id')->unique();
            $table->string('honoraire');
            $table->string('materiel');
            $table->timestamps();
        });
        Schema::table('maintenance', function ($table) {
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
        Schema::dropIfExists('maintenance');
    }
}
