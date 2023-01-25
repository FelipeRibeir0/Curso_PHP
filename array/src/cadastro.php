<?php
require 'Handler.php';

$dados = Handler::arrayHandler();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="consulta.php">Query</a>
  <a class ="active" href="cadastro.php">Sign in</a>
  <a href="#about">Sign up</a>
</div>
  <h1>Selecione um ID</h1>
  <form name="dados" method="post" action="dados.php">
    <input type="text" required pattern="^([0-9])+$" name="id">
    <input type="submit">
  </form>
</body>
</html>