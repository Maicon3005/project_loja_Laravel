<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorJuridicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_juridicos', function (Blueprint $table) {
            $table->id();
            $table->String('cnpj',50);
            $table->String('razaosocial',255);
            $table->unsignedBigInteger('id_fornecedor');
            $table->timestamps();
        });

        Schema::table('fornecedor_juridicos', function (Blueprint $table) {
            $table->foreign('id_fornecedor')->references('id')->on('fornecedors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor_juridicos');
    }
}
