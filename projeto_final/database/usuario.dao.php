<?php

function buscar_usuario($usuario, $senha)
{
    include_once 'conn.php';

    $conn = conectar();

    $sql = "SELECT * FROM usuarios_tb WHERE usuario = '$usuario' AND senha = '$senha' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}
	return false;
}



?>