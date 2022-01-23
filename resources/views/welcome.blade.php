<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <form class="overflow-y-auto" method="post" action="{{ route('salvarProduto') }}">
        @csrf
        <div class="pt-2 table-cell"> Nome do Produto:</div>
        <div class=" pl-0  pr-4 pt-0  table-cell "><input style="border: 4px solid blue;" type="text" id="gidn"
                name="nomeProduto" value=""></div>
        </div>
        <div class="pt-2 table-cell"> Tipo de embalagem:</div>
        <div class=" pl-0  pr-4 pt-0  table-cell "><input style="border: 4px solid blue;" type="text" id="gidn"
                name="tipoEmbalagem" value=""></div>
        </div>
        <div class="pt-2 table-cell"> Quantidade:</div>
        <div class=" pl-0  pr-4 pt-0  table-cell "><input style="border: 4px solid blue;" type="text" id="gidn"
                name="quantidade" value=""></div>
        </div>
        <div class="pt-2 table-cell"> Descricao Produto:</div>
        <div class=" pl-0  pr-4 pt-0  table-cell "><input style="border: 4px solid blue;" type="text" id="gidn"
                name="descricao" value=""></div>
        </div>
        <div class="pt-2 table-cell"> Codigo Fabricante:</div>
        <div class=" pl-0  pr-4 pt-0  table-cell "><input style="border: 4px solid blue;" type="text" id="gidn"
                name="codigofabricante" value=""></div>
        </div>

        <div class="pt-2 table-cell">
    </form>
    <div>
        <button type="submit" name="submit" value="submit"> Cadastrar Produto</button>
    </div>

    <a href="/verProdutos" style="background-color:tomato">
        IR PARA A LISTA
    </a>
</body>

</html>