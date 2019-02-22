<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Persona', 'P');
	}

	public function index($id = 0)
	{
		$patch = "p/";
		$objeto = "";
		switch ($id) {
			case 1 :
				$vista = isset($this->session->idUsuario) ? "index" : "login";
				break;
			case 2 :
				$vista = isset($this->session->idUsuario) ? "index" : "registrar"; break;
			case 3:
				if(isset($this->session->idUsuario)){
					if(!$this->P->personaExit()){
						$vista = "paso";
						break;
					}
				}
			case 4:
				if(isset($this->session->idUsuario)){
					if(isset($_GET["id"])){
						$idVuelo = $_GET["id"];
						$data["vuelo"] = $this->P->BuscarVuelo($idVuelo);
						$data["precios"] = $this->P->precios();
						$vista = "paso1"; break;
					}
				}
				$vista = "index"; break;
			case 8:
				if(isset($this->session->idUsuario) && ($this->session->rol > 1)){
					$vista = 'panel/admin';
					break;
				}else if(isset($this->session->idUsuario) && ($this->session->rol < 2)){
					$vista = 'panel/usuario';
					break;
				}else{
					$vista = 'index';
					break;
				}
			case 10:
				$this->cerrarSession();
				break;
			default :
				$vista = "index"; break;
		}
		$data["url"] = site_url()."api/";
		$vista1 = $vista == 'index' ? 'obtenerDestinos' : $vista;
		$idUsuario = isset($this->session->idUsuario) ?  $this->session->idUsuario : null;
		$data["loader"] = "<script>var post = new Post('".$data["url"]."','".$vista1."',$id);</script>";
		$data["loader"] .= "<script>localStorage.idUsuario = '".$idUsuario."'</script>";
		$data["scripts"] = '<script src="'.site_url().'/js/myscripts.js" ></script>';
		//echo $data["scripts"];
		$this->load->view($patch.$vista,$data);
	}

	public function login($id = 0){
		$this->load->model('Persona', 'P');
		if(!isset($this->session->idUsuario)){
			//login
			if(!empty($_POST)){
				echo json_encode($this->P->usuario($id,$_POST));
			}
		}
		else{
			echo json_encode(array("estado"=>"online"));
		}
	}

	public function registrar($id = 0){
		switch ($id){
			case 2:{
				if(!isset($this->session->idUsuario)){
					if(!empty($_POST)){
						unset($_POST["password2"]);
						if(!$this->P->buscarExiste("usuario","usuario",$_POST["usuario"])){
							if(!$this->P->buscarExiste("usuario","email",$_POST["email"])){
								echo json_encode($this->P->usuario($id,$_POST));
							}
						}
					}
				}
				break;
			}
			case 3:{
				if(isset($this->session->idUsuario)){
					if(isset($_POST)){
						$_POST["idUsuario"] = $this->session->idUsuario;
						echo json_encode($this->P->insertar("personas",$_POST));
						break;
					}
				}
			}
			case 4:{
				if(isset($this->session->idUsuario)){
					if(isset($_POST)){
						$this->P->obtenerIdPersona();
						$_POST["idPersona"] = $this->session->idPersona;
						echo json_encode($this->P->insertar("vueloXpersona",$_POST));
						break;
					}
				}
			}
		}
	}

	public function obtenerDestinos($id = 1){
		switch ($id){
			case 0 :  case 1: echo json_encode($this->P->obtenerDestinos()); break;
			case 2:{
				echo json_encode($this->P->obtenerVuelos($_POST)); break;
			}
			case 3:{
					echo json_encode($_GET);
				break;
			}
		}
	}

	public  function cerrarSession(){
		$_SESSION = array();

		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}
		$this->session->sess_destroy();
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
		echo '<script>localStorage.removeItem("idUsuario");</script>';
		redirect("0");
	}


	public function verTicketsClientes(){
		echo json_encode($this->P->verTicketsClientes());
	}

	public function eliminarTicketCliente(){
		if(isset($this->session->idUsuario)){
			echo json_encode($this->P->eliminarTickeVuelo($this->input->post("idVueloXPersona")));
		}
		else{
			echo json_encode(false);
		}
	}

	public function verAviones(){
		echo json_encode($this->P->verAviones());
	}

	public function guardarAvion(){
		if(isset($this->session->idUsuario) && $this->session->rol > 1) {
			echo json_encode($this->P->insertar("avion",$_POST));
		}
		else{
			echo json_encode(false);
		}
	}

	public function eliminarAvion(){
		if(isset($this->session->idUsuario) && $this->session->rol > 1){
			echo json_encode($this->P->eliminarAvion($this->input->post("idAvion")));
		}
		else{
			echo json_encode(false);
		}
	}

	public function verPrecios(){
		echo json_encode($this->P->precios());
	}

	public function actualizarPrecio(){
		if(isset($this->session->idUsuario) && $this->session->rol > 1){
			echo json_encode($this->P->actualizarPrecio($_POST));
		}
		else{
			echo json_encode(false);
		}
	}

	public function verVuelos(){
		echo json_encode($this->P->verVuelos());
	}

	public function guardarVuelos(){
		if(isset($this->session->idUsuario) && $this->session->rol > 1){
			echo json_encode($this->P->insertar("vuelos",$_POST));
		}
		else{
			echo json_encode(false);
		}
	}

	public function verPiloto(){
		echo json_encode($this->P->verPiloto());
	}

	public function eliminarVuelo(){
		if(isset($this->session->idUsuario) && $this->session->rol > 1){
			echo json_encode($this->P->eliminarVuelo($this->input->post("idVuelo")));
		}
		else{
			echo json_encode(false);
		}
	}

	public function guardarPiloto(){
		echo json_encode($this->P->insertar("piloto",$_POST));
	}

	public function buscarVuelo(){
		echo json_encode($this->P->buscarVuelo($this->input->post("idVuelo")));
	}

	public function eliminarPiloto(){
		if(isset($this->session->idUsuario)){
			echo json_encode($this->P->eliminarPiloto($this->input->post("idPiloto")));
		}
		else{
			echo json_encode(false);
		}
	}

	public function editarVuelo(){
		if(isset($this->session->idUsuario) && $this->session->rol > 1){
			echo json_encode($this->P->editarVuelo($_POST));
		}
		else{
			echo json_encode(false);
		}
	}


	public function buscarDatosPersona(){
		if(isset($this->session->idUsuario)){
			$this->P->obtenerIdPersona();
			if(isset($this->session->idPersona)){
				echo json_encode($this->P->buscarDatosPersona());
			}
			else{
				echo json_encode(false);;
			}
		}
	}

	public function editarDatosPersonales(){
		if(isset($this->session->idUsuario)){
			if(isset($this->session->idPersona)){
				echo json_encode($this->P->editarDatosPersonales($_POST));
			}
		}
	}



}
