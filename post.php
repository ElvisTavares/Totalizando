<?php
include_once("conexao.php");
include("index/menu.php");
include("index/cabecalho.php");


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_post = "SELECT * FROM postagem WHERE id='$id'";
$resultado_post = mysqli_query($conn, $result_post);
$row_post = mysqli_fetch_assoc($resultado_post);



?>
	<section class="main container">
		<div class="row">
			<section class="posts col-md-9">
				
				<article class="page">
					<?php
						echo "<a href='#' class='thumb pull-left'>";
						echo "<img class='img-thumbnail' src='foto/". $row_post['imagem']."' ><br>";
						echo "</a>";
						echo "<div class='page1'>";
						echo "<h2 class='post_title'>".$row_post['titulo']."</h2>";
						echo "<p class='data'> Postado em ". date('d/m/Y', strtotime($row_post['created']))." as ".date('H:i', strtotime($row_post['created'])) ;
						echo "<p>".$row_post['texto']."<p><br>";
						echo "</div>"
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