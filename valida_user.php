<?php
session_start();
include_once("conexao.php");

$btLogin = filter_input(INPUT_POST, 'btLogin', FILTER_SANITIZE_STRING);

if ($btLogin) {
	# code...

	$usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

	if ( (!empty($usuario)) && (!empty($senha)) ) {
		# code...

		$result_user = "SELECT id, nome, email, senha FROM usuarios WHERE email='$usuario' LIMIT 1";

		$resultado_user = mysqli_query($conn, $result_user);

		
		
	if($resultado_user){
			$row_usuario = mysqli_fetch_assoc($resultado_user);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: adm.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e/ou senha incorretos!";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: login.php");
}