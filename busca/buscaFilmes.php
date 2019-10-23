<?php 
include_once '../util/conectarBD.php';
$titulo = $_POST['titulo'];
$coon = conectar();
$queryBusca = "SELECT `id`, `titulo`, `titulo_original`, `id_categoria`, `qualidade`, `formato`, `ano`, `resolucao`, `imdb`, `atores`, `tamanho`, `descricao`, `duracao` FROM `filme` WHERE titulo = '$titulo'";
$queryResposta = mysqli_query($coon, $queryBusca);
$queryRespostas = mysqli_fetch_assoc($queryResposta);
 ?>


<div style="text-align: center;">
<STRONG>Titulo:</STRONG> <?php echo $queryRespostas['titulo'] ; ?><br>
<STRONG>Titulo Original:</STRONG> <?php echo $queryRespostas['titulo_original'] ; ?><br>
<STRONG>Categoria:</STRONG> <?php echo $queryRespostas['id_categoria'] ; ?><br>
<STRONG>Qualidade:</STRONG> <?php echo $queryRespostas['qualidade'] ; ?><br>
<STRONG>Formato:</STRONG> <?php echo $queryRespostas['formato'] ; ?><br>
<STRONG>Ano:</STRONG> <?php echo $queryRespostas['ano'] ; ?><br>
<STRONG>Duração:</STRONG> <?php echo $queryRespostas['duracao'] ; ?><br>
<STRONG>Resolução:</STRONG> <?php echo $queryRespostas['resolucao'] ; ?><br>
<STRONG>IMDB:</STRONG> <?php echo $queryRespostas['imdb'] ; ?><br>
<STRONG>Atores:</STRONG> <?php echo $queryRespostas['atores'] ; ?><br>
<STRONG>Tamanho:</STRONG> <?php echo $queryRespostas['tamanho'] ; ?><br>

<STRONG>Sinopse</STRONG><br> <?php echo $queryRespostas['descricao'] ; ?><br>
</div>