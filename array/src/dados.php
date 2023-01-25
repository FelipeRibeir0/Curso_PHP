<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/php.ico" type="image/x-icon">
  <title>Document</title>
</head>

<body>
  <div class="topnav">
    <a href="index.php">Query</a>
    <a class="active">Datas</a>
  </div>
  <?php
  $id = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  $dados =
    [
      'nome' => [
        'Gustavo Guanabara',
        'Felipe C. Ribeiro',
        'Attekita',
        'Lucas Montano',
        'Filipe Deschamps',
        'Matheus Battisti',
        'Daniel Reis',
        'Rafaella Ballerini',
        'Nelio Alves',
        'João Paulo de Lira',
        'DevMedia'
      ],
      'email' => [
        'gafanhotos@gmail.com',
        'felipe@gmail.com',
        'Attekita@hotmail.com.br',
        'LucasMontano@yahoo.com',
        'Deschamps@outlook.com',
        'Battisti@yahoo.com',
        'DanielHe4art@hotmail.com.br',
        'RafaBallerini@outlook.com',
        'Nelio@hotmail.com.br',
        'Lira@yahoo.com',
        'Dev@gmail.com'

      ],
      'senha' => [
        '<a href="https://www.cursoemvideo.com/curso/curso-de-php-moderno-modulo-01/">CursoEmV1deo</a>',
        '<a href="https://www.linkedin.com/in/felipe-ribeiro-2003aswd/"> UmFuturoDesenvolvedor</a>',
        '<a href="https://www.instagram.com/attekitadev/"> AttekitaDev</a>',
        '<a href="https://www.youtube.com/watch?v=LB76xqh_4eI">LucasMontano</a>',
        '<a href="https://github.com/filipedeschamps">FilipeD3schamps</a>',
        '<a href="https://www.udemy.com/user/matheus-battisti/">B4ttisti</a>',
        '<a href="https://www.twitch.tv/danielhe4rt?lang=pt-br">He4rt</a>',
        '<a href="https://beacons.ai/rafaballerini">Baller1ni</a>',
        '<a href="https://www.udemy.com/user/nelio-alves/">NelioAlves293</a>',
        '<a href="https://www.hashtagtreinamentos.com/?origemurl=75502579145&gclid=Cj0KCQiAw8OeBhCeARIsAGxWtUy5_Gi2w0mLNQ82sS5LUkocoJtirUfvVfAWmWBM3Uf5qiyJKBwzu5QaAvMVEALw_wcB">Python3</a>',
        '<a href="https://www.devmedia.com.br/curso/curso-de-javascript-completo/388">DevM3diaJS'
      ]
    ];

  $select_id = $_POST['id'];
  if ($select_id >= min($id) && $select_id <= max($id)) {
    echo '<h1>Dados</h1>';
    print '<p>Nome: ' . $dados['nome'][$id[$select_id]] . '</p>';
    print '<p>Email: ' . $dados['email'][$id[$select_id]] . '</p>';
    print '<p>Senha: ' . $dados['senha'][$id[$select_id]] . '</p>';
  } else {
    print '<meta http-equiv="refresh" content="0;url=index.php">';
  }
  ?>
</body>

</html>