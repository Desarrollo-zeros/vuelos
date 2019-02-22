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
						<a href="#" title="Contacto">Contacto</a>
					</li>
					<li>
						<a href="<?=base_url("api/1")?>" title="Mi Cuenta">Mi Cuenta</a>
					</li>
				</ul>
			</nav>
			<!-- //Main Nav -->
		</div>
	</header>
	<!-- //Header -->

	<!-- Main -->
    <main class="main" role="main">
            <!-- Page info -->
            <header class="site-title color">
              <div class="wrap">
                <div class="container">
                  <h1>Iniciar Sesión</h1>
                  <nav role="navigation" class="breadcrumbs">
                    <ul>
                      <li><a href="" title="Inicio">Inicio</a></li>
                      <li>Iniciar Sesión</li>
                    </ul>
                  </nav>
                </div>
              </div>
            </header>
            <!-- //Page info -->
            
            <div class="wrap">
              <div class="row">
                <!--- Content -->
                <div class="content one-half modal">
                  <!--Login-->
                  <div class="box">
                    <form id="formLogin" name="formLogin">
                      <div class="f-row">
                        <div class="full-width">
                          <label for="usuario">Usuario</label>
                          <input type="text" id="usuario" minlength="4" name="usuario" required="required" />
                        </div>
                      </div>
                      <div class="f-row">
                        <div class="full-width">
                          <label for="password">Contraseña</label>
                          <input type="password" id="password" name="password" required="required" />
                        </div>
                      </div>
                      <div class="f-row">
                        <div class="full-width">
                          <input type="submit" value="Iniciar Sesión" class="btn color medium full" />
                        </div>
                      </div>
                      
                      <p>¿Aún no tienes una cuenta? <a href="2">Regístrate</a>.</p>
                    </form>
                  </div>
                  <!--//Login-->
                </div>
                <!--- //Content -->
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

		post.$url = "<?=base_url('')?>api/login/1";
		$("#formLogin").on("submit",function (form) {
			form.preventDefault();
			$user = new FormData($(this)[0]);
			post.$sendPost.setPost($user);
			$estado = JSON.parse(post.$sendPost.getPost());
			if($estado.estado == true){
				if(localStorage.idVuelo != null){
					window.location.href = localStorage.url+"api/3?id="+localStorage.idVuelo;
				}
				else{
					alert("Session activa");
					window.location.href =  localStorage.url+"api/";
				}
			}else{
				alert("error usuario y/o contraseña invalidos");
			}
		});
	</script>
</body>

</html>
