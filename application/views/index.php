
<?php
$this->load->view('layout/header');
$this->load->view('layout/nav');
$this->load->view('layout/slider');

/* 
Condição para não exibir o slides nas outras paginas
if ($view_principal == 'home') {
	$this->load->view('layout/slider');
}
*/
$this->load->view($view_principal);
$this->load->view('layout/footer');
?>

