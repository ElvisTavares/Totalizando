<?php
include("index/menu.php");
include("index/cabecalho.php");


include_once("conexao.php");
?>
       
		<section>
			<div class="row">
				<div class="col-md-8">
					<article class="blog-post">
						
						<div class="blog-post-body">
							
							<div class="post-meta">
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
											echo "<p class='hora'> Postado em ". date('d/m/Y', strtotime($row_post['created']))." as ".date('H:i', strtotime($row_post['created'])) ;

											echo "<p>".$row_post['resumo']."<p>";
											echo "<div class='read-more'><a href='post.php?id=".$row_post['id']. "'>Leia mais</a></div><br>";
											echo "<br><br>";

			
			
		}

	?>

						</div>

					</article>
					<!-- article -->
					
				</div>
			<?php
				include("index/sidebar.php");
			?>

			</div>
		</section>
		</div><!-- /.container -->
<?php
				include("index/rodape.php");
			?>
	
