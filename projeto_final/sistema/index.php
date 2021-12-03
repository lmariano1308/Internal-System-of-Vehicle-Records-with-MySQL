<?php include_once 'lock.php';
include_once '../database/veiculos.dao.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Projeto Final - Sistema Interno</title>
    <meta charset="utf-8">
  </head>
  <body class="container-fluid">
    <h1>Veículos - Sistema Interno</h1>

    <p>
        <a href="logout.php" class="btn btn-dark btn-sm">Sair do Sistema</a>
    </p>

    <?php
    
    if(isset($_GET['msg']))
    {
      include_once '../util.php';
      echo validar_msg($_GET['msg']);
    }

    ?>

    <h3> Utilize o Formulário Abaixo para Cadastrar os Veículos:</h3>

    <div class="col-5">
    
      <form action="cadastrar.php" method="post">

      <p>
          <label class="form-label">Modelo</label><br>
          <input type="text" name="modelo" required class="form-control">
        </p>

        <p>
          <label class="form-label">Ano</label><br>
          <input type="text" name="ano" required class="form-control">
        </p>

        <p>
          <label class="form-label">Quilometragem</label><br>
          <input type="text" name="quilometragem" required class="form-control">
        </p>

        <p>
          <button type="submit" name="salvar" class="btn btn-dark">Salvar</button>
        </p>

      </form>
  </div>
    <h2>Veículos Cadastrados</h2>
    
    <?php

    echo exibir_veiculos();

    ?>










  </body>
</html>