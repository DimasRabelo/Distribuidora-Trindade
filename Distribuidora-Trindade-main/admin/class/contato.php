
<?php

require_once ('conexao.php');





class ContatoClass {

    public $nomecontato;
    public $emailcontato;
    public $telefonecontato;
    public $mensagemcontato;

    public function Inserir() {
        $sql = "INSERT INTO tblcontato (nomecontato, emailcontato, telefonecontato, mensagemcontato) 
        VALUES ('".$this->nomecontato."','".$this->emailcontato."','".$this->telefonecontato."','".$this->mensagemcontato."')";
    
        $conn = Conexao::LigarConexao();
        $conn->exec($sql);
        




}

public function ListarContato(){
    
    $sql =  "SELECT * FROM tblcontato ORDER BY idcontato ASC";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($sql);
    $lista = $resultado->fetchAll();
    return $lista;
    




}




} 

// Fim da class Contato



















