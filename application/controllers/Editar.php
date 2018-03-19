<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Controller {

	public function index(){
		$this->load->view('editar');
	}

  public function selecionar_bebidas($id = false){
    $this->load->model('loja_de_bebidas_m');
		$dados['editar'] = $this->loja_de_bebidas_m->seleciona_bebidas($id);
    //print_r($dado);exit;
    $this->load->view('editar', $dados);
  }

	public function editar_bebidas(){
		$id = $this->input->post('id');
		$nome_da_bebida = $this->input->post('nome_da_bebida');
		$preco = $this->input->post('preco');
		$marca = $this->input->post('marca');
    $this->load->model('loja_de_bebidas_m');
		$this->loja_de_bebidas_m->edita_bebidas($id, $nome_da_bebida, $preco, $marca);
		$dados['bebidas'] = $this->loja_de_bebidas_m->getAll();
		$this->load->view('home', $dados);
	}
}
