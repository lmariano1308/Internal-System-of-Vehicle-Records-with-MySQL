<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Projeto Final - Home</title>
    <meta charset="utf-8">
  </head>
  <body class="container-fluid">
      <h1>Projeto Final - Veículos</h1>

      <?php
    
    if(isset($_GET['msg']))
    {
      include_once 'util.php';
      echo validar_msg($_GET['msg']);
    }

    ?>


   <h2>Utilize o Formulário abaixo para entrar no sistema</h2>

    <form action="validar.php" method="POST">
  <p>
      <label class="form-label">Usuário:</label><br>
      <input type="text" name="usuario" required>
  </p>
  <p>
      <label class="form-label">Senha:</label><br>
      <input type="password" name="senha" required>
  </p>
  <p>
      <button type="submit" name="entrar" class="btn btn-dark">Entrar</button>
  </p>

  </form>

  </body>
</html>