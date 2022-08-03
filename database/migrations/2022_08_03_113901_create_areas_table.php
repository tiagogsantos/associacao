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
            $table->id();
            $table->string('name');

            // Municio
            $table->string('county');

            // Valor total da Aérea
            $table->decimal('earthlyvalue', 10, 2)->nullable();

            // Total de metragem da aérea
            $table->integer('totalarea')->default('0');

            // Coordenador da Área
            $table->string('coordinator');

            // Abertura de Rua
            $table->boolean('streetopening')->nullable();

            // Esgoto
            $table->boolean('sewage')->nullable();

            // Luz / Energia
            $table->boolean('light')->nullable();

            //Agua
            $table->boolean('water')->nullable();

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
