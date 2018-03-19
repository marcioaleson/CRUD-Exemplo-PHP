<?php
class Loja_de_bebidas_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getAll(){
      $this->db->select("*");
      $query = $this->db->get('loja_de_bebidas');
      return ($query->num_rows()>0) ? $query->result(): false;
    }

    public function cadastra_bebidas($nome_da_bebida = false, $preco = false, $marca = false){
      $data = array(
        'nome_da_bebida' => $nome_da_bebida,
        'preco' => $preco,
        'marca' => $marca
      );
      $this->db->insert('loja_de_bebidas', $data);
    }

    public function seleciona_bebidas($id = false){
      $this->db->select("*");
      $this->db->where('id', $id);
      $query = $this->db->get('loja_de_bebidas');
      return ($query->num_rows()>0) ? $query->result(): false;
    }

    public function deleta_bebidas($id = false){
      $this->db->where('id', $id);
      return $this->db->delete('loja_de_bebidas');
    }

    public function edita_bebidas($id, $nome_da_bebida, $preco, $marca){
      $data = array(
        'nome_da_bebida'=> $nome_da_bebida,
        'preco' => $preco,
        'marca' => $marca
      );
      $this->db->where('id', $id);
      $this->db->update('loja_de_bebidas', $data);
    }
}
?>
