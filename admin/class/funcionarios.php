<?php


require_once ('conexao.php');
class FuncionariosClass {

    public $nomeFuncionario;
    public $turnoFuncionario;
    public $nivelFuncionario;
    public $statusFuncionarios;
    public $emailFuncionario;
    public $senhaFuncionario;

    public function Inserir() {
        $sql = "INSERT INTO tblfuncionarios (nomeFuncionario, emailFuncionario, senhaFuncionario, nivelFuncionario, statusFuncionarios) 
        VALUES ('".$this->nomeFuncionario."','".$this->turnoFuncionario."','".$this->emailFuncionario."','".$this->senhaFuncionario."','".$this->nivelFuncionario."','".$this->statusFuncionarios."')";

        $conn = Conexao::LigarConexao();
        $conn->exec($sql);
    }

    public function ListarFuncionarios(){
        
        $sql =  "SELECT * FROM tblfuncionarios ORDER BY idFuncionario ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
?>
