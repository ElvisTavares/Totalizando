<?php
session_start();
  include_once("conexao.php");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['postar'])) {
  	// Get image name
  	$image = $_FILES['imagem']['name'];
  	// Get text
 

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
$resumo = filter_input(INPUT_POST, 'resumo', FILTER_SANITIZE_STRING);

  	// image file directory
  	$target = "foto/".basename($image);

  	$sql = "INSERT INTO postagem (titulo, resumo, texto, imagem, created) VALUES ('$titulo','$resumo','$texto','$image', NOW())";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['imagem']['tmp_name'], $target)) {
  		$_SESSION['msg'] = "Post envidado com sucesso...";
      header("Location: cad_post.php");
  	}else{
  		$_SESSION['msg'] = "Post não foi enviado...";
      header("Location: cad_post.php");
  	}
  }
  