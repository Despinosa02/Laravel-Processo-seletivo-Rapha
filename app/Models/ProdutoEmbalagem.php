<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoEmbalagem extends Model
{
    use HasFactory;
    protected $fillable = ['idProdutoEmbalagem','idProduto', 'tipoembalagem', 'quantidade', 'Produto_idProduto'];
    protected $table = 'ProdutoEmbalagem';
}
