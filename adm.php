
<?php
// session_start();

// if (!empty($_SESSION['id'])) {

// 	echo "Olá ".$_SESSION['nome']. "<br>";
// 	echo "<a href='sair.php'>Sair</a>";
// }else{
// 	$_SESSION['msg'] = "Área resrita";
// 	header("Location: login.php");
// }
session_cache_expire(15);
session_start();

if (empty($_SESSION['id'])) {
$_SESSION['msg'] = "Área resrita";
  header("Location: login.php");
  
}


include_once("cabecalho_int.php");

?>

    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        
  </div>
</div>

</body>
</html>

