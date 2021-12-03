<?php include_once 'lock.php';

if (!isset($_POST['salvar']) || empty($_POST['modelo']) || empty($_POST['ano']) || empty($_POST['quilometragem']))
{
	header('location:index.php?msg=edtembranco');
}
else
{
	$id_carro = $_POST['id_carro'];
	$modelo	  = $_POST['modelo'];
	$ano    = $_POST['ano'];
	$quilometragem  = $_POST['quilometragem'];

	include_once '../database/veiculos.dao.php';

	$result = editar_veiculos($id_carro, $modelo, $ano, $quilometragem);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}


?>