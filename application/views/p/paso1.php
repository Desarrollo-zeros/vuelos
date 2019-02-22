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
						<a href="<?=isset($this->session->idUsuario) ? base_url("api/8") : base_url("api/1") ?>" title="Mi Cuenta"><?=isset($this->session->idUsuario) ? 'Panel' : 'Mi Cuenta' ?></a>
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
                <div>
                  <p><?=($vuelo->vueloOrigen)?>
                    <small>FECHA </small><?=($vuelo->fechaVuelo)?> <small> HORA</small> <?=($vuelo->hsalidad)?></p>
                </div>
                <div>
                  <p><?=($vuelo->vueloDestino)?>
                    <small>TIEMPO ESTIMADO DE VIAJE </small> <?=($vuelo->TiempoEstimado)?> HORA</p>
                </div>
              </div>
            </div>
            <!-- //Search -->
          
            <div class="wrap">
              <div class="row">
                <!--- Content -->
                <div class="full-width content">
                  <h2>Equipaje y extras</h2>
                  <p>Seleccione el número total de piezas de equipaje y extras para sus transferencias. Si llega con más equipaje que
                    el especificado en la reserva, no podemos garantizar su transporte. En caso de que podamos transportarlos, le cobraremos
                    una tarifa adicional.</p>
                </div>
                <!--- //Content -->
                <div class="three-fourth">
                  <form id="formRegistrarVuelo" name="formRegistrarVuelo" method="post">
                    <table class="data">
                      <tr>
                        <th>Tipo de equipaje</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                      </tr>
                      <tr>
                        <td>Asientos
                          <i>Asientos total a reservar en el vuelo</i>
                        </td>
                        <td>$ <?=($vuelo->valorVuelo)?></td>
                        <td>
							<select id="numeroAsiento" name="numeroAsiento" required="required">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
                        </td>
                        <td> 
                       		 <small style="font-size: 15px;" id="totalNumeroAsiento"></small>
                        </td>
					  </tr>


						<tr>
							<td>Asiento por clase
								<i>clase de vuelo</i>
							</td>

							<td>
								<small style="font-size: 15px;" id="totalNumeroAsiento1"></small>
							</td>

							<td>
								<select id="clases" name="clases" required="required">
									<option value="2">Segunda Clase</option>
									<option value="1">Primera Clase</option>
								</select>
							</td>
							<td>
								<small style="font-size: 15px;" id="valorXclase"></small>
							</td>
						</tr>


						<tr>
							<td>Equipjae
								<i>clase de vuelo</i>
							</td>

							<td>
								<small style="font-size: 15px;">$ <?=$precios->equipajeU?></small>
							</td>
							<td>
								<select id="equipajes" name="equipajes" required="required">
									<option value="0">0 kilo</option>
									<option value="1">1 Kilo</option>
									<option value="2">2 Kilo</option>
									<option value="3">3 Kilo</option>
									<option value="4">4 Kilo</option>
									<option value="5">5 Kilo</option>
								</select>
							</td>
							<td>
								<small style="font-size: 15px;" id="varloXe"></small>
							</td>
						</tr>


                    </table>

					  <!--  <table class="data">
                            <tr>
                                <th style="width: 50px!important;">Cedula</th>
                                <th>Primer Nombre</th>
                                <th>Segundo Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                            </tr>
                            <tr>
                                <td><input style="width: 250px!important;" type="text" name="cedula" id="cedula" placeholder="Cedula" required="required"></td>
                                <td><input style="width: 100px!important;" type="text" name="primerNombre" id="primerNombre" placeholder="Primer Nombre" required="required"></td>
                                <td><input style="width: 100px!important;" type="text" name="segundoNombre" id="segundoNombre" placeholder="Segundo nombre"></td>
                                <td><input style="width: 100px!important;" type="text" name="primerApellido" id="primerApellido" placeholder="Primer Apellido" required="required"></td>
                                <td><input style="width: 100px!important;" type="text" name="segundoApellido" id="segundoApellido" placeholder="segundo Apellido" required="required"></td>
                            </tr>
                        </table> -->

                    <div class="actions">
                      <a href="0" class="btn medium back">Regresar</a>
                      <input type="submit" class="btn medium color right" value="Continuar">
                    </div>
                  </form>
                </div>
          
                <!--- Sidebar -->
                <aside class="one-fourth sidebar right">
                  <!-- Widget -->
                  <div class="widget">
                    <h4>RESUMEN DE RESERVA</h4>
                    <div class="summary">
                      <div>
                        <dl>
                          <dt>Fecha</dt>
                          <dd><?=($vuelo->fechaVuelo)?> <?=($vuelo->hsalidad)?></dd>
                          <dt>De</dt>
                          <dd><?=($vuelo->vueloOrigen)?></dd>
                          <dt>Hasta</dt>
                          <dd><?=($vuelo->vueloDestino)?></dd>
                          <dt>Avión</dt>
                          <dd><?=($vuelo->nombreAvion)?></dd>
                        </dl>
                      </div>

                      <dl class="total">
                        <dt>Total</dt>
                        <dd><small id="totalVuelo"></small></dd>
                      </dl>

                    </div>
                  </div>
                  <!-- //Widget -->
                </aside>
                <!--- //Sidebar -->
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


		var x = 0;
		var valor  = <?=($vuelo->valorVuelo)?>;
		var t = 0;
		var $total1 = 0;
		var $total2 = 0;
		var $total3 = 0;
		$total1 = valor*$("#numeroAsiento").val();
		$("#totalNumeroAsiento").html("$ "+$total1);
		$("#totalNumeroAsiento1").html("$ "+$total1);
		$("#numeroAsiento").on('change',function () {
			$total1 = valor*$("#numeroAsiento").val();
			$("#totalNumeroAsiento").html("$ "+$total1);
			$("#totalNumeroAsiento1").html("$ "+$total1);
			$("#totalVuelo").html($total1+$total2+$total3);
		});
					//1  //2
		$("#clases").on("change",function () {
			if($("#clases").val() == 1){
				$total2 = (<?=$precios->primerClase?>*$("#numeroAsiento").val());
				t = (<?=$precios->primerClase?>*$("#numeroAsiento").val())+valor*$("#numeroAsiento").val();
				$("#valorXclase").html("$ "+t);
			}
			else if($("#clases").val() == 2){
				t = (<?=$precios->segundaClase?>*$("#numeroAsiento").val())+valor*$("#numeroAsiento").val();
				$("#valorXclase").html("$ "+t);
				$total2 = (<?=$precios->segundaClase?>*$("#numeroAsiento").val());
			}else{
				$("#valorXclase").html("");
				t = 0;
				$total2 = (<?=$precios->segundaClase?>*$("#numeroAsiento").val());
			}
			$("#totalVuelo").html($total1+$total2+$total3);
		});

		$("#equipajes").on("change",function () {
			$total3 = $("#equipajes").val() *<?=$precios->equipajeU?>;
			$("#varloXe").html($total3);
			$("#totalVuelo").html($total1+$total2+$total3);
		})
		$("#totalVuelo").html($total1+$total2+$total3);


		post.$url = "<?=base_url('')?>api/registrar/4";
		$("#formRegistrarVuelo").on("submit",function (form) {
			form.preventDefault();
			if(confirm("desea Comprar este ticket")){
				$obj = new Object();
				$obj.numeroAsiento = $("#numeroAsiento").val();
				$obj.clases = $("#clases").val();
				$obj.equipajes = $("#equipajes").val();
				$obj.idVuelo = localStorage.idVuelo;
				$obj.valorTotal = $total1+$total2+$total3;
				post.$sendPost.setNpost(($obj));
				if(JSON.parse(post.$sendPost.getPost()) == true){
					if(confirm("se ha guardado con exito la compra, ¿desea ver sus ticket?")){
						alert("sera ridirigido al panel de control")
						window.location.href = localStorage.url+"api/8";
					}
				}
				else{
					alert("ocurrio un error al momento de guardar la compra del ticket");
				}
			}
		});


	</script>

</body>

</html>
