<?php
include_once "conexao.php";
?>

<form method="POST" action="">
	<label>Pesquisa: </label>
	<input type="text" name="pesquisa" placeholder="Pesquisar"><br>

	<input type="submit" name="SendPesqPost" value="Pesquisar">

	<br>
</form>

<?php
$SendPesqPost = filter_input(INPUT_POST, 'SendPesqPost', FILTER_SANITIZE_STRING);

if ($SendPesqPost) {


	$pesquisa = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);

	$result_post = "SELECT* FROM postagem WHERE texto LIKE '%$pesquisa%'";
	
	$resultado_post = mysqli_query($conn, $result_post);

	while ($row_post = mysqli_fetch_assoc($resultado_post)) {
		echo $row_post['titulo']."<br>";
		echo $row_post['texto']."<br>";
		echo "<a href='edit_post.php?id=".$row_post['id']."'>Editar</a><br>";
		echo "<a href='proc_apag_post.php?id=".$row_post['id']."'>Editar</a><br>";
	}
}