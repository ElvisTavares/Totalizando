<?php


include_once("seg.php");
include_once("conexao.php");
include_once("seg.php");
include_once("cabecalho_int.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_post = "SELECT * FROM postagem WHERE id = '$id'";
$resultado_post = mysqli_query($conn, $result_post);
$row_post = mysqli_fetch_assoc($resultado_post);

?>

<h3>Editar Post</h3>

<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset ($_SESSION['msg']);
	}
?>

<div class="col-sm-9">
      <div class="well">

<form method="POST" action="proc_edit_post.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php  echo $row_post['id']; ?>">
<!-- 
	<label>Imagem</label>
	<input type="file" name="imagem" value="<?php echo $row_post['imagem']; ?>"> -->
<div class="linha"> 
	<label>Titulo: </label>
	<input type="text" name="titulo" value="<?php echo $row_post['titulo']; ?>"><br><br>
</div>

<div class="linha1"> 
	<label>Resumo</label>
	<input type="text" name="texto" value="<?php echo $row_post['resumo']; ?>">
	<br>
	<br>
	
</div>
<div  class="linha">
	<label>Texto</label><br>
	<textarea type="text" name="texto" value=""><?php echo $row_post['texto']; ?></textarea>
</div>
<br>
<input type="submit" value="Editar"><br><br>
</form>

</div>
</div>