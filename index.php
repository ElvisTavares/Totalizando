<?php
include("index/menu.php");
include("index/cabecalho.php");


include_once("conexao.php");
?>


<section class="main container">
		<div class="row">
			<section class="posts col-md-9">
				

				<article class="post clearfix">
					  <?php


		$result_post = "SELECT * FROM postagem";
		$resultado_post = mysqli_query($conn,$result_post);

		while ($row_post = mysqli_fetch_assoc($resultado_post)) {
			echo "<a href='#' class='thumb pull-left'>";
			echo "<img class='img-thumbnail' src='foto/". $row_post['imagem']."' ><br>";
			echo "</a>";

			echo "<a href='post.php?id=".$row_post['id']."'>";
			echo "<h2 class='post-title'>".$row_post['titulo']."</h2><br>";
			echo "</a>";
			// echo "<a href='post.php?id=".$row_post['id']. "'>Leia mais</a><br>";
			echo "<p> Postado em ". date('d/m/Y', strtotime($row_post['created']))." as ".date('H:i', strtotime($row_post['created'])) ;

			echo "<p>".$row_post['resumo']."<p><br>";

			echo "<br><br>";
			
			
		}

	?>
				
			</section>

			<aside class="col-md-3 hidden-xs hidden-sm">
				<h4>Categorias</h4>
				<div class="list-group">
					
				</div>

			
			</aside>
		</div>
	</section>



	<?php include("index/rodape.php"); ?>




