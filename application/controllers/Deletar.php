<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deletar extends CI_Controller {

	public function index(){
		$this->load->view('deletar');
	}

  public function selecionar_bebidas($id = false){
    $this->load->model('loja_de_bebidas_m');
    $dados['deletar'] = $this->loja_de_bebidas_m->seleciona_bebidas($id);
    //print_r($dado);exit;
    $this->load->view('deletar', $dados);
  }

  public function deletar_bebidas(){
		$id = $this->input->post('id');
		//print $id; exit;
    $this->load->model('loja_de_bebidas_m');
		$this->loja_de_bebidas_m->deleta_bebidas($id);
		redirect(base_url('home'));
  }
}
?>
