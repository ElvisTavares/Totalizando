
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

		<div class="linha1"> 
			<label>Resumo:</label><br>
				<input type="text" name="resumo"><br><br>

			 <label>Texto:</label> <br> 
			 	<textarea name="texto" cols="30" rows="4" id="texto"></textarea> 
		  
		 </div> 

		<!-- <input type="text" name="texto"><br> -->
		<br><br>
		<input type="submit" value="Postar" name="postar">
		
	</form>
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
     
        <!-- Include Editor JS files. -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.2/js/froala_editor.pkgd.min.js"></script>
     
        <!-- Initialize the editor. -->
        <script> $(function() { $('textarea').froalaEditor() }); </script>
      </div>
  </div>

