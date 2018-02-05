<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mo_landingpage extends CI_Model{

	public function __construct(){
		parent::__construct();
		// $this->db = $this->load->database('default', true);

	}
  public function registrar_participante($data){
		// var_dump($data);
    return $this->db->insert('inscripcion_concurso', $data);
  }
}

 ?>
