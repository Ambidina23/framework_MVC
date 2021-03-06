<?php 
define('CSS_PATH', 'http://localhost/siteweb/framework_MVC/app/views/includes/'); 
define('PATH_PUBLIC', 'http://localhost/siteweb/framework_MVC/public/');
define('PATH_VIEWS', 'http://localhost/siteweb/framework_MVC/app/views/'); 


?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Association ARME</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>/source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>/source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style/mystyle.css">
	<?php //echo CSS_PATH . 'style/mystyle.css'; ?>
	<script src="<?php echo CSS_PATH; ?>/source/js/fusioncharts.js"></script>

</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="logreg">
				<li><a data-toggle="modal" data-target="#loginModal"> Se connecter </a> </li>
				<li><a data-toggle="modal" data-target="#Registration"> S'enregistrer </a></li>
			</ul>
	</div>

		<!--modal login -->
			<?php include("forms/login.php"); ?>
		<!-- mdp oublié -->
			<?php include("forms/mdp_oublie.php"); ?>
		<!-- modal register-->
			<?php include("forms/registration.php"); ?>

	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<a class="logo" href="#"><img src="<?php echo CSS_PATH; ?>image_association/logo/arme_logo_4.png" alt="logo"></a>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>


			</div>
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<!-- menu 1 -->
				<?php //echo PATH_VIEWS . 'home/' ; ?>
				<li class="active"><a href="<?php echo PATH_PUBLIC;?>">ACCEUIL</a> </li>

<?php //if($GLOBALS['conected'] == 1){?>
				<li class="dropdown">
				<!--a href="project.php" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROJET <span class="caret"></span></a-->
					<a href="<?php echo PATH_VIEWS; ?>project/" class="active" >PROJET </a>
					<!--ul class="dropdown-menu dropdowncostume">
						<li><a href="#">Sport</a></li>
						<li><a href="#">Old</a></li>
						<li><a href="#">New</a></li>
					</ul-->
				</li>
				<li class="dropdown">
					<!-- menu 2 -->
						<!--a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ARCHIVES <span class="caret"></span></a-->
						<a href="<?php echo PATH_VIEWS; ?>archives/" class="active" >ARCHIVES </a>
						<!--ul class="dropdown-menu dropdowncostume">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="3">3</a></li>
						</ul-->
				</li>
				<li>
					<a href="<?php echo PATH_VIEWS; ?>partenaires/">PARTENARIAT</a>
				</li>
				<li>
					<a href="<?php echo PATH_VIEWS; ?>membres/">MEMBRES</a>
				</li>
<?php //}?>

<?php
// test de variable globale
//$GLOBALS['conected'] = 1;
?>
			</ul>
		</div>
	</nav>
</div>
<!-- fin header -->
