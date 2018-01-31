<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class landingpage_mpt extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
			$this->load->model('mo_landingpage');
			$this->load->helper('form');
  }
	public function index()
	{
		$this->load->view('index');
	}

	public function registrar_participante()
	{
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$dni = $_POST['dni'];
		$ciudad = $_POST['ciudad'];
		$celular = $_POST['celular'];
		$email = $_POST['email'];
		$titulo = $_POST['titulo'];
		$descripcion = $_POST['descripcion'];
		$data = array(
				'nombre'			=>$nombre,
				'apellido'		=>$apellido,
				'dni'					=>$dni,
				'ciudad'			=>$ciudad,
				'celular'			=>$celular,
				'email'				=>$email,
				'titulo'			=>$titulo,
				'descripcion'	=>$descripcion
		);
		// var_dump($data);
		// $this->load->model('mo_landingpage\registrar_participante');
		$this->mo_landingpage->registrar_participante($data);
		$this->enviar_correo($data);
    $this->load->view('register_confirmation', $data);
	}
	public function enviar_correo($data)
	{
		 //cargamos la libreria email de ci
		 $this->load->library("email");
		 //configuracion para gmail
		 $configGmail = array(
		 'protocol' => 'smtp',
		 'smtp_host' => 'mail.munitacna.gob.pe',
		 'smtp_port' => 465,
		 'smtp_user' => 'desafiomovil2018@munitacna.gob.pe',
		 'smtp_pass' => 'principal*123',
		 'mailtype' => 'html',
		 'newline' => "\r\n"
		 );

		 //cargamos la configuración para enviar con gmail
		 $this->email->initialize($configGmail);
		 //cargamos los datos en la vista mensaje de respuesta
		 // $email_response=$this->load->view("email_response",$data,TRUE);
		 $email_response="Registro Exitoso Desafio Movil 2018";

		 $this->email->from('desafiomovil2018@munitacna.gob.pe');
		 $this->email->to("urieljnvp@gmail.com");
		 $this->email->subject('Registro Exitoso Desafio Movil 2018');
		 $this->email->message($email_response);
		 $this->email->send();
		 //con esto podemos ver el resultado
		 var_dump($this->email->print_debugger());

	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
