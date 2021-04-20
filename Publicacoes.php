<?php

require 'config.php';
require_once 'src/Publicacoes.php';
$o_publicacoes = new Publicacoes($mysql);
$publicacoes = $o_publicacoes->findById($_GET['id']);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicações</title>
</head>

<body>
    <h1><?= $publicacoes['titulo'] ?></h1>
    <p><?= $publicacoes['descricao'] ?></p>
    <a href="index.php">Voltar</a>
</body>

</html>