<?php
/**
 * Created by PhpStorm.
 * User: zeros
 * Date: 7/06/2018
 * Time: 12:29 AM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="THEMELOCK.COM - Private Transport and Car Hire HTML Template" />
	<meta name="description" content="THEMELOCK.COM - Private Transport and Car Hire HTML Template">
	<meta name="author" content="themeenergy.com">

	<title>Reservacion</title>

	<link rel="stylesheet" href="<?=base_url("")?>/css/theme-pink.css" />
	<link rel="stylesheet" href="<?=base_url("")?>/css/style.css" />
	<link rel="stylesheet" href="<?=base_url("")?>/css/animate.css" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?=base_url("")?>/images/favicon.ico" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="">
<!-- Header -->
<header class="header" role="banner">
	<div class="wrap">
		<!-- Logo -->
		<div class="logo">
			<a href="" title="Transfers">
				<img src="../images/transfers.jpg" alt="Transfers" />
			</a>
		</div>
		<!-- //Logo -->

		<!-- Main Nav -->
		<nav role="navigation" class="main-nav">
			<ul>
				<li class="active">
					<a href="<?=base_url()?>" title="Inicio">Inicio</a>
				</li>
				<li>
					<a href="#contactos" title="Contacto">Contacto</a>
				</li>
				<li>
					<a href="<?=isset($this->session->idUsuario) ? base_url("api/8") :  base_url("api/1") ?>" title="Mi Cuenta"><?=isset($this->session->idUsuario) ? 'Panel' : 'Mi Cuenta' ?></a>
				</li>
			</ul>
		</nav>
		<!-- //Main Nav -->
	</div>
</header>
<!-- //Header -->

<!-- Main -->
<main class="main" role="main">
	<!-- Search -->
	<div class="output color twoway">
		<div class="wrap">

		</div>
	</div>
	<!-- //Search -->

	<div class="wrap">
		<div class="row">
			<!--- Content -->
			<div class="full-width content">
				<h2>Registro Datos Personales</h2>
				<p></p>
			</div>
			<!--- //Content -->
			<div class="three-fourth" style="width: 100%!important;">
				<table class="data">
					<form id="formDatosPersonales" name="formDatosPersonales" method="post">

						<tr>
							<th>Datos Personales</th>
						</tr>
						<tr>
							<td>
								<div class="form-control">
									<input type="number" class="form-group" name="cedula" id="cedula" placeholder="Cedula" required="required">
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div  class="form-group">
									<input  type="text" name="primerNombre" id="primerNombre" placeholder="Primer Nombre" required="required">
								</div>
							</td>
						</tr>


						<tr>
							<td>
								<div  class="form-group">
									<input  type="text" name="segundoNombre" id="segundoNombre" placeholder="Segundo nombre">
								</div>
							</td>
						</tr>


						<tr>
							<td>
								<div  class="form-group">
									<input type="text" name="primerApellido" id="primerApellido" placeholder="Primer Apellido" required="required">
								</div>
							</td>
						</tr>


						<tr>
							<td>
								<div  class="form-group">
									<input type="text" name="segundoApellido" id="segundoApellido" placeholder="Segundo Apellido" required="required">
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<div class="actions">
									<a href="0" class="btn medium back">Regresar</a>
									<input type="submit" name="btnInput" class="btn medium color right" value="Continuar">
								</div>
							</td>
						</tr>

					</form>
				</table>
			</div>
		</div>
	</div>
</main>
<!-- //Main -->

<!-- Footer -->
<footer class="footer black" role="contentinfo">
	<div class="wrap">
		<div class="row">
			<!-- Column -->
			<article class="one-half">
				<h6>Sobre nosotros</h6>
				<p>Somos una plataforma para conectar vuelos a diferentes destinos del pais y el mundo.</p>
			</article>
			<!-- //Column -->

			<!-- Column -->
			<article class="one-fourth">
				<h6>¿Necesitas ayuda?</h6>
				<p>Contáctenos por teléfono o correo electrónico:</p>
				<p class="contact-data">
					<span class="ico phone"></span> +1 555 555 555</p>
				<p class="contact-data">
					<span class="ico email"></span>
					<a href="mailto:hola@ub.com">hola@ub.com</a>
				</p>
			</article>
			<!-- //Column -->

			<!-- Column -->
			<article class="one-fourth">
				<h6>Síguenos</h6>
				<ul class="social">
					<li class="facebook">
						<a href="#" title="facebook">facebook</a>
					</li>
					<li class="twitter">
						<a href="#" title="twitter">twitter</a>
					</li>
					<li class="gplus">
						<a href="#" title="gplus">google plus</a>
					</li>
					<li class="linkedin">
						<a href="#" title="linkedin">linkedin</a>
					</li>
					<li class="vimeo">
						<a href="#" title="vimeo">vimeo</a>
					</li>
					<li class="pinterest">
						<a href="#" title="pinterest">pinterest</a>
					</li>
				</ul>
			</article>
			<!-- //Column -->
		</div>

		<div class="copy">
			<p>Copyright 2018, UbSoft. Todos los derechos reservados. </p>

			<nav role="navigation" class="foot-nav">
				<ul>
					<li>
						<a href="#" title="For partners">Hecho con amor</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</footer>
<!-- //Footer -->

<!-- Preloader -->
<div class="preloader">
	<div id="followingBallsG">
		<div id="followingBallsG_1" class="followingBallsG"></div>
		<div id="followingBallsG_2" class="followingBallsG"></div>
		<div id="followingBallsG_3" class="followingBallsG"></div>
		<div id="followingBallsG_4" class="followingBallsG"></div>
	</div>
</div>
<!-- //Preloader -->

<!-- jQuery -->
<script src="<?=base_url("")?>/js/jquery.min.js"></script>
<script src="<?=base_url("")?>/js/jquery.uniform.min.js"></script>
<script src="<?=base_url("")?>/js/jquery.datetimepicker.js"></script>
<script src="<?=base_url("")?>/js/jquery.slicknav.min.js"></script>
<script src="<?=base_url("")?>/js/wow.min.js"></script>
<script src="<?=base_url("")?>/js/search.js"></script>
<script src="<?=base_url("")?>/js/scripts.js"></script>

<?=$scripts?>
<?=$loader?>


<script>

	$("#formDatosPersonales").on("submit",function (form) {
		form.preventDefault();
		if($("#cedula").val().length > 9 && $("#primerNombre").val().length >=3 && $("#primerApellido").val().length >=3 && $("#segundoNombre").val().length >=3 && $("#segundoApellido").val().length >=3){
			if(confirm("¿los datos a registrar son correctos?,")){
				post.$url = "<?=base_url('')?>api/registrar/3";
				$obj = new Object();
				$obj.cedula = $("#cedula").val();
				$obj.primerApellido = $("#primerApellido").val();
				$obj.segundoApellido = $("#segundoApellido").val();
				$obj.primerNombre = $("#primerNombre").val();
				$obj.segundoNombre = $("#segundoNombre").val();
				post.$sendPost.setNpost(($obj));
				if(JSON.parse(post.$sendPost.getPost()) == true){
					alert("datos guardados con exito");
					window.location.href = localStorage.url+"api/4?id="+localStorage.idVuelo;
				}
				else{
					alert("ocurrio un error al momento de guardar esta persona");
				}
			}
		}
		else{
			alert("debes llenar todos los campos");
		}
	})

</script>

</body>

</html>

