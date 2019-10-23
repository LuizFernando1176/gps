<?php

include_once '../util/conectarBD.php';


$titulo = $_POST['titulo'];
$titulo_original = $_POST['titulo_original'];
$id_categoria = $_POST['id_categoria'];
$qualidade = $_POST['qualidade'];
$formato = $_POST['formato'];
$ano = $_POST['ano'];
$resolucao = $_POST['resolucao'];
$imdb = $_POST['imdb'];
$atores = $_POST['atores'];
$tamanho = $_POST['tamanho'];
$descricao = $_POST['descricao'];
$duracao = $_POST['duracao'];

$coon = conectar();

$queryAdicionaFilme = "INSERT INTO `filme`(`titulo`, `titulo_original`, `id_categoria`, `qualidade`, `formato`, `ano`, `resolucao`, `imdb`, `atores`, `tamanho`, `descricao` ,`duracao` ) VALUES ('$titulo', '$titulo_original', '$id_categoria', '$qualidade', '$formato', '$ano', '$resolucao', '$imdb', '$atores', '$tamanho', '$descricao' ,'$duracao')";
$respostaFilme = mysqli_query($coon, $queryAdicionaFilme);

echo $queryAdicionaFilme;

if ($respostaFilme) {

    echo 'Filme adcionado com sucesso';
} else {

    echo 'Deu ruim';
}