<!DOCTYPE html>
<html lang="en">
<head>
  <title>Totalizando</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   <!-- Include external CSS. -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
     
        <!-- Include Editor style. -->
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.2/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.2/css/froala_style.min.css" rel="stylesheet" type="text/css" />
        
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
     
      height: 100%;
    }

    .linha textarea { 
      width: 800px;
      height: 150px;
  
    } 

    .linha1 input { 
      width: 800px;
      
  
    } 
    .well img{
     width: 490px;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
  <script type="text/javascript">
      // Use it to attach the editor to all textareas with full featured setup
      //WYSIWYG.attach('all', full);
      
      // Use it to attach the editor directly to a defined textarea
      
      WYSIWYG.attach('texto', full); // full featured setup
      
      
      // Use it to display an iframes instead of a textareas
      //WYSIWYG.display('all', full);  
    </script>

</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2 >Dashboard</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="adm.php">Início</a></li>
        <li><a href="cad_post.php">Inserir Post</a></li>
        <li><a href="lista_post.php">Listar Post</a></li>
        <li><a href="pesquisar.php">Pesquisar</a></li>
      </ul><br>
    </div>
    <br>