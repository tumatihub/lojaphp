<?php
require_once("banco-usuario.php");
require_once("logica-usuario.php");
?>

<?php 
$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);
if ($usuario == null) {
	$_SESSION['danger'] = 'Usuário ou senha inválidos.';
	header('Location: index.php');
} else {
	logaUsuario($usuario['email']);
	$_SESSION['success'] = 'Logado com sucesso!';
	header('Location: index.php');
}
die();