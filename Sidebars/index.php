<?php 
$int = 1;
if ($int == 0) {
	$flow = "./";
}elseif ($int == 1) {
	$flow = "../";
}elseif ($int == 2) {
	$flow = "../../";
}elseif ($int == 3) {
	$flow = "../../../";
}elseif ($int == 4) {
	$flow = "../../../../";
}elseif ($int == 5) {
	$flow = "../../../../../";
}elseif ($int == 6) {
	$flow = "../../../../../../";
}
?>

<!DOCTYPE html>
<html>

<!--HEAD COMPLETO-->
<head>
	<title>SideBar</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="">
	
	<meta name="robots" content="all">
	<meta name="author" content="Vortex Agency">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body>

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php #include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->
<div class="sidebar d-flex flex-column flex-shrink-0 p-3 position-fixed" style="width: 250px;">
	<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
	  <img src="<?php echo $flow ?>assents/img/logo/LogoTextoSemFundo.png" width="100%" class="logo-sidebar">
	</a>
	<hr>
	<ul class="nav nav-pills flex-column mb-auto">
	  <li class="nav-item sidebar-hover">
	    <a href="#" class="nav-link sidebar-item" aria-current="page">
	      <i class="fi fi-rr-home"></i>
	      Pagina Inicial
	    </a>
	  </li>
	</ul>
	<hr>
	<a href="#" class="d-flex align-items-center link-dark text-decoration-none sidebar-item" aria-expanded="false">
	    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
	    Cauã Dias
	</a>
</div>

<div class="cold">
	<div class="container">
		<br>
		<br>
		<h4>Sidebar Completa</h4>
		<div class="code-view">
			<h6>HTML</h6>
			<div class="card card-consoleHTML">
				<div class="card-body">
					<pre><?php echo input('<div class="sidebar d-flex flex-column flex-shrink-0 p-3 position-fixed" style="width: 250px;">
	<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
	  <img src="<?php echo $flow ?>assents/img/logo/LogoTextoSemFundo.png" width="100%" class="logo-sidebar">
	</a>
	<hr>
	<ul class="nav nav-pills flex-column mb-auto">
	  <li class="nav-item sidebar-hover">
	    <a href="#" class="nav-link sidebar-item" aria-current="page">
	      <i class="fi fi-rr-home"></i>
	      Pagina Inicial
	    </a>
	  </li>
	</ul>
	<hr>
	<a href="#" class="d-flex align-items-center link-dark text-decoration-none sidebar-item" aria-expanded="false">
	    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
	    Cauã Dias
	</a>
</div>'); ?></pre>
				</div>
			</div>
		</div>
		<hr>
		<div class="code-view">
			<h6>CSS</h6>
			<div class="card card-consoleCSS">
				<div class="card-body">
					<pre><?php echo input('.sidebar{
	height: 100vh;
	background: black;
	color: #fff;
}
.sidebar-item{
	font-size: 12.9px;
	color: #fff;
	text-decoration: none;
	margin-top: 5px;
}
.sidebar-item:hover{
	text-decoration: none;
	color: #fff;
}
.sidebar-hover{
	transition: 150ms;
}
.sidebar-hover:hover{
	transition: 150ms;
	border-radius: 5px;
	background-color: #ff8c00;
}') ?></pre>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>