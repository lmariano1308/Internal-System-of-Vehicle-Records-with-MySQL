<?php  include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['modelo']) || empty($_POST['ano']) || empty($_POST['quilometragem']))
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$modelo	 = $_POST['modelo'];
	$ano  = $_POST['ano'];
	$quilometragem = $_POST['quilometragem'];

	include_once '../database/veiculos.dao.php';

	$result = salvar_veiculos($modelo, $ano, $quilometragem);

	if ($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}
}

?>