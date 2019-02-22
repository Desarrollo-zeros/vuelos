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

	<style>
		.intro {
			background: linear-gradient(rgba(58, 91, 240, 0.5), rgba(0, 0, 0, 0.5)), url("<?=base_url("")?>/images/inicio/fondo.jpg");
		}
	</style>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
	<!-- Header -->
	<header class="header" role="banner">
		<div class="wrap">
			<!-- Logo -->
			<div class="logo">
				<a href="" title="Transfers">
					<img src="<?=base_url("")?>/images/transfers.jpg" alt="Transfers" />
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
		<!-- Intro -->
		<div class="intro">
			<div class="wrap">
				<div class="textwidget">
					<h1 class="wow fadeInDown">¿Necesitas un vuelo?</h1>
					<h2 class="wow fadeInUp">Has venido al lugar correcto.</h2>
					<div class="actions">
						<a href="#servicios" title="Nuestros servicios" class="btn large white wow fadeInLeft anchor">Servicios</a>
						<a href="#reserva" title="Haz una reversa" class="btn large color wow fadeInRight anchor">Reservar</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //Intro -->

		<!-- Search -->
		<div class="advanced-search color" id="reserva">
			<div class="wrap">
				<form role="form" id="formReserva" method="get">
					<!-- Row -->
					<div class="f-row">
						<div class="form-group datepicker one-third">
							<label for="dep-date">Fecha y hora de salida</label>
							<input type="text" id="dep-date" name="fechaVuelo" required="required" />
						</div>
						<div class="form-group select one-third">
							<label>Lugar de origen</label>
							<select id="origen" name="vueloOrigen" required="required">
								<option selected>&nbsp;</option>
							</select>
						</div>
						<div class="form-group select one-third">
							<label>Lugar de destino</label>
							<select id="destinos" name="vueloDestino" required="required">
								<option selected>&nbsp;</option>
							</select>
						</div>
					</div>
					<!-- //Row -->

					<!-- Row -->
					<div class="f-row">

					</div>
					<!-- //Row -->

					<!-- Row -->
					<div class="f-row">
						<div class="form-group right">
							<button type="submit" class="btn large black">Buscar Vuelos</button>
						</div>
					</div>
					<!--// Row -->
				</form>
			</div>
		</div>
		<!-- //Search -->

		<div class="wrap" id="vuelos" style="display: none;">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2>Seleccione su avión para la salida</h2>

					<div class="results" id="results">
						<!-- Item -->

						<!-- //Item -->

					</div>
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>
	<!-- //Main -->




	<!-- Services iconic -->
		<div class="services iconic white" id="servicios">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle">
							<span class="ico pig"></span>
						</span>
						<h3>Tasas fijas</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->

					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle">
							<span class="ico lock"></span>
						</span>
						<h3>Vuelos Confiables</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->

					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle">
							<span class="ico wallet"></span>
						</span>
						<h3>Sin gastos de reserva</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->

					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle">
							<span class="ico heart"></span>
						</span>
						<h3>Cancelación gratis</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->

					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle">
							<span class="ico wand"></span>
						</span>
						<h3>Flexibilidad de reserva</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->

					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle">
							<span class="ico telephone"></span>
						</span>
						<h3>24 horas de servicio al cliente</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->

					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle">
							<span class="ico award"></span>
						</span>
						<h3>Servicio galardonado</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->

					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle">
							<span class="ico clip"></span>
						</span>
						<h3>Beneficios para los socios</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->

					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle">
							<span class="ico shuttle"></span>
						</span>
						<h3>Aviones de calidad</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy tinc dolore magna.</p>
					</div>
					<!-- //Item -->
				</div>
			</div>
		</div>
		<!-- //Services iconic -->

		<!-- Call to action -->
		<div class="black cta">
			<div class="wrap">
				<p class="wow fadeInLeft">¿Te gusta lo que ves? ¿Estás listo para destacar? Sabes qué hacer.</p>
				<a title="Haz una reversa" href="#reserva" class="btn huge color right wow fadeInRight">Reservar</a>
			</div>
		</div>
		<!-- //Call to action -->



	</main>
	<!-- //Main -->

	<!-- Footer -->
	<footer id="contactos" class="footer black" role="contentinfo">
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

		localStorage.url = '<?=base_url()?>';
		post.$sendPost.setPost();
		$departamentos =  Object();
		$municipios = Object();

		$data = JSON.parse(post.$sendPost.getPost());

		$departamentos = $data;
		$municipios = $data;


		var string1 = '';
		for(var i in $departamentos){
			string1 += '<optgroup label="'+$departamentos[i].nombreDepartamento+'">';
			for(var j in $municipios){
				if($departamentos[i].idDepartamento == $municipios[j].idDepartamento){
					string1 += '<option value="'+$municipios[j].idMunicipio+'">'+$municipios[j].nombreMunicipio+'</option>';
				}
			}
		}
		$("#origen").html("<option>Seleccione Origen</option>"+string1);
		string1 = '';
		var string2 = '';
		$('#origen').on('change', function() {
			for(var i in $departamentos){
				string2 += '<optgroup label="'+$departamentos[i].nombreDepartamento+'">';
				for(var j in $municipios){
					if($departamentos[i].idDepartamento == $municipios[j].idDepartamento){
						if($municipios[j].idMunicipio != $("#origen").val()){
							string2 += '<option value="'+$municipios[j].idMunicipio+'">'+$municipios[j].nombreMunicipio+'</option>';
						}
					}
				}
			}
			$("#destinos").html("<option>Seleccione Destino</option>"+string2);
			string2 = '';
		})


		$("#formReserva").on("submit",function (form) {
			form.preventDefault();
			if($("#dep-date").val() != "" && $("#origen").val() != "" && $("#destino").val() != ""){
				$data = new FormData($(this)[0]);
				post.$url = "<?=base_url('')?>api/obtenerDestinos/2";
				post.$sendPost.setPost($data);
				var string = '';
				var data = JSON.parse(post.$sendPost.getPost());
				if(post.$sendPost.getPost() != '[]'){
					for(var i in data){
						string += '<article class="result">';
						string += '<div class="one-half heightfix">';
						string += '<ul>\n' +
							'\t\t\t\t\t\t\t\t\t<li>\n' +
							'\t\t\t\t\t\t\t\t\t\t<p>Fecha:\n' +
							'\t\t\t\t\t\t\t\t\t\t\t<strong>'+data[i].fechaVuelo+'</strong>\n' +
							'\t\t\t\t\t\t\t\t\t\t</p>\n' +
							'\t\t\t\t\t\t\t\t\t</li>\n' +
							'\t\t\t\t\t\t\t\t\t<li>\n' +
							'\t\t\t\t\t\t\t\t\t\t<p>Salida:\n' +
							'\t\t\t\t\t\t\t\t\t\t\t<strong>'+data[i].vueloOrigen+'</strong>\n' +
							'\t\t\t\t\t\t\t\t\t\t</p>\n' +
							'\t\t\t\t\t\t\t\t\t</li>\n' +
							'\t\t\t\t\t\t\t\t\t<li>\n' +
							'\t\t\t\t\t\t\t\t\t\t<p>Destino:\n' +
							'\t\t\t\t\t\t\t\t\t\t\t<strong>'+data[i].vueloDestino+'</strong>\n' +
							'\t\t\t\t\t\t\t\t\t\t</p>\n' +
							'\t\t\t\t\t\t\t\t\t</li>\n' +
							'\t\t\t\t\t\t\t\t</ul>';
						string += '<ul>\n' +
							'\t\t\t\t\t\t\t\t\t<li>\n' +
							'\t\t\t\t\t\t\t\t\t\t<span class="ico time"></span>\n' +
							'\t\t\t\t\t\t\t\t\t\t<p>Hora:\n' +
							'\t\t\t\t\t\t\t\t\t\t\t<strong>'+data[i].hsalidad+'</strong>\n' +
							'\t\t\t\t\t\t\t\t\t\t</p>\n' +
							'\t\t\t\t\t\t\t\t\t</li>\n' +
							'\t\t\t\t\t\t\t\t\t<li>\n' +
							'\t\t\t\t\t\t\t\t\t\t<span class="ico luggage"></span>\n' +
							'\t\t\t\t\t\t\t\t\t\t<p>Max\n' +
							'\t\t\t\t\t\t\t\t\t\t\t<strong>'+data[i].maxEquipaje+' KG</strong>\n' +
							'\t\t\t\t\t\t\t\t\t\t\t<br />Por persona</p>\n' +
							'\t\t\t\t\t\t\t\t\t</li>\n' +
							'\t\t\t\t\t\t\t\t\t<li>\n' +
							'\t\t\t\t\t\t\t\t\t\t<span class="ico time"></span>\n' +
							'\t\t\t\t\t\t\t\t\t\t<p>Tiempo estimado\n' +
							'\t\t\t\t\t\t\t\t\t\t\t<br />\n' +
							'\t\t\t\t\t\t\t\t\t\t\t<strong>'+data[i].TiempoEstimado+' Horas</strong>\n' +
							'\t\t\t\t\t\t\t\t\t\t</p>\n' +
							'\t\t\t\t\t\t\t\t\t</li>\n' +
							'\t\t\t\t\t\t\t\t</ul></div>';

						string += '<div class="one-fourth heightfix">\n' +
							'\t\t\t\t\t\t\t\t<div>\n' +
							'\t\t\t\t\t\t\t\t\t<div class="price">$ '+data[i].valorVuelo+'</div>\n' +
							'\t\t\t\t\t\t\t\t\t<span class="meta">por persona</span>\n' +
							'\t\t\t\t\t\t\t\t\t<a onclick="registrarVuelos('+data[i].idVuelo+')" class="btn grey large">Seleccionar</a>\n' +
							'\t\t\t\t\t\t\t\t</div>\n' +
							'\t\t\t\t\t\t\t</div>';

						string += '<div class="full-width information">\n' +
							'\t\t\t\t\t\t\t\t<a onclick="ocultar()" class="close color" title="Close">x</a>\n' +
							'\t\t\t\t\t\t\t\t<p></p>\n' +
							'\t\t\t\t\t\t\t</div></article>';
					}
					$("#vuelos").css("display","block");
					$("#results").html(string);
					string = '';
					window.location.href = "#results";
				}else{
					alert("no hay vuelo para esta fecha");
				}
			}
		});


		function ocultar() {
			$("#vuelos").css("display","none");
		}


		function registrarVuelos(id) {
			post.$url = "<?=base_url('')?>api/obtenerDestinos/3";
			localStorage.idVuelo = id;

			<?php
				if(isset($this->session->idUsuario)){
					echo '
							if(confirm("Desea continuar Con la compra del ticket")){
								window.location.href = localStorage.url+"api/3?id="+id;
							}
						';
				}
				else{
					echo '
								alert("Debes Iniciar Sesion para poder seguir alquir el ticket");
								window.location.href =  localStorage.url+"api/1";
						';
				}
			?>
		}
	</script>

</body>

</html>
