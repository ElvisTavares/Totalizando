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


//Verifica se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;



										$result_post = "SELECT * FROM postagem";
										$resultado_post = mysqli_query($conn,$result_post);

										//Conta o total de reg
$total_nome = mysqli_num_rows($resultado_post);

//Seta a quantidade de registros
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_nome/$quantidade_pg);

//Calcula o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os registros a serem apresentado na página
$result_post = "SELECT * FROM postagem limit $incio, $quantidade_pg";
$resultado_post = mysqli_query($conn, $result_post);
$total_post  = mysqli_num_rows($resultado_post);



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

			//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
                $pagina_posterior = $pagina + 1;
	?>

	 <nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="index.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="index.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>

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
	
