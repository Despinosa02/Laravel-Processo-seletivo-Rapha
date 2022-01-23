<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paginaProduto extends Controller
{
    /**
     *Verifica se há algum produto com exatamente a mesma descrição do já inserido, se sim, ele não cria um novo, e recupera o id do antigo.
     *
     * @author Daniel Espinosa.
     * 
     */
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

    /**
     *Envia um array de objetos para a view para serem desenhados na lista, faz um join para unir a descrição do produto ao produtoembalagem e mostrar na lista.
     *
     * @author Daniel Espinosa.
     * 
     */
    public function verProdutos(Request $request) {
        $produtosCadastrados = DB::table('produtoembalagem')
        ->join('produto', 'produtoembalagem.Produto_idProduto', '=', 'produto.id')->get();
        
    return view(('listaProduto'), (compact(
        'produtosCadastrados')));
    }
}
