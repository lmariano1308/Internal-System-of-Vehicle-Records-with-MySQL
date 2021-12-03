<?php include_once 'lock.php';

if(!isset($_GET['id_carro']))
{
    header('location:index.php?msg=idinvalido');
}
else
{
    $id_carro = $_GET['id_carro'];

    include_once '../database/veiculos.dao.php';

    $result = deletar_carro($id_carro);
    
    if ($result)
    {
        header('location:index.php?msg=carrodeletado');
    }
    else
    {
        header('location:index.php?msg=errodeletar');
    }
}
?>