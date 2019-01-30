
<?php

include_once("seg.php");
include_once("cabecalho_int.php");

if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}


?>
<div class="col-sm-9">
      <div class="well">

	<form method="POST" action="proc_cad_post1.php" enctype="multipart/form-data">
		<div class="linha1"> 
			<label>Titulo:</label><br>
			<input type="text" name="titulo"><br><br>
		</div>

		<div class="imagem">
			<label>Imagem: </label>
			<input type="file" name="imagem"><br><br>
		</div>

		<div class="linha"> 
			<label>Resumo:</label>
				<input type="text" name="resumo"><br><br>

			 <label>Texto:</label> <br> 
			 	<textarea name="texto" cols="30" rows="4" id="texto"></textarea> 
		  
		 </div> 

		<!-- <input type="text" name="texto"><br> -->

		<input type="submit" value="Postar" name="postar">
		
	</form>
      </div>
  </div>

