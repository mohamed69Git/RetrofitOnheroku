<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achat_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->integer('compte_id');
            $table->foreign('compte_id')->references('id')->on('comptes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('type_repas_id');
            $table->foreign('type_repas_id')->references('id')->on('type_repas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('achat_tickets');
    }
}
