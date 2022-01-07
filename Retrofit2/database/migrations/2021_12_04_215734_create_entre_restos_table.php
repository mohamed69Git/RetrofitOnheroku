<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreRestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entre_restos', function (Blueprint $table) {
            $table->id();
            $table->integer('compte_id');
            $table->integer('type_repa_id');
            $table->foreign('compte_id')->references('id')->on('comptes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_repa_id')->references('id')->on('type_repas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entre_restos');
    }
}
