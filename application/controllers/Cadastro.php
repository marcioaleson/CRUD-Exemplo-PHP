<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index(){
		$this->load->view('cadastro');
	}

  public function cadastro_bebidas(){
    $nome_da_bebida = $this->input->post('nome_da_bebida');
    $preco = $this->input->post('preco');
    $marca = $this->input->post('marca');
    $this->load->model('loja_de_bebidas_m');
		$this->loja_de_bebidas_m->cadastra_bebidas($nome_da_bebida, $preco, $marca);
		$dados['bebidas'] = $this->loja_de_bebidas_m->getAll();
		$this->load->view('home', $dados);
  }
}
