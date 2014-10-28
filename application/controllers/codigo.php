<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigo extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
	}
	function index(){
		$this->load->view('codigo/headers');
		$this->load->view('codigo/bienvenido');
	}
	function holamundo(){
		$this->load->view('codigo/headers');
		$this->load->view('codigo/bienvenido');
	}
}
?>
