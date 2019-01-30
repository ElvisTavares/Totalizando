<?php
session_start();
include_once("conexao.php");


$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
$resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);
// $imagem = $_FILES['imagem']['name'];
// $diretorio = "foto/".basename($imagem);

// $result_post = "INSERT INTO postagem (titulo, imagem, resumo texto, created) VALUES ('$titulo','$imagem', $resumo, '$texto', NOW())";
$result_post = "INSERT INTO postagem (titulo, imagem, resumo, texto, created) VALUES ('$titulo', '$resumo','$resumo', '$texto', NOW())";

$resultado_post = mysqli_query($conn, $result_post);

// move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio);

if (mysqli_insert_id($conn)) {
	# code...
	$_SESSION['msg'] = "Post envidado com sucesso...";
	header("Location: cad_post.php");

}else{
	$_SESSION['msg'] = "Post não foi enviado...";
	header("Location: cad_post.php");
}



