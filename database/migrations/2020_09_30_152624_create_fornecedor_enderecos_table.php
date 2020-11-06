<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_enderecos', function (Blueprint $table) {
            $table->id();
            $table->String('cep',9);
            $table->char('estado',2);
            $table->String('cidade',255);
            $table->String('bairro',255);
            $table->String('logradouro',255);
            $table->integer('numero');
            $table->String('complemento',255);
            $table->unsignedBigInteger('id_fornecedor');
            $table->timestamps();
        });

        Schema::table('fornecedor_enderecos', function(Blueprint $table){
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
        Schema::dropIfExists('fornecedor_enderecos');
    }
}
