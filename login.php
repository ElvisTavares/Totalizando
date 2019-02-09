<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Totalizando</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<style>
.container{
    margin-top:50px;
padding: 50px;
    width: 800px;
}

.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}

</style>
</head>
<body>

<?php 
	if (isset($_SESSION['msg'])) {
		# code...
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
 ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="valida_user.php">
                    <fieldset>
                        <legend class="text-center header">Área Restrita</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input  name="email" type="text" placeholder="Email/Usuario" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input type="password" name="senha" placeholder="Senha" class="form-control">
                            </div>
                        </div>

                    

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                               <!--  <button type="submit" class="btn btn-primary btn-lg" name="btLogin">Acessar</button> -->
                               <input type="submit" name="btLogin" value="Acessar">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
