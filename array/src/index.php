<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/php.ico" type="image/x-icon">
  <title>Query</title>
</head>

<body>
  <div class="topnav">
    <a class="active" href="index.php">Query</a>
    <a>Datas</a>
  </div>
  <h1>Selecione um ID</h1>
  <div class="box_forms">
    <form name="dados" method="post" action="dados.php">
      <div class="input">
        <label>
          ID
        </label>
        <input class="name" required pattern="^([0-9])+$" name="id" placeholder="Escreva de 0 - 10" type="text">
      </div>
      <div class="button_wrapper">
        <button>
          Enviar
        </button>
      </div>
    </form>
  </div>
</body>

</html>