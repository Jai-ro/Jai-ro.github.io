<?php include 'php/options.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Blog - Inicio</title>
  <?php include 'includes/head.php';?>
</head>

<body>
<?php include 'includes/header.php'; ?>
<!-- dentro de este div va el contenido de la pag -->
<div class="container content">
  <div class="jumbotron">
    <div class="container">
    	<h1>Bienvenido al blog!</h1>
    	<p>
    		</small>
    	</p>
    	<p>
    		<a class="btn btn-primary btn-lg" href="new-post.php" role="button"><i class="fa fa-edit"></i> Crear entrada</a>
    		<a class "btn btn-info btn-lg" href="multimedia.php" role="button"><i class="fa fa-file-image-o"></i> Biblioteca</a>
    		<a class="btn btn-warning btn-lg" href="about.php" role="button"><i class="fa fa-user"></i>usuario</a>
    	</p>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/foot.php'; ?>
</body>
</html>
