<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paginaProduto extends Controller
{
    public function cadastrarProduto(Request $request) {
        if (DB::table('produto')->where('descricao', $request['descricao'])->where('codigofabricante', $request['codigofabricante'])->latest()->value('id') !== null)
        {
            DB::table('ProdutoEmbalagem')->insert([
                'idProduto' => $request['nomeProduto'],
                'tipoembalagem' => $request['tipoEmbalagem'],
                'quantidade' => $request['quantidade'],
                'Produto_idProduto' => DB::table('produto')->where('descricao', $request['descricao'])->where('codigofabricante', $request['codigofabricante'])->latest()->value('id')
            ]);
            return;
        }
        else
        DB::table('produto')->insert([
            'descricao' => $request['descricao'],
            'codigofabricante' => $request['codigofabricante'],
        ]);
        DB::table('ProdutoEmbalagem')->insert([
            'idProduto' => $request['nomeProduto'],
            'tipoembalagem' => $request['tipoEmbalagem'],
            'quantidade' => $request['quantidade'],
            'Produto_idProduto' => DB::table('produto')->where('descricao', $request['descricao'])->where('codigofabricante', $request['codigofabricante'])->latest()->value('id')
        ]);
    }

    public function verProdutos(Request $request) {
        $produtosCadastrados = DB::table('produtoembalagem')->get();
    return view(('listaProduto'), (compact(
        'produtosCadastrados')));
    }
}
