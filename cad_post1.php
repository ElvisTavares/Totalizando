
<?php

include_once("seg.php");
// include_once("cabecalho_int.php");

if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}


?>
<div class="col-sm-9">
      <div class="well">

	<form method="POST" action="proc_cad_post1.php" enctype="multipart/form-data">

			 <label>Texto:</label> <br> 
			 <div>
			 	<textarea name="texto" cols="30" rows="4" id="example" style="height:300px;width:600px;"></textarea> 
		  
				</div>

			<div>
				<label for="theme">Theme:</label>
				<select id="theme">
					<option value="default">Default</option>
					<option value="defaultdark">Default dark</option>
					<option value="modern">Modern</option>
					<option value="office-toolbar">Office Toolbar</option>
					<option value="office">Office</option>
					<option value="square">Square</option>
				</select>
			</div>
		</form>


		<script>
			var textarea = document.getElementById('example');
			sceditor.create(textarea, {
				format: 'bbcode',
				icons: 'monocons',
				style: '../minified/themes/content/default.min.css'
			});


			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = '../minified/themes/' + themeInput.value + '.min.css';

				document.getElementById('theme-style').href = theme;
			};
		</script>

		<input type="submit" value="Postar" name="postar">
		
	</form>
      </div>
  </div>

