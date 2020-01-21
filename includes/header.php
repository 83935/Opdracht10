<!doctype html>
<?php 
include 'session.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ekko-lightbox.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<script src="../js/jquery-3.3.1.slim.min.js"></script> 
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/popper.min.js"></script> 
	<script src="../js/bootstrap.min.js"></script> 
	<script src="../js/ekko-lightbox.js"></script> 
	<script src="../js/script.js" type="text/javascript"></script>
    <title>GLR Jobs</title>
</head>
<body>
<div class="con">
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-12 d-block d-lg-none"> 
					<div class="row">
						<div class="col-6 mx-auto">
							<a class="navbar-brand" href="index.php">
								<img src="../images/glr-jobs-logo.png" class="img-fluid" alt="GLR Jobs logo">
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5 my-auto">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
							<li class="nav-item"> <a class="nav-link" href="login.php">Overzicht</a> </li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Sectoren
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Mediavormgeven</a>
									<a class="dropdown-item" href="#">Audiovisuele media</a>
									<a class="dropdown-item" href="#">Mediamanagement</a>
									<a class="dropdown-item" href="#">Redactiemedewerker</a>
									<a class="dropdown-item" href="#">Creatieve productie</a>
									<a class="dropdown-item" href="#">Mediatechnologie</a>
									<a class="dropdown-item" href="#">Podium techniek</a>
								</div>
							 </li>
							<li class="nav-item d-block d-lg-none">
								<div class="dropdown-divider d-block d-lg-none"></div>
								<a href="login.php" class="nav-link d-block d-lg-none">Login</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-6 col-lg-2 d-none d-lg-block"> 
					<a class="navbar-brand" href="index.php">
						<img src="../images/glr-jobs-logo.png" class="img-fluid" alt="GLR Jobs logo">
					</a>
				</div>
				<div class="col-lg-5 d-none d-lg-block my-auto">
				<?php
session_start();
if(!isset($_SESSION["login_user"]) || $_SESSION["login_user"] !== true){
    echo '<a href="login.php" class="btn btn-jobs flr">Login</a>';
}else{
	echo '<a href="loguit.php" class="btn btn-jobs flr">Loguit</a>';
}
	?>
				</div>
			</div>
		</div>
	</nav>