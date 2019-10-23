<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="inserts/inserirFilmes.php">

            Titulo:<input name="titulo" id="titulo"><br>
            Titulo Original:<input name="titulo_original" id="titulo_original"><br>
            Categoria:<select name="id_categoria"><option value="1">1</option></select><br>
            Qualidade:<input name="qualidade" id="qualidade"><br>
            Formato:<input name="formato" id="formato"><br>
            Ano:<input name="ano" id="ano"><br>
            Duração:<input name="duracao" id="duracao"><br>
            Resolução:<input name="resolucao" id="resolucao"><br>
            IMDB:<input name="imdb" id="imdb"><br>
            Atores:<input name="atores" id="atores"><br>
            Tamanho:<input name="tamanho" id="tamanho"><br>
            Descrição:<textarea name="descricao" id="descricao"  cols="25"></textarea><br><br>
            <button type="submit">Enviar</button>
            <button type="reset">Apagar</button>

        </form>
    </body>
</html>
