<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigo extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
	}
	function index(){
		#libreria lista
		$this->load->library('menu',array('Inicio','Contacto','Curso'));
		$data['mi_menu'] = $this->menu->construirMenu();
		#helper
		$this->load->view('codigo/headers');
		#vista
		$this->load->view('codigo/bienvenido',$data);
	}
	function holamundo(){
		$this->load->view('codigo/headers');
		$this->load->view('codigo/bienvenido');
	}
}
?>
