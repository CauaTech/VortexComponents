<?php 
$int = 0;
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
	<title>Vortex Components</title>
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
<?php include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->
<div class="components-vortex">
	<div class="container">
		<div class="cmp-text">
			<br>
			<h3>Get Started</h3>
			<p>Para acessar e aproveitar todas as funcionalidades do sistema, é imperativo adotar a template exclusiva desenvolvida pela Vortex. Cada componente presente nesta template foi meticulosamente construído a partir do zero, garantindo não apenas uma integração perfeita, mas também um desempenho otimizado e uma experiência de usuário excepcional.</p>
		</div>
		<div class="code-view">
			<h6>HTML</h6>
			<div class="card card-consoleHTML">
				<div class="card-body">
					<pre><?php echo input('<!-- Body -->

Escreva todo codigo aqui!

<!-- Finalizar/Body -->'); ?></pre>
				</div>
			</div>
		</div>
		<hr>
		<div class="code-view">
			<h6>CSS</h6>
			<div class="card card-consoleCSS">
				<div class="card-body">
					Lembre de copiar o CSS e colocar no Style_Global
					<pre><?php echo input('.dropdown-vortex{
	min-width: 100%;
	max-width: 300px;
}') ?></pre>
				</div>
			</div>
		</div>
		<hr>
		<div class="div-create">
			<p>Para criar uma div, utilize os seguintes parâmetros. Se o nome for suficientemente pequeno, empregue o nome completo; caso seja muito extenso, crie uma abreviação com o termo específico relacionado às suas funções no projeto, tais como header, venda, loja, produtos, ou equipe. Por exemplo: class="NOME-FUNÇÂO"</p>
		</div>
	</div>
</div>
<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>