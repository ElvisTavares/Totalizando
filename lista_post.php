<?php
session_start();
if (empty($_SESSION['id'])) {
$_SESSION['msg'] = "Área resrita";
  header("Location: login.php");
  
}
include_once("conexao.php");
include_once("cabecalho_int.php");




?>


   <div class="col-sm-9">
      <div class="well">

      	<h1>Posts</h1>

       <?php


		$result_post = "SELECT * FROM postagem";
		$resultado_post = mysqli_query($conn,$result_post);

		while ($row_post = mysqli_fetch_assoc($resultado_post)) {
			echo "<img class='img' src='foto/". $row_post['imagem']."' ><br>";
			echo "<h2>".$row_post['titulo']."</h2><br>";
			echo "<h4>". $row_post['resumo']."</h4><br>";
			echo "<p>".$row_post['texto']."<p>";

			echo "<a href='edit_post.php?id=".$row_post['id']. "'>Editar</a><br>";
			echo "<a href='proc_apag_post.php?id=".$row_post['id']."'>Apagar</a><br><br><br><hr>";
			
		}

	?>
      </div>