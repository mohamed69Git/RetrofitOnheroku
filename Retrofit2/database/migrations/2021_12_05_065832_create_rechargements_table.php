<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechargementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rechargements', function (Blueprint $table) {
            $table->id();
            $table->integer('compte_id');
            $table->foreign('compte_id')->references('id')->on('comptes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('somme');
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
        Schema::dropIfExists('rechargements');
    }
}
