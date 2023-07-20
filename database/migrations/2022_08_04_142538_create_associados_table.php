<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('area_id')->unsigned();

            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('cpf')->unique();
            $table->string('birthday');
            $table->string('rg');
            $table->string('marital_status');
            $table->string('company');
            $table->string('cep');
            $table->string('road');
            $table->integer('number');
            $table->string('city');
            $table->string('state');
            $table->string('country');

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

            /* $table->unsignedBigInteger('area_id')->unsigned();
             $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade'); */

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
        Schema::dropIfExists('associados');
    }
}
