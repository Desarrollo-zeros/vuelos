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
						<a href="#gestionAvion" id="verAvion" class="waves-effect"><i class="fa fa-amazon fa-fw" aria-hidden="true"></i>Gestion Aviones</a>
					</li>

					<li>
						<a href="#gestionPiloto" id="verPiloto" class="waves-effect"><i class="fa fa-amazon fa-fw" aria-hidden="true"></i>Gestion Piloto</a>
					</li>


					<li>
						<a href="#gestionPrecios" id="verPrecios" class="waves-effect"><i class="fa fa-btc fa-fw" aria-hidden="true"></i>Gestion Precios</a>
					</li>

					<li>
						<a href="#gestionVuelos" id="verVuelos" class="waves-effect"><i class="fa fa-save fa-fw" aria-hidden="true"></i>Gestion Vuelos</a>
					</li>

					<li>
						<a href="#verGrafica" id="verReporte" class="waves-effect"><i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i>Ver Reporte Grafico Por Mes</a>
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


				<div class="row gestion" id="tickest" style="display: none">
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




				<div class="row gestion" id="gestionAvion" style="display: none">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="white-box">
							<h3 class="box-title">Gestion Avion</h3>
							<div class="table-responsive">
								<table class="table">
									<thead>
									<tr>
										<th>#</th>
										<th>Nombre Avion</th>
										<th>Numero Asiento particular</th>
										<th>Numero Asiento Gerencial</th>
										<th>Accion</th>
									</tr>
									</thead>
									<tbody id="tablaVerAviones">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>



				<div class="row gestion" id="gestionVuelos" style="display: none">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="white-box">
							<h3 class="box-title">Gestion Vuelos</h3>
							<div class="table-responsive">
								<table class="table">
									<thead>
									<tr>
										<th>#</th>
										<th>Fecha Vuelo</th>
										<th>Vuelos Origen</th>
										<th>Vuelo Destino</th>
										<th>nombre de Avion</th>
										<th>Valor vuelo</th>
										<th>Tiempo de vuelo</th>
										<th>Piloto</th>
										<th>Accion</th>
									</tr>
									</thead>
									<tbody id="tablaVuelos">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>



				<div class="col-md-12 col-xs-12 gestion" style="display: none" id="agregarAvion">
					<div class="white-box">
						<form class="form-horizontal form-material" id="formAvion" name="formAvion">
							<div class="form-group">
								<label class="col-md-12">Nombre Avion</label>
								<div class="col-md-12">
									<input required="required"  type="text" id="nombreAvion" name="nombreAvion" placeholder="Nombre de Avion" class="form-control form-control-line"> </div>
							</div>
							<div class="form-group">
								<label for="example-email" class="col-md-12">Numero De Asientos Particular</label>
								<div class="col-md-12">
									<input required="required"  type="number" placeholder="Numero Asiento Particular" class="form-control form-control-line" name="nAsientoParticular" id="nAsientoParticular"> </div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Numero De Asientos Gerencial</label>
								<div class="col-md-12">
									<input required="required"  type="number" placeholder="Numero Asiento Gerencial" class="form-control form-control-line" name="nAsientosEjecutivo" id="nAsientosEjecutivo"> </div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<input required="required"  type="submit" id="btnFormAvion" name="btnFormAvion" class="btn btn-success" value="Guardar Avion">
								</div>
							</div>
						</form>
					</div>
				</div>



				<div class="col-md-12 col-xs-12 gestion" style="display: none" id="gestionPrecios">
					<div class="white-box">
						<form class="form-horizontal form-material" id="formPrecios" name="formPrecios">
							<div class="form-group">
								<label class="col-md-12">Precio Primera Clase</label>
								<div class="col-md-12">
									<input required="required"  type="number" id="primerClase" name="primerClase" placeholder="Precio Primera Clase" class="form-control form-control-line"> </div>
							</div>
							<div class="form-group">
								<label for="example-email" class="col-md-12">Precio Clase Particular</label>
								<div class="col-md-12">
									<input required="required"  type="number" placeholder="Numero Asiento Particular" class="form-control form-control-line" name="segundaClase" id="segundaClase"> </div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Precio X kilo en Equipaje</label>
								<div class="col-md-12">
									<input required="required"  type="number" placeholder="Precio X kilo en Equipaje" class="form-control form-control-line" name="equipajeU" id="equipajeU"> </div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<input required="required"  type="submit" id="btnFormAvion" name="btnFormPrecio" class="btn btn-success" value="Guardar Precios">
								</div>
							</div>
						</form>
					</div>
				</div>



				<div class="col-md-6 col-xs-6 gestionPiloto gestion" style="display: none">
					<div class="white-box">
						<form class="form-horizontal form-material" id="formPiloto" name="formPiloto">
							<div class="form-group">
								<label class="col-md-12">Nombre Piloto</label>
								<div class="col-md-12">
									<input required="required"  type="text" id="nombrePiloto" name="nombrePiloto" placeholder="Nombre Piloto" class="form-control form-control-line">
								</div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Estado</label>
								<div class="col-md-12">
									<select id="estadoPiloto" id="estadoPiloto" class="form-control form-control-line">
										<option value="1">Activo</option>
										<option value="0">Inactivo</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input required="required"  type="submit" class="btn btn-success" value="Guardar Piloto">
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-6 col-xs-6 gestionPiloto gestion" style="display: none">
					<div class="white-box">
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>#</th>
									<th>Nombre</th>
									<th>estado</th>
									<th>Eliminar</th>
								</tr>
								</thead>
								<tbody id="tablePiloto"></tbody>
							</table>
						</div>
					</div>
				</div>



				<div class="col-md-12 col-xs-12 gestion" id="verGrafica" style="display: none">
					<div class="white-box">
						<div class="table-responsive">
							<div class="ct-chart"></div>
						</div>
					</div>
				</div>

				<div class="col-md-12 col-xs-12 gestion" style="display: none" id="agregarVuelos">
					<div class="white-box">
						<form class="form-horizontal form-material" id="formVuelos" name="formVuelos">
							<div class="form-group">
								<label class="col-md-12">Fecha Vuelo</label>
								<div class="col-md-12">
									<input type="hidden" id="idVuelo" name="idVuelo">
									<input required="required"  type="date" id="fechaVuelo" name="fechaVuelo" placeholder="Fecha Vuelo" class="form-control form-control-line"> </div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Vuelo orgien</label>
								<div class="col-md-12">
								<select required="required"   id="vueloOrigen" class="form-control form-control-line">
								</select>
								</div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Vuelo Destino</label>
								<div class="col-md-12">
									<select required="required"   id="vueloDestino" class="form-control form-control-line">
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Hora De salidad</label>
								<div class="col-md-12">
									<input required="required"  type="time" placeholder="Hora De salidad" class="form-control form-control-line"  name="hSalidad" id="hSalidad"> </div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Valor Vuelo</label>
								<div class="col-md-12">
									<input required="required"  type="number" placeholder="Valor Vuelo" class="form-control form-control-line" name="valorVuelo" id="valorVuelo"> </div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Maximo Equipaje</label>
								<div class="col-md-12">
									<input required="required"   type="number" placeholder="Maximo Equipaje" class="form-control form-control-line" name="maxEquipaje" id="maxEquipaje"> </div>
							</div>


							<div class="form-group">
								<label for="example-email" class="col-md-12">Tiempo Estimado De viaje</label>
								<div class="col-md-12">
									<input required="required"  type="number" placeholder="Tiempo Estimado De viaje" class="form-control form-control-line" name="TiempoEstimado" id="TiempoEstimado"> </div>
							</div>


							<div class="form-group">
								<label for="example-email" class="col-md-12">Avion</label>
								<div class="col-md-12">
									<select required="required"   id="idAvion" class="form-control form-control-line">
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="example-email" class="col-md-12">Conductor</label>
								<div class="col-md-12">
									<select required="required"  id="idconductor" class="form-control form-control-line">
									</select>
								</div>
							</div>


							<div class="form-group">
								<div class="col-sm-12">
									<input required="required"  type="submit" id="btnFormVuelos"  name="btnFormVuelos" class="btn btn-success" value="Guardar Vuelos">
								</div>
							</div>
						</form>
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
			$(".gestion").css("display","none");
			$("#tickest").css("display","block");
			cargarVerTicker();
		});

		$("#verPiloto").click(function () {
			$(".gestion").css("display","none");
			$(".gestionPiloto").css("display","block");
			cargarVerPiloto();
		});

		$("#verReporte").click(function () {
			$(".gestion").css("display","none");
			$("#verGrafica").css("display","block");



			post.$url = "<?=base_url('')?>Api/verTicketsClientes";
			post.$sendPost.setNpost();
			$data = JSON.parse(post.$data);
			console.log($data);


			var fec = Object([]);

			fec.en = 0,fec.fe=0,fec.ma=0,fec.ab=0,fec.my = 0,fec.jn=0,fec.ju=0,fec.ag=0,fec.se=0,fec.oc=0,fec.no=0,fec.di=0;

			for(var i in $data){
				var f = $data[i].fechavuelo.split("-");
				console.log(f);
				switch (f[1]) {
					case "01" : fec.en += 1;break;
					case "02" : fec.fe += 1;break;
					case "03" : fec.ma += 1;break;
					case "04" : fec.ab += 1;break;
					case "05" : fec.my += 1;break;
					case "06" : fec.jn += 1;break;
					case "07" : fec.ju += 1;break;
					case "08" : fec.ag += 1;break;
					case "09" : fec.se += 1;break;
					case "10" : fec.oc += 1;break;
					case "11" : fec.no += 1;break;
					case "12" : fec.di += 1;break;
				}
			}
			var fec = [fec.en,fec.fe,fec.ma,fec.ab,fec.my,fec.jn,fec.ju,fec.ag,fec.se,fec.oc,fec.no,fec.di];

			console.log(JSON.stringify(fec));
			new Chartist.Bar('.ct-chart', {
				labels: ['Enero', 'Febrero', 'Marzo', 'Abril','Mayo','Junio', 'Julio', 'Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
				series: fec},
				{
					distributeSeries: true,
					axisY: {
						onlyInteger: true,
					},
				}
			);


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
				string += '<td><span><a href="#" onclick="borrarTicketPersona('+$data[i].idVueloXPersona+')" class="text-danger fa fa-remove fa-fw">Eliminar</a></span></td>';
				string += '</tr>';
			}
			$("#tablaVerTicket").html(string)

		}


		function cargarVerPiloto() {
			post.$url = "<?=base_url('')?>Api/verPiloto";
			post.$sendPost.setNpost();
			$data = JSON.parse(post.$data);
			var string = '';
			for(var i in $data){
				string += '<tr>';
				string += '<td>'+$data[i].idPiloto+'</td>';
				string += '<td>'+$data[i].nombre+'</td>';
				if($data[i].estado == 1){
					string += '<td><p style="color:green">Activo</p></td>';
				}else{
					string += '<td><p style="color:green">Inactivo</p></td>';
				}
				string += '<td><span><a href="#" onclick="borrarPiloto('+$data[i].idPiloto+')" class="text-danger fa fa-remove fa-fw">Eliminar</a></span></td>';
				string += '</tr>';
			}
			$("#tablePiloto").html(string)

		}

		function borrarPiloto(id) {
			if(confirm("desea eliminar este Piloto")) {
				post.$url = "<?=base_url('')?>Api/eliminarPiloto";
				$obj = new Object();
				$obj.idPiloto = id;
				post.$sendPost.setNpost($obj);
				if (JSON.parse(post.$data) == true) {
					cargarVerPiloto();
					alert("Piloto Eliminado");
				} else {
					alert("ocurrio un erro al momento de eliminar");
				}
			}
		}

		function borrarTicketPersona(id) {
			if(confirm("desea eliminar este Tickets")){
				post.$url = "<?=base_url('')?>Api/eliminarTicketCliente";
				$obj = new Object();
				$obj.idVuelo = id;
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


		$("#verAvion").click(function () {
			$(".gestion").css("display","none");
			$("#gestionAvion").css("display","block");
		});

		function verAvion() {
			post.$url = "<?=base_url('')?>Api/verAviones";
			post.$sendPost.setNpost();
			$data = JSON.parse(post.$data);
			var string = '';
			for(var i in $data){
				string += '<tr>';
				string += '<td>'+$data[i].idAvion+'</td>';
				string += '<td>'+$data[i].nombreAvion+'</td>';
				string += '<td>'+$data[i].nAsientoParticular+'</td>';
				string += '<td>'+$data[i].nAsientosEjecutivo+'</td>';
				string += '<td><a href="#" onclick="agregarAvion()" class="text-success fa fa-save fa-fw"> Agregar </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				string += '<a href="#" onclick="borrarAvion('+$data[i].idAvion+')" class="text-danger fa fa-remove fa-fw"> Eliminar </a></td>';
				string += '</tr>';
			}
			$("#tablaVerAviones").html(string);
		}

		function  agregarAvion(){
			$(".gestion").css("display","none");
			$("#agregarAvion").css("display","block");
		}

		$("#formPiloto").on("submit",function (form) {
			post.$url = "<?=base_url('')?>Api/guardarPiloto";
			form.preventDefault();
			if(confirm("deseas agregar este Piloto?")){
				$obj = new Object();
				$obj.nombre = $("#nombrePiloto").val();
				$obj.estado = $("#estadoPiloto").val();
				post.$sendPost.setNpost($obj);
				$data = JSON.parse(post.$data);
				if($data == true) {
					alert("se agrego correctamente un avion");
					cargarVerPiloto();
				}
			}
		});

		$("#formAvion").on("submit",function (form) {
			post.$url = "<?=base_url('')?>Api/guardarAvion";
			form.preventDefault();
			if(confirm("deseas agregar este nuvo avion?")){
				$obj = new Object();
				$obj.nombreAvion = $("#nombreAvion").val();
				$obj.nAsientoParticular = $("#nAsientoParticular").val();
				$obj.nAsientosEjecutivo = $("#nAsientosEjecutivo").val();
				post.$sendPost.setNpost($obj);
				$data = JSON.parse(post.$data);
				if($data == true){
					alert("se agrego correctamente un avion");
					verAvion();
				}
				else{
					alert("ocurrio un erro al momento de registrar una vion");
				}
			}
		});

		function borrarAvion(id) {
			if(confirm("desea eliminar este Avion")){
				post.$url = "<?=base_url('')?>Api/eliminarAvion";
				$obj = new Object();
				$obj.idAvion = id ;
				post.$sendPost.setNpost($obj);
				if(JSON.parse(post.$data) == true){
					verAvion();
					alert("Avion Eliminado");
				}
				else{
					alert("ocurrio un erro al momento de eliminar");
				}
			}
		}


		$("#verPrecios").click(function () {
			$(".gestion").css("display","none");
			$("#gestionPrecios").css("display","block");


			post.$url = "<?=base_url('')?>Api/verPrecios";
			post.$sendPost.setNpost();
			$data = JSON.parse(post.$data);
			$("#primerClase").val($data.primerClase);
			$("#segundaClase").val($data.segundaClase);
			$("#equipajeU").val($data.equipajeU);
		});


		$("#formPrecios").on("submit",function (form) {
			form.preventDefault();
			$obj = new Object();
			$obj.primerClase = $("#primerClase").val();
			$obj.segundaClase = $("#segundaClase").val();
			$obj.equipajeU = $("#equipajeU").val();
			post.$url = "<?=base_url('')?>Api/actualizarPrecio";
			post.$sendPost.setNpost($obj);
			$data = JSON.parse(post.$data);
			if($data == true){
				alert("Precio Actualizado");
			}
			else{
				alert("error al actualizar precio");
			}
		})


		$("#verVuelos").click(function () {
			$(".gestion").css("display","none");
			$("#gestionVuelos").css("display","block");
			verVuelos();
		});

		function verVuelos() {
			post.$url = "<?=base_url('')?>Api/verVuelos";
			post.$sendPost.setNpost();
			$data = JSON.parse(post.$data);
			var string = '';
			for(var i in $data){
				string += '<tr>';
				string += '<td>'+$data[i].idVuelo+'</td>';
				string += '<td>'+$data[i].fechaVuelo+'</td>';
				string += '<td>'+$data[i].vueloOrigen+'</td>';
				string += '<td>'+$data[i].vueloDestino+'</td>';
				string += '<td>'+$data[i].nombreAvion+'</td>';
				string += '<td>'+$data[i].valorVuelo+'</td>';
				string += '<td>'+$data[i].TiempoEstimado+' Hora</td>';
				string += '<td>'+$data[i].nombre+'</td>';
				string += '<td style="position: relative; right: 40px!important;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="agregarVuelo()" class="text-success fa fa-save fa-fw"> Agregar </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				string += '<a href="#" onclick="editarVuelo('+$data[i].idVuelo+')" class="text-info fa fa-edit fa-fw"> Editar </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				string += '<a href="#" onclick="borrarVuelos('+$data[i].idVuelo+')" class="text-danger fa fa-remove fa-fw"> Eliminar </a></td>';

				string += '</tr>';
			}
			$("#tablaVuelos").html(string);
		}


		function  agregarVuelo() {
			llenarAvion();
			$("#btnFormVuelos").removeClass("btn-info").addClass("btn-success");
			$("#btnFormVuelos").val("Agregar Vuelos");
			$(".gestion").css("display","none");
			$("#agregarVuelos").css("display", "block");
			cargarVuelo();
		}

		function cargarVuelo() {
			post.$url = "<?=base_url('')?>Api/obtenerDestinos/1";
			post.$sendPost.setNpost();
			$data = (JSON.parse(post.$data));
			var string = '';

			for(var i in $data){
				string += '<option value="'+$data[i].idMunicipio+'">'+$data[i].nombreMunicipio+'</option>';
			}
			$("#vueloOrigen").html(string);
			post.$url = "<?=base_url('')?>Api/verPiloto";
			post.$sendPost.setNpost();
			$data = (JSON.parse(post.$data));
			var string = '';

			for(var i in $data){
				string += '<option value="'+$data[i].idPiloto+'">'+$data[i].nombre+'</option>';
			}
			$("#idconductor").html(string);
		}


		$("#vueloOrigen").on("change",function () {
			post.$url = "<?=base_url('')?>api/obtenerDestinos/1";
			post.$sendPost.setNpost();
			$data = (JSON.parse(post.$data));
			var string = '';
			for(var i in $data){
				if($data[i].idMunicipio != $("#vueloOrigen").val())
					string += '<option value="'
						+$data[i].idMunicipio+'">'+$data[i].nombreMunicipio+'</option>';
				console.log(string);
			}
			$("#vueloDestino").html(string);
		});

		function llenarAvion() {
			post.$url = "<?=base_url('')?>Api/verAviones";
			post.$sendPost.setNpost();
			$data = (JSON.parse(post.$data));
			var string = '';
			for(var i in $data){
				string += '<option value="'+$data[i].idAvion+'">'+$data[i].nombreAvion+'</option>';
			}
			$("#idAvion").html(string);
		}


		$("#formVuelos").on("submit",function (form) {
			form.preventDefault();

			if($("#btnFormVuelos").val() == 'Editar Vuelos'){

				if(confirm("¿Desea Guardar Este Vuelo?")){
					$obj = new Object();
					$obj.idVuelo = $("#idVuelo").val();
					$obj.fechaVuelo = $("#fechaVuelo").val();
					$obj.vueloOrigen = $("#vueloOrigen").val();
					$obj.vueloDestino = $("#vueloDestino").val();
					$obj.hSalidad = $("#hSalidad").val();
					$obj.valorVuelo = $("#valorVuelo").val();
					$obj.maxEquipaje = $("#maxEquipaje").val();
					$obj.TiempoEstimado = $("#TiempoEstimado").val();
					$obj.idAvion = $("#idAvion").val();
					$obj.idPiloto = $("#idconductor").val();
					post.$url = "<?=base_url('')?>Api/editarVuelo";
					post.$sendPost.setNpost($obj);
					if(JSON.parse(post.$data) == true){
						alert("Vuelos Actualizado");
					}else{
						alert("Error al Editar vuelo");
					}
				}
			}else{
				if(confirm("¿Desea Guardar Este Vuelo?")){
					$obj = new Object();
					$obj.fechaVuelo = $("#fechaVuelo").val();
					$obj.vueloOrigen = $("#vueloOrigen").val();
					$obj.vueloDestino = $("#vueloDestino").val();
					$obj.hSalidad = $("#hSalidad").val();
					$obj.valorVuelo = $("#valorVuelo").val();
					$obj.maxEquipaje = $("#maxEquipaje").val();
					$obj.TiempoEstimado = $("#TiempoEstimado").val();
					$obj.idAvion = $("#idAvion").val();
					$obj.idPiloto = $("#idconductor").val();
					post.$url = "<?=base_url('')?>Api/guardarVuelos";
					post.$sendPost.setNpost($obj);
					if(JSON.parse(post.$data) == true){
						alert("Vuelos Guardado");
					}else{
						alert("Error al Guardar vuelo");
					}
				}
			}
		});

		function borrarVuelos(id) {
			if(confirm("desea eliminar este Vuelo")){
				post.$url = "<?=base_url('')?>Api/eliminarVuelo";
				$obj = new Object();
				$obj.idVuelo = id ;
				post.$sendPost.setNpost($obj);
				if(JSON.parse(post.$data) == true){
					verVuelos()
					alert("Vuelo Eliminado");
				}
				else{
					alert("ocurrio un erro al momento de eliminar");
				}
			}
		}


		function editarVuelo(id) {
			$("#btnFormVuelos").val("Editar Vuelos");
			$("#btnFormVuelos").removeClass("btn-success").addClass("btn-info");
			cargarVuelo();
			$(".gestion").css("display","none");
			$("#agregarVuelos").css("display","block");
			post.$url = "<?=base_url('')?>Api/BuscarVuelo";
			post.$sendPost.setNpost();
			$obj = new Object();
			$obj.idVuelo = id;
			post.$sendPost.setNpost($obj);
			$data = JSON.parse(post.$data);
			$("#idVuelo").val($data.idVuelo);
			$("#fechaVuelo").val($data.fechaVuelo);
			$("#vueloOrigen").val($data.vueloOrigen);
			$("#vueloDestino").val($data.vueloDestino );
			$("#hSalidad").val($data.hSalidad);
			$("#valorVuelo").val($data.valorVuelo);
			$("#maxEquipaje").val($data.maxEquipaje );
			$("#TiempoEstimado").val($data.TiempoEstimado);
			$("#idAvion").val($data.idAvion );
			llenarAvion();
		}

	</script>

</body>

</html>

<script>



</script>
