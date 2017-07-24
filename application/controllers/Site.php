<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index() {
		$dados  = array('view_principal' => 'Home',
		'title' => 'Home',
		'keywords' => 'Home');
		$this->load->view('index', $dados);
	}
}
