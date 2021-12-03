<?php

include_once 'conn.php';

function salvar_veiculos($modelo, $ano, $quilometragem)
{
    $conn = conectar();

    $sql = "INSERT INTO veiculos_tb (modelo, ano, quilometragem)
    VALUES ('$modelo', '$ano', '$quilometragem')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    return false;
}
 function buscar_veiculos()
 {
     $conn = conectar();

     $sql = "SELECT * FROM veiculos_tb";

     $result = mysqli_query($conn, $sql);

     if (mysqli_affected_rows($conn) > 0)
     {
         return $result;
     }
     return null;
 }

 function exibir_veiculos()
 {
	$result = buscar_veiculos();

	if ($result == null)
	{
		$retorno = '<h3>Não há Veiculos no Sistema</h3>';
	}
	else
	{
		$retorno = '<div class="col-6">';
		$retorno .= '<table class="table table-hover">';
		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>'; 
		$retorno .= '<th>Modelo</th>';
		$retorno .= '<th>Ano</th>';
		$retorno .= '<th>Quilometragem</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';

		while ($veiculos = mysqli_fetch_assoc($result))
		{
		
			$retorno .= '<tr>';
			$retorno .= "<td>" . $veiculos['id_carro'] . "</td>";
			$retorno .= "<td>" . $veiculos['modelo']   . "</td>";
			$retorno .= "<td>" . $veiculos['ano']    . "</td>";
			$retorno .= "<td>" . $veiculos['quilometragem']  . "</td>";
			$retorno .= "<td>" . link_deletar($veiculos['id_carro']) . "</td>";
			$retorno .= "<td>" . link_editar($veiculos['id_carro'])  . "</td>";
			$retorno .= '</tr>'; 
		}

		$retorno .= '</table>';
		$retorno .= '</div>';
	}

	return $retorno;
}
function link_deletar($id_carro)
{
	$link = '<a href="deletar.php?id_carro='.$id_carro.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este Veículo?\')" class="btn btn-danger">Deletar</a>';

	return $link;
}
function link_editar($id_carro)
{
	$link = '<a href="editar.php?id_carro='.$id_carro.'" class="btn btn-warning">Editar</a>';
	return $link;
}
function deletar_carro($id_carro)
{
	$conn = conectar();

	$sql = "DELETE FROM veiculos_tb WHERE id_carro = $id_carro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}
function buscar_carro($id_carro)
{
	$conn = conectar();

	$sql = "SELECT * FROM veiculos_tb WHERE id_carro = $id_carro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}
function editar_carro($id_carro, $titulo, $autor, $editora)
{
	$conn = conectar();

	$sql = "UPDATE veiculos_tb SET titulo = '$titulo', autor = '$autor', editora = '$editora' 
	WHERE id_carro = $id_carro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}
	return false;
}
?>