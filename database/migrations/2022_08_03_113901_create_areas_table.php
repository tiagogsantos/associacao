<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id');

          //  $table->unsignedBigInteger('associado_id')->unsigned();

            // Nome da area
            $table->string('name');

            // Municio
            $table->string('county');

            // Valor total da Aérea
            $table->decimal('earthlyvalue', 10, 2)->nullable();

            // Total de metragem da aérea
            $table->integer('totalarea');

            // Coordenador da Área
            $table->string('coordinator');

            // Abertura de Rua
            $table->boolean('streetopening')->default('0');

            // Esgoto
            $table->boolean('sewage')->default('0');

            // Luz / Energia
            $table->boolean('light')->default('0');

            //Agua
            $table->boolean('water')->default('0');

         //   $table->foreign('associado_id')->references('id')->on('associados')->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
