<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../img/php.ico" type="image/x-icon">
  <title>Select by ID</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Query
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item active" href="id.php">ID</a></li>
              <li><a class="dropdown-item" href="name.php">Name</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h1>Selecione um ID</h1>
  <div class="box_forms">
    <form name="dados" method="post" action="query.php">
      <div class="input">
        <label>
          ID
        </label>
        <input required pattern="^[0-9]*$" placeholder="Selecione um ID" name="query" type="number">
      </div>
      <div class="button_wrapper">
        <button>
          Enviar
        </button>
      </div>
    </form>
  </div>

  <div class="float">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <img src="../img/code-icon.png" width="75" alt="Saiba mais sobre o código" title="Saiba mais sobre o código">
    </button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Informações</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Este é um site criado para simular um sistema de busca em Arrays, utilizando os IDs e os Nomes de quem está cadastrado.
          IDs disponíveis: 1 - 14<br>
          Nomes disponíveis:
          <ul>
            <li>Gustavo</li>
            <li>Felipe</li>
            <li>Attekita</li>
            <li>Lucas</li>
            <li>Filipe</li>
            <li>Matheus</li>
            <li>Daniel</li>
            <li>Rafaella</li>
            <li>Nelio</li>
            <li>Andre</li>
            <li>Lico</li>
            <li>Bruno</li>
            <li>Joao</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>