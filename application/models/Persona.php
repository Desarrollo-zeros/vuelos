<?php
/**
 * Created by PhpStorm.
 * User: zeros
 * Date: 4/06/2018
 * Time: 10:29 PM
 */

class Persona extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function usuario($id = 0,$data = array()){
		switch ($id){
			case 2:
				return $this->insertar("usuario",$data);
				break;
			case 1:
				$datas = $this->consultarUsuario("usuario",$data)->num_rows();
				if($datas > 0){
					$datas = $this->consultarUsuario("usuario",$data)->row();
					$this->session->idUsuario = $datas->idUsuario;
					$this->session->rol = $datas->rol;
					return isset($datas->idUsuario) ? array("estado"=>true) : array("estado"=>false);
				}
				return array("estado"=>false);
				break;
			default :
				break;
		}
	}

	public function insertar($tabla,$data = array()){
		return $this->db->insert($tabla,$data);
	}

	public function consultarUsuario($tabla,$data = array()){
		return $this->db->query("select idUsuario,rol,usuario FROM $tabla where usuario = '{$data["usuario"]}' and password = '{$data["password"]}' ");
	}


	public function buscarExiste($tabla,$columna,$usuario){
		return $this->db->query("select $columna from $tabla where $columna = '$usuario'")->num_rows() > 0 ? true : false;
	}

	public function obtenerDestinos(){
		return $this->db->query("select *from departamento d inner join municipios m on d.idDepartamento = m.idDepartamento")->result();
	}

	public function obtenerVuelos($data = array()){
		return $this->db->query("select  v.idVuelo,v.fechaVuelo,v.valorVuelo,v.hsalidad,v.maxEquipaje,
 								 v.TiempoEstimado, m.nombreMunicipio as  vueloDestino , mu.nombreMunicipio as vueloOrigen
 								 from vuelos v 
								 inner join municipios m on v.vueloDestino = m.idMunicipio
								 inner join municipios mu on mu.idMunicipio = v.vueloOrigen
								 where fechaVuelo = '{$data["fechaVuelo"]}' and vueloOrigen = {$data["vueloOrigen"]} and vueloDestino = {$data["vueloDestino"]}  ")->result();
	}

	public function BuscarVuelo($idVuelo){
		return $this->db->query("select  v.idVuelo,v.fechaVuelo,v.valorVuelo,v.hsalidad,v.maxEquipaje,
 								 v.TiempoEstimado, m.nombreMunicipio as  vueloDestino , mu.nombreMunicipio as vueloOrigen, a.nombreAvion
 								 from vuelos v 
								 inner join municipios m on v.vueloDestino = m.idMunicipio
								 inner join municipios mu on mu.idMunicipio = v.vueloOrigen
								 inner join avion a on v.idAvion = a.idAvion
								 where idVuelo = $idVuelo ")->row();
	}

	public function verVuelos(){
		return $this->db->query("select  v.idVuelo,v.fechaVuelo,v.valorVuelo,v.hsalidad,v.maxEquipaje,
 								 v.TiempoEstimado, m.nombreMunicipio as  vueloDestino , mu.nombreMunicipio as vueloOrigen, a.nombreAvion,p.nombre
 								 from vuelos v 
								 inner join municipios m on v.vueloDestino = m.idMunicipio
								 inner join municipios mu on mu.idMunicipio = v.vueloOrigen
								 inner join avion a on v.idAvion = a.idAvion
								 inner join piloto p on v.idPiloto = p.idPiloto where v.estado = 1")->result();
	}


	public function precios(){
		return $this->db->query("select *from precios")->row();
	}

	public function personaExit(){
		return $this->db->query("select idPersona from personas where idUsuario = {$this->session->idUsuario} ")->num_rows() > 0 ? true : false;
	}

	public function obtenerIdPersona(){
		$this->session->idPersona = $this->db->query("select idPersona from personas where idUsuario = {$this->session->idUsuario}")->row("idPersona");
	}
	public function verTicketsClientes(){
		if($this->session->rol > 1){
			return $this->db->query("select vx.estado, vx.idVueloXPersona, p.cedula, p.primerNombre, p.primerApellido, 
									o.nombreMunicipio as origen, d.nombreMunicipio as destino, v.fechavuelo, v.valorVuelo, vx.valorTotal
								from personas p
								inner join vueloXpersona vx on vx.idPersona = p.idPersona
								inner join vuelos v on v.idVuelo = vx.idVuelo
								inner join avion a on a.idAvion = v.idAvion
								inner join municipios o on o.idMunicipio = v.vueloOrigen
								inner join municipios d on d.idMunicipio = v.vueloDestino where vx.estado = 1 or vx.estado = 2")->result();
		}
		 return $this->db->query("select vx.estado, vx.idVueloXPersona, p.cedula, p.primerNombre, p.primerApellido,p.segundoNombre, p.segundoApellido, p.telefono,
 								o.nombreMunicipio as origen, d.nombreMunicipio as destino, v.fechavuelo, v.valorVuelo,vx.valorTotal, v.hsalidad,
 								vx.numeroAsiento, vx.clases, vx.equipajes, a.nombreAvion, vx.estado
								from personas p
								inner join vueloXpersona vx on vx.idPersona = p.idPersona
								inner join vuelos v on v.idVuelo = vx.idVuelo
								inner join avion a on a.idAvion = v.idAvion
								inner join municipios o on o.idMunicipio = v.vueloOrigen
								inner join municipios d on d.idMunicipio = v.vueloDestino where vx.estado = 1 or vx.estado = 2 and v.estado = 1 and p.idUsuario  = {$this->session->idUsuario} ")->result();
	}

	public function eliminarTickeVuelo($id)
    {
        $this->db->where('idVueloXPersona', $id);
        return $this->db->update('vueloXpersona', array("estado" => 0));
    }
    public function estadoTickeVuelo($id){
		$this->db->where('idVueloXPersona', $id);
		return $this->db->update('vueloXpersona', array("estado" => 2));
	}

	public function verAviones(){
		return $this->db->query("select *from avion where estado = 1")->result();
	}

	public function eliminarAvion($id){
		$this->db->where('idAvion', $id);
		return $this->db->update('avion', array("estado"=>0));
		 //$this->db->update("avion",array("idAvion"=>$id));
	}

	public function actualizarPrecio($data = array()){
		return $this->db->update('precios',$data);
	}

	public function eliminarVuelo($id){
		$this->db->where('idVuelo', $id);
		return $this->db->update('vuelos', array("estado"=>0));
	}

	public function editarVuelo($data = array()){
		$this->db->where('idVuelo', $data["idVuelo"]);
		return $this->db->update('vuelos', $data);
	}

	public function buscarDatosPersona(){
		return $this->db->query("select *from personas where idPersona = {$this->session->idPersona} ")->row();
	}
	public function editarDatosPersonales($data =array()){
		$this->db->where('idPersona',$this->session->idPersona);
		return $this->db->update('personas', $data);
	}

	public function verPiloto(){
		return $this->db->query("select  distinct p.idPiloto, p.nombre, p.estado from piloto p  inner join vuelos v on p.idpiloto <> v.idPiloto  where p.estado = 1;")->result();
	}

	public function validarPiloto($name){
		return ($this->db->query("select nombre from piloto where nombre = '{$name}'")->num_rows()) > 0 ? true : false;
	}
	public function eliminarPiloto($id){
		$this->db->where('idPiloto', $id);
		return $this->db->update('piloto', array("estado"=>0));
	}

}

