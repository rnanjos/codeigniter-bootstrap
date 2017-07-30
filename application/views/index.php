
<?php
$this->load->view('layout/header');
$this->load->view('layout/nav');

if ($view_principal == 'Home') {
	$this->load->view('layout/slider');
}

$this->load->view($view_principal);
$this->load->view('layout/footer');
?>

