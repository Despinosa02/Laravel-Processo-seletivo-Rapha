<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoEmbalagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProdutoEmbalagem', function (Blueprint $table) {
            $table->id();
            $table->string('idProduto');
            $table->string('tipoembalagem');
            $table->string('quantidade');
            $table->unsignedBigInteger('Produto_idProduto');
            $table->foreign('Produto_idProduto')->references('id')->on('produto');
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
        Schema::dropIfExists('ProdutoEmbalagem');
    }
}
