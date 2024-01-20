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
<div class="cards-info">
	<div class="container">
		<div class="info-cards">
			<div class="row">
				<div class="col-md-4">
					<div class="card card-info">
						<div class="card-body">
							<div class="info-icon">
								<i class="fa-solid fa-server"></i>
							</div>
							<div class="info-text">
								<div class="title-info">
									Host
								</div>
								<div class="texto-info">
									5
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-info">
						<div class="card-body">
							<div class="info-icon">
								<i class="fa-regular fa-user"></i>
							</div>
							<div class="info-text">
								<div class="title-info">
									Usuarios
								</div>
								<div class="texto-info">
									553
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-info">
						<div class="card-body">
							<div class="info-icon">
								<i class="fa-solid fa-wifi"></i>
							</div>
							<div class="info-text">
								<div class="title-info">
									Onlines
								</div>
								<div class="texto-info">
									123
								</div>
							</div>
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
		<h4>Card Info</h4>
		<div class="code-view">
			<h6>HTML</h6>
			<div class="card card-consoleHTML">
				<div class="card-body">
					<pre><?php echo input('<div class="card card-info">
	<div class="card-body">
		<div class="info-icon">
			<i class="fa-regular fa-user"></i>
		</div>
		<div class="info-text">
			<div class="title-info">
				Usuarios
			</div>
			<div class="texto-info">
				553
			</div>
		</div>
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
					<pre><?php echo input('.card-info{
	border: 0;
	background: #f2f2f2;
	color: black;
	margin-top: 10px;
}
.info-icon{
	float: left;
	font-size: 5vh;
}
.info-text{
	float: right;
}
.title-info{
	font-size: 15px;
	font-weight: 600;
	color: #9d39fa;
}
.texto-info{
	font-size: 35px;
	font-weight: 800;
}') ?></pre>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="card-prices">
	<div class="container">
		<div class="prices-template">
			<div class="row">
				<div class="col-md-4">
					<div class="card shadow  card-price">
						<div class="card-body">
							<div class="title-price">Base</div>
							<div class="price-value">R$ 10 <span class="price-plane">/Mensal</span></div>
							<div class="subTitle-price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
							<div class="itens-price">
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
							</div>
							<center>
								<button class="btn btn-lg btn-outline-price">Adquirir Plan</button>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow  card-price">
						<div class="card-body">
							<div class="title-price">Base</div>
							<div class="price-value">R$ 10 <span class="price-plane">/Mensal</span></div>
							<div class="subTitle-price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
							<div class="itens-price">
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
							</div>
							<center>
								<button class="btn btn-lg btn-outline-price">Adquirir Plan</button>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow  card-price">
						<div class="card-body">
							<div class="title-price">Base</div>
							<div class="price-value">R$ 10 <span class="price-plane">/Mensal</span></div>
							<div class="subTitle-price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
							<div class="itens-price">
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
								<div class="item-card">
									<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
								</div>
							</div>
							<center>
								<button class="btn btn-lg btn-outline-price">Adquirir Plan</button>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
</div>

<div class="cold">
	<div class="container">
		<br>
		<br>
		<h4>Card Price</h4>
		<div class="code-view">
			<h6>HTML</h6>
			<div class="card card-consoleHTML">
				<div class="card-body">
					<pre><?php echo input('<div class="card shadow  card-price">
	<div class="card-body">
		<div class="title-price">Base</div>
		<div class="price-value">R$ 10 <span class="price-plane">/Mensal</span></div>
		<div class="subTitle-price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
		<div class="itens-price">
			<div class="item-card">
				<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
			</div>
			<div class="item-card">
				<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
			</div>
			<div class="item-card">
				<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
			</div>
			<div class="item-card">
				<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
			</div>
			<div class="item-card">
				<i class="fa-solid fa-gamepad"></i> Lorem Ipsum is simply dummy.
			</div>
		</div>
		<center>
			<button class="btn btn-lg btn-outline-price">Adquirir Plan</button>
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
					<pre><?php echo input('.card-price{
	margin-top: 25px;
	border: 0;
	color: black;
	border-radius: 0px;
}
.title-price{
	color: #8c8c8c;
	margin-top: 20px;
	font-weight: 400;
	font-size: 17px;
}
.price-value{
	font-size: 30px;
	font-weight: 700;
}
.price-plane{
	font-size: 15px;
	font-weight: 400;
	color: #b3b3b3;
}
.subTitle-price{
	margin-top: 15px;
	font-size: 12px;
}
.item-card{
	margin-top: 25px;
	font-size: 14px;
	color: #b3b3b3;
}
.btn-outline-price{
	border: 1px solid #802feb;
	color: #802feb;
	margin-top: 25px;
	margin-bottom: 25px;
	font-size: 15px;
	width: 100%;
	background: #fff;
}
.card-price:hover{
	color: #fff;
	background-color: #802feb;
	border-radius: 10px;
	transition: 350ms;
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