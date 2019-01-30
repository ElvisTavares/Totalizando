<?php

session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
	# code...
	$result_post = "DELETE FROM postagem WHERE id='$id'";
	$resultado_post = mysqli_query($conn, $result_post);

	if (mysqli_affected_rows($conn)) {
		# code...
		$_SESSION['msg'] = "Post apagado com sucesso";
		header("Location:adm.php");

	}else{
		$_SESSION['msg'] = "Erro, post não foi apagado";
		header("Location: adm.php");

	}
}else{		
	$_SESSION['msg'] = "Necessario selecionar um post";
	header("Location: adm.php");

}