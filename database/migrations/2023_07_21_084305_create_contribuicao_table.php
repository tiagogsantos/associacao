<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContribuicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuicao', function (Blueprint $table) {
            $table->id();
            $table->date('maturity');
            $table->boolean('payment_verification')->default('0');

            $table->unsignedBigInteger('area_id')->unsigned();
            $table->unsignedBigInteger('associado_id')->unsigned();

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('CASCADE');
            $table->foreign('associado_id')->references('id')->on('associados')->onDelete('CASCADE');

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
        Schema::dropIfExists('contribuicao');
    }
}
