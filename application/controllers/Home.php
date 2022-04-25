<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_Model','hm',true);
		$this->load->helper('menu_helper');
	}

	public function index(){
		$datos['menu']	= menuPrincipal();
		$this->load->view('home',$datos);
	}
}
