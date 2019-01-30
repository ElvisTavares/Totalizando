<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Totalizando</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<h2>Area restrita</h2>
<?php 
	if (isset($_SESSION['msg'])) {
		# code...
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
 ?>



<form method="POST" action="valida_user.php" >
	<label>Usuário</label>
	<input type="text" name="email" placeholder="Digite o seu usuário">

	<label>Senha</label>
	<input type="password" name="senha" placeholder="Digite sua senha">

	<input type="submit" name="btLogin" value="Acessar">
</form>

</body>