<?php  
// função para validar uma mensagem e retornar um texto apropriado
function validar_msg($msg)
{

	switch ($msg) {
		case 'embranco':
			$retorno = '<h3 class="alert alert-warning">Informe todos os dados para efetuar o login</h3>';
			break;

		case 'invalido':
			$retorno = '<h3 class="alert alert-danger">Atenção: Usuário ou senha incorretos</h3>';
			break;

		case 'cadembranco':
			$retorno = '<h3 class="alert alert-warning">Preencha todos os dados do Veículo para cadastrar.</h3>';
			break;

		case 'edtembranco':
			$retorno = '<h3 class="alert alert-warning">Preencha todos os dados do Veículo para editar</h3>';
			break;

		case 'cadastrado':
			$retorno = '<h3 class="alert alert-success">Veículo cadastrado com sucesso</h3>';
			break;

		case 'errocadastro':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao efetuar o cadastro. Tente novamente</h3>';
			break;

		case 'idinvalido':
			$retorno = '<h3 class="alert alert-warning">Atenção: Veículo inválido. por favor, refaça a operação</h3>';
			break;

		case 'carrodeletado':
			$retorno = '<h3 class="alert alert-success">Veículo excluído com sucesso</h3>';
			break;

		case 'errodeletar':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao excluir Veículo. Tente novamente</h3>';
			break;

		case 'editado':
			$retorno = '<h3 class="alert alert-success">Dados do Veículo alterados com sucesso</h3>';
			break;

		case 'erroeditar':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao alterar dados do Veículo. Tente novamente</h3>';
			break;

		default:
			$retorno = '';
			break;
	}

	return $retorno;

}
?>