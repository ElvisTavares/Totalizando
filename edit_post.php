<?php

session_start();
include_once("seg.php");
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_post = "SELECT * FROM postagem WHERE id = '$id'";
$resultado_post = mysqli_query($conn, $result_post);
$row_post = mysqli_fetch_assoc($resultado_post);

?>

<h1>Editar Post</h1>

<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset ($_SESSION['msg']);
	}
?>
<form method="POST" action="proc_edit_post.php">
	<input type="hidden" name="id" value="<?php  echo $row_post['id']; ?>">

	<label>Titulo: </label>
	<input type="text" name="titulo" value="<?php echo $row_post['titulo']; ?>"><br><br>

	<label>Texto</label>
	<input type="text" name="texto" value="<?php echo $row_post['texto']; ?>">
	<input type="submit" value="Editar"><br><br>
</form>