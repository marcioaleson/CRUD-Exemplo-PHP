<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
    $this->load->model('loja_de_bebidas_m');
    $dados['bebidas'] = $this->loja_de_bebidas_m->getAll();
    //print_r($dados);
		$this->load->view('home', $dados);
	}

}
