<?php
include("index/menu.php");
include("index/cabecalho.php");


include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_post = "SELECT * FROM postagem WHERE id='$id'";
$resultado_post = mysqli_query($conn, $result_post);
$row_post = mysqli_fetch_assoc($resultado_post);

?>

<section>
			<div class="row">
				<div class="col-md-8">
					<article class="blog-post">
						
						<div class="blog-post-body">
							
							<div class="blog-post-text">
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
								
							</div>
						</div>
					</article>
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