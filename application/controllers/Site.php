<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index() {
		$dados  = array('view_principal' => 'Home',
		'title' => 'Home',
		'keywords' => 'Home');
		$this->load->view('index', $dados);
	}

	public function page1() {
		$dados  = array('view_principal' => 'page1',
		'title' => 'page1',
		'keywords' => 'page1');
		$this->load->view('index', $dados);
	}

	public function page2() {
		$dados  = array('view_principal' => 'page1',
		'title' => 'page1',
		'keywords' => 'page1');
		$this->load->view('index', $dados);
	}

	public function contato() {
		$dados  = array('view_principal' => 'contato',
		'title' => 'contato',
		'keywords' => 'contato');
		$this->load->view('index', $dados);
	}
}
