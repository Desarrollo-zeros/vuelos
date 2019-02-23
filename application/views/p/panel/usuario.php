<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/panel/plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>/panel/bootstrap//dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?=base_url()?>/panel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?=base_url()?>/panel/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?=base_url()?>/panel/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?=base_url()?>/panel/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/panel/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?=base_url()?>/panel/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>/panel/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?=base_url()?>/panel/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?=base_url()?>/panel/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?=base_url()?>/panel/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?=base_url()?>/panel/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?=base_url()?>/panel/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input required="required"  type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?=base_url()?>/panel/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="8" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
					<li>
						<a href="#tickest" id="verTicket" class="waves-effect"><i class="fa fa-bullseye fa-fw" aria-hidden="true"></i>Ver tickets</a>
					</li>

					<li>
						<a href="#gestionPersona" id="verPersona" class="waves-effect"><i class="fa fa-save fa-fw" aria-hidden="true"></i>Gestion de Datos</a>
					</li>


					<li>
						<a href="<?=base_url("api/")?>" class="waves-effect"><i class="fa fa-buysellads fa-fw" aria-hidden="true"></i>Comprar ticket</a>
					</li>


					<li>
						<a href="10" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Cerrar Sesion</a>
					</li>
                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->


				<div class="row" id="tickest" style="display: none">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Gestion Tickes</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
											<th>Cedula</th>
                                            <th>Primer Nombre</th>
                                            <th>Primer Apellido</th>
											<th>Origen</th>
											<th>Destino</th>
                                            <th>Fecha vuelo</th>
                                            <th>Precio Vuelo</th>
											<th>Total a Pagar</th>
											<th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaVerTicket">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



				<div class="col-md-12 col-xs-12" style="display: none" id="gestionPersona">
					<div class="white-box">
						<form class="form-horizontal form-material" id="formPersona" name="formPersona">
							<div class="form-group">
								<label class="col-md-12">cedula</label>
								<div class="col-md-12">
									<input required="required"  type="number" id="cedula" name="cedula" placeholder="Cedula" class="form-control form-control-line"> </div>
							</div>
							<div class="form-group">
								<label for="example-email" class="col-md-12">Primer Nombre</label>
								<div class="col-md-12">
									<input required="required"  type="text" placeholder="Primer Nombre" class="form-control form-control-line" name="primerNombre" id="primerNombre"> </div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Segundo Nombre</label>
								<div class="col-md-12">
									<input required="required"  type="text" placeholder="Segundo Nombre" class="form-control form-control-line" name="segundoNombre" id="segundoNombre"> </div>
							</div>


							<div class="form-group">
								<label for="example-email" class="col-md-12">Primer Apellido</label>
								<div class="col-md-12">
									<input required="required"  type="text" placeholder="Primer Apellido" class="form-control form-control-line" name="primerApellido" id="primerApellido"> </div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Segundo Apellido</label>
								<div class="col-md-12">
									<input required="required"  type="text" placeholder="Segundo Nombre" class="form-control form-control-line" name="segundoApellido" id="segundoApellido"> </div>
							</div>


							<div class="form-group">
								<label for="example-email" class="col-md-12">Telefono</label>
								<div class="col-md-12">
									<input required="required"  type="number" placeholder="Telefono" class="form-control form-control-line" name="telefono" id="telefono"> </div>
							</div>


							<div class="form-group">
								<div class="col-sm-12">
									<input required="required"  type="submit" id="btnFormPersona" name="btnFormPersona" class="btn btn-success" value="Guardar Avion">
								</div>
							</div>
						</form>
					</div>
				</div>



				<div class="row" id="impresion" style="display: none">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="white-box">
							<h3 class="box-title">Factura Cliente</h3>
							<div class="table-responsive">
								<table class="table">
									<thead>
									<tr>
										<th>#</th>
										<th>Cedula</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Primer Apelldio</th>
										<th>Segundo Apellido</th>
										<th>Telefono</th>
									</tr>
									</thead>
									<tbody id="tabla1">
									</tbody>
								</table>

								<hr>
								<table class="table">
									<thead>
									<tr>
										<th>#</th>
										<th>Numero Asientos</th>
										<th>Clase del vuelo</th>
										<th>Nombre Del Avion</th>
										<th>Equipaje</th>
										<th>Estado Del vuelo</th>
									</tr>
									</thead>
									<tbody id="tabla3">
									</tbody>
								</table>

								<hr>
								<table class="table">
									<thead>
									<tr>
										<th>#</th>
										<th>Fecha De vuelo</th>
										<th>Oriegen De Vuelo</th>
										<th>Destino De Vuelo</th>
										<th>Hora del Vuelo</th>
										<th>Varlor Del Vuelo</th>
										<th>Valor total a pagar</th>
									</tr>
									</thead>
									<tbody id="tabla2">
									</tbody>
								</table>
							</div>
							<br><br><br>

							<b>Debes cancelar el pago en la oficinas con un valor de $ <small id="val"></small>
							<br>Fecha Generacion de Factura <small id="fechaA"></small>
								<br>Tiempo Maximo para el Pago factura <small id="fechaM"></small></b>
							<br><br><br>
							<b><h5>La administracion no se hace responsable por perdida del vuelo</h5></b>
							<hr>

							<label>Firma</label><br>
							____________________
							<br>
							<label>C.C: <small id="cedu"></small></label>
							<hr>
						</div>
					</div>
				</div>





			</div>
		</div>
            <!-- /.container-fluid -->
			</div>
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url()?>/panel/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>/panel/bootstrap//dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?=base_url()?>/panel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?=base_url()?>/panel/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url()?>/panel/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?=base_url()?>/panel/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?=base_url()?>/panel/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="<?=base_url()?>/panel/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?=base_url()?>/panel/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?=base_url()?>/panel/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>/panel/js/custom.min.js"></script>
    <script src="<?=base_url()?>/panel/js/dashboard1.js"></script>
    <script src="<?=base_url()?>/panel/plugins/bower_components/toast-master/js/jquery.toast.js"></script>





	<?=$scripts?>
	<?=$loader?>


	<script>
		$("#verTicket").click(function () {
			$("#tickest").css("display","block");
			$("#gestionPersona").css("display","none");
			cargarVerTicker();
		});

		function cargarVerTicker() {
			post.$url = "<?=base_url('')?>Api/verTicketsClientes";
			post.$sendPost.setNpost();
			$data = JSON.parse(post.$data);
			var string = '';
			for(var i in $data){
				string += '<tr>';
				string += '<td>'+$data[i].idVueloXPersona+'</td>';
				string += '<td>'+$data[i].cedula+'</td>';
				string += '<td>'+$data[i].primerNombre+'</td>';
				string += '<td>'+$data[i].primerApellido+'</td>';
				string += '<td>'+$data[i].origen+'</td>';
				string += '<td>'+$data[i].destino+'</td>';
				string += '<td>'+$data[i].fechavuelo+'</td>';
				string += '<td>'+$data[i].valorVuelo+'</td>';
				string += '<td>'+$data[i].valorTotal+'</td>';
				string += '<td style="position: relative; right: 40px!important;"><span><a href="#" onclick="borrarTicketPersona('+$data[i].idVueloXPersona+')" class="text-danger fa fa-remove fa-fw">Eliminar</a></span>';
				string += '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="imprimir('+$data[i].idVueloXPersona+')" class="text-success fa fa-print fa-fw">Imprimir</a></td>';

				string += '</tr>';
			}
			$("#tablaVerTicket").html(string)
		}

		function borrarTicketPersona(id) {
			if(confirm("desea eliminar este Tickets")){
				post.$url = "<?=base_url('')?>Api/eliminarTicketCliente";
				$obj = new Object();
				$obj.idVueloXPersona = id;
				post.$sendPost.setNpost($obj);
				if(JSON.parse(post.$data) == true){
					cargarVerTicker();
					alert("Ticket Eliminado");
				}
				else{
					alert("ocurrio un erro al momento de eliminar");
				}
			}
		}

		$("#verPersona").click(function () {
			$("#tickest").css("display","none");
			$("#gestionPersona").css("display","block");
			loaderPersona();
		});


		function loaderPersona() {
			post.$url = "<?=base_url('')?>Api/buscarDatosPersona";
			post.$sendPost.setNpost();
			$data = JSON.parse(post.$data);
			if($data != false) {
				$("#cedula").val($data.cedula);
				$("#primerNombre").val($data.primerNombre);
				$("#segundoNombre").val($data.segundoNombre);
				$("#primerApellido").val($data.primerApellido);
				$("#segundoApellido").val($data.segundoApellido);
				$("#telefono").val($data.telefono);
				$("#cedula").prop('disabled', true);
				$("#btnFormPersona").removeClass("btn-success").addClass("btn-info");
				$("#btnFormPersona").val("Actualizar Datos");
			}
			else{
				$("#btnFormPersona").removeClass("btn-info").addClass("btn-success");
				$("#btnFormPersona").val("Agregar Datos");
			}
		}

		$("#formPersona").on("submit",function (form) {
			form.preventDefault();
			if($("#btnFormPersona").val() == "Agregar Datos"){
				if(confirm("¿Desea Guardar Datos Personales?")){
					post.$url = "<?=base_url('')?>Api/registrar/3";
					$obj = new Object();
					$obj.cedula = $("#cedula").val();
					$obj.primerNombre = $("#primerNombre").val();
					$obj.segundoNombre = $("#segundoNombre").val();
					$obj.primerApellido = $("#primerApellido").val();
					$obj.segundoApellido = $("#segundoApellido").val();
					$obj.telefono = $("#telefono").val();
					post.$sendPost.setNpost($obj);
					$data = JSON.parse(post.$data);
					if($data == true){
						alert("Datos Personales Guardados");
						$("#btnFormPersona").removeClass("btn-success").addClass("btn-info");
						$("#btnFormPersona").val("Actualizar Datos");
						$("#cedula").prop('disabled', true);
					}else{
						alert("error al momento de guardar informacion");
					}
				}

			}else{
				if(confirm("¿Desea Actualizar Datos Personales?")){
					post.$url = "<?=base_url('')?>Api/editarDatosPersonales";
					$obj = new Object();
					$obj.cedula = $("#cedula").val();
					$obj.primerNombre = $("#primerNombre").val();
					$obj.segundoNombre = $("#segundoNombre").val();
					$obj.primerApellido = $("#primerApellido").val();
					$obj.segundoApellido = $("#segundoApellido").val();
					$obj.telefono = $("#telefono").val();
					post.$sendPost.setNpost($obj);
					$data = JSON.parse(post.$data);

					if($data == true){
						alert("Datos Personales Actualizados");
					}else{
						alert("error al momento de Actualizar informacion");
					}

				}
			}

		});

		function imprimir(id) {
			post.$url = "<?=base_url('')?>Api/verTicketsClientes";
			post.$sendPost.setNpost();
			$data = JSON.parse(post.$data);
			var string = '';
			var string1 = '';
			var string2 = '';
			for(var i in $data){
				if(id == $data[i].idVueloXPersona){
					string += '<tr>';
					string += '<td>'+$data[i].idVueloXPersona+'</td>';
					string += '<td>'+$data[i].cedula+'</td>';
					string += '<td style="position: relative; left: 10px;">'+$data[i].primerNombre+'</td>';
					string += '<td style="position: relative; left: 10px;">'+$data[i].segundoNombre+'</td>';
					string += '<td style="position: relative; left: 10px;">'+$data[i].primerApellido+'</td>';
					string += '<td style="position: relative; left: 10px;">'+$data[i].segundoApellido+'</td>';
					string += '<td style="">'+$data[i].telefono+'</td>';
					string += '</tr>';
					string1 += '<tr>';
					string1 += '<td>'+$data[i].idVueloXPersona+'</td>';
					string1 += '<td>'+$data[i].fechavuelo+'</td>';
					string1 += '<td>'+$data[i].origen+'</td>';
					string1 += '<td>'+$data[i].destino+'</td>';
					string1 += '<td>'+$data[i].hsalidad+'</td>';
					string1 += '<td>'+$data[i].valorVuelo+'</td>';
					string1 += '<td>'+$data[i].valorTotal+'</td>';
					string1 += '</tr>';

					string2 += '<tr>';
					string2 += '<td>'+$data[i].idVueloXPersona+'</td>';
					string2 += '<td>'+$data[i].numeroAsiento+'</td>';
					string2 += '<td>'+$data[i].clases+'</td>';
					string2 += '<td>'+$data[i].nombreAvion+'</td>';
					string2 += '<td>'+$data[i].equipajes+'</td>';

					var estado = "";
					if($data[i].estado == 0){
						estado = "inactivo";
					}else if($data[i].estado == 1){
						estado = "esperando pago";
					}else {
						estado = "pagado";
					}
					string2 += '<td>'+estado+'</td>';
					string2 += '</tr>';

					var f = new Date();
					$fecha = f.getFullYear() + "-" +  (f.getMonth() +1) + "-"+ f.getDate();
					$("#fechaA").html($fecha);
					$("#fechaM").html($data[i].fechavuelo);
					$("#cedu").html($data[i].cedula);
					$("#val").html($data[i].valorTotal);
				}
			}
			$("#tabla1").html(string);
			$("#tabla2").html(string1);
			$("#tabla3").html(string2);

			printDiv("impresion");
		}



		function printDiv(nombreDiv) {
			var contenido= document.getElementById(nombreDiv).innerHTML;
			var contenidoOriginal= document.body.innerHTML;
			document.body.innerHTML = contenido;
			window.print();
			document.body.innerHTML = contenidoOriginal;
		}



	</script>

</body>

</html>

<script>



</script>
