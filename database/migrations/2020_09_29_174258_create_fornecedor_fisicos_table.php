<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('fornecedor_fisicos', function (Blueprint $table) {
            $table->id();
            $table->String('cpf',50);
            $table->date('datanascimento');
            $table->unsignedBigInteger('id_fornecedor');
            $table->timestamps();
        });

        Schema::table('fornecedor_fisicos', function (Blueprint $table) {
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
        Schema::dropIfExists('fornecedor_fisicos');
    }
}
