<?php include_once 'lock.php';
include_once '../database/veiculos.dao.php';

if (!isset($_GET['id_carro']))
{
    header('location:index.php?msg=idinvalido');
}
else
{
    $result = buscar_veiculos($_GET['id_carro']);

    if($result == null)
    {
        header('location:index.php?msg=idinvalido');
    }
    else
    {
        $carro = mysqli_fetch_assoc($result);
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="pt-br"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title> Editar Veículo </title>
    </head>
    <body class="container-fluid">
    

    <h1>Veículos - Editar Veículo</h1>

    <p>
        <a href="index.php" class="btn btn-dark btn-sm">Cancelar Edição</a>
    </p>

    <h3> Editar Dados do Veículo:</h3>

    <div class="col-5">
        <form action="editado.php" method="post">

        <p>
                    <label class="form-label">Modelo</label><br>
                    <input type="text" name="modelo" required value="<?= $carro['modelo'] ?>" class="form-label">
                </p>

                <p>
                    <label class="form-label">Ano</label><br>
                    <input type="text" name="ano" required value="<?= $carro['ano'] ?>" class="form-label">
                </p>

                <p>
                    <label class="form-label">Quilometragem</label><br>
                    <input type="text" name="quilometragem" required value="<?= $carro['quilometragem'] ?>" class="form-label">
                </p>

                <p>
                    <button type="submit" name="salvar" class="btn btn-dark">Salvar Alterações</button>
                </p>

                <input type="hidden" name="id_livro" value="<?= $carro['id_carro'] ?>">

        </form>
</div>
    </body>
</html>