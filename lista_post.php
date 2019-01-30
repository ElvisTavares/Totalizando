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
			echo "<img src='foto/". $row_post['imagem']."' ><br>";
			echo $row_post['titulo']."<br>";
			echo $row_post['resumo']."<br>";
			echo $row_post['texto']."<br>";

			echo "<a href='edit_post.php?id=".$row_post['id']. "'>Editar</a><br>";
			echo "<a href='proc_apag_post.php?id=".$row_post['id']."'>Apagar</a><br><br><br><hr>";
			
		}

	?>
      </div>