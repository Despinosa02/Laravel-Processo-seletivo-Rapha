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
        <input type="text" style="border: 4px solid blue;" id="myInput" onkeyup="pesquisa()"
        placeholder="Faça sua busca aqui.">
        <table id="tabelaVisivel">
            <tr>
                <th>Nome</th>
                <th>Tipo Embalagem</th>
                <th>Quantidade</th>
                <th>Descrição</th>
            </tr>
        @foreach ($produtosCadastrados as $item)
        <tr>
            <td>{{ $item->idProduto }}</td>
            <td>{{ $item->tipoembalagem }}</td>
            <td>{{ $item->quantidade }}</td>

            <td name="desc"> <desc> {{ $item->descricao }} </desc> </td>
          </tr>
        @endforeach
        </table>
    </body>
    <a href="/produto" style="background-color:tomato">
        IR PARA A ADIÇÂO DE PRODUTO
    </a>
</html>

<script>
    function pesquisa() {
    var input = document.getElementById("myInput");
    var filter = input.value.toUpperCase();
    var table = document.getElementById("tabelaVisivel");
    var rows = table.getElementsByTagName("tr");
    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("desc");
        var rowContainsFilter = false;
        for (var j = 0; j < cells.length; j++)
            if (cells[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                rowContainsFilter = true;
                continue;
            }

        if (!rowContainsFilter) {
            rows[i].style.display = "none";
            rows[0].style.display = "";
        }
        else {
            { }
            rows[i].style.display = "";
            rows[0].style.display = "";
        }
    }
}
    </script>
