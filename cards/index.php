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
	<title>Cards</title>
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
<div class="cards-template">
	<div class="container">
		<br><br>
		<div class="cards-exemple">
			<div class="row">
				<div class="col-md-3">
					<div class="card card-shop">
						<div class="card-body">
							<center>
								<i class="fa-solid fa-fire rounded-circle icon-card"></i>
								<div class="shop-title">Plano Base</div>
								<h3 class="shop-price">R$ 31.00</h3>
								<br>
								<ul class="package_list">
					                <li>Unlimited Website</li>
					                <li>Unlimited Storage</li>
					                <li>Free SSL Certificate</li>
					                <li>24/7 Support</li>
					            </ul>
					            <button class="btn btn-shop">Get Stated</button>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-shop">
						<div class="card-body">
							<center>
								<i class="fa-solid fa-fire rounded-circle icon-card"></i>
								<div class="shop-title">Plano Base</div>
								<h3 class="shop-price">R$ 31.00</h3>
								<br>
								<ul class="package_list">
					                <li>Unlimited Website</li>
					                <li>Unlimited Storage</li>
					                <li>Free SSL Certificate</li>
					                <li>24/7 Support</li>
					            </ul>
					            <button class="btn btn-shop">Get Stated</button>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-shop">
						<div class="card-body">
							<center>
								<i class="fa-solid fa-fire rounded-circle icon-card"></i>
								<div class="shop-title">Plano Base</div>
								<h3 class="shop-price">R$ 31.00</h3>
								<br>
								<ul class="package_list">
					                <li>Unlimited Website</li>
					                <li>Unlimited Storage</li>
					                <li>Free SSL Certificate</li>
					                <li>24/7 Support</li>
					            </ul>
					            <button class="btn btn-shop">Get Stated</button>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-shop">
						<div class="card-body">
							<center>
								<i class="fa-solid fa-fire rounded-circle icon-card"></i>
								<div class="shop-title">Plano Base</div>
								<h3 class="shop-price">R$ 31.00</h3>
								<br>
								<ul class="package_list">
					                <li>Unlimited Website</li>
					                <li>Unlimited Storage</li>
					                <li>Free SSL Certificate</li>
					                <li>24/7 Support</li>
					            </ul>
					            <button class="btn btn-shop">Get Stated</button>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="cold">
	<div class="container">
		<br>
		<br>
		<h4>Card Plano</h4>
		<div class="code-view">
			<h6>HTML</h6>
			<div class="card card-consoleHTML">
				<div class="card-body">
					<pre><?php echo input('<div class="card card-shop">
	<div class="card-body">
		<center>
			<i class="fa-solid fa-fire rounded-circle icon-card"></i>
			<div class="shop-title">Plano Base</div>
			<h3 class="shop-price">R$ 31.00</h3>
			<br>
			<ul class="package_list">
		            <li>Unlimited Website</li>
		            <li>Unlimited Storage</li>
		            <li>Free SSL Certificate</li>
		            <li>24/7 Support</li>
		        </ul>
	        	<button class="btn btn-shop">Get Stated</button>
		</center>
	</div>
</div>'); ?></pre>
				</div>
			</div>
		</div>
		<hr>
		<div class="code-view">
			<h6>CSS</h6>
			<div class="card card-consoleCSS">
				<div class="card-body">
					<pre><?php echo input('.card-shop{
	background: #f2f2f2;
	border: 2px solid #9d39fa;
	color: black;
	margin-top: 10px;
}
.icon-card{
	background: #fff;
	padding: 1rem 1rem;
	color: #9d39fa;
	font-size: 25px;
}
.shop-title{
	color: #9d39fa;
	margin-top: 15px;
	margin-bottom: 15px;
}
.package_list {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 20px;
}
.package_list li {
    list-style: none;
    margin: 6px 0;
    color: gray;
    font-size: 14px;
}
.btn-shop{
	border: 0;
	background-color: #9d39fa;
	color: #fff;
}
.btn-shop:hover{
	transition: 150ms;
	border: 0;
	background-color: #8929e3;
	color: #fff;
	text-decoration: none;
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