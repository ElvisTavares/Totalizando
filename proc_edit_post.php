<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);

$result_post = "UPDATE postagem SET titulo='$titulo', texto='$texto', modified=NOW() WHERE id='$id'";
$resultado_post = mysqli_query($conn, $result_post);

if (mysqli_affected_rows($conn)) {
	# code...
	$_SESSION['msg'] = "Post editado com sucesso.";
	header("Location: lista_post.php");

}else{
	$_SESSION['msg'] = "Post não foi editado com sucesso.";
	header("Location: edit_post.php?id=$id");

}