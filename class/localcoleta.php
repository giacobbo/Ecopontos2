<?php

/**
 * Description of Pontocoleta
 *
 * @author Giacobbo
 */
class Localcoleta {

    private $nome;
    private $empresa;
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
    private $complemento;

    public function __construct($nome, $empresa, $estado, $cidade, $bairro, $rua, $numero, $complemento = NULL) {
        $this->nome = $nome;
        $this->empresa = $empresa;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
    }

    public function get_nome() {
        return $this->nome;
    }

    public function get_estado() {
        return $this->estado;
    }

    public function get_cidade() {
        return $this->cidade;
    }

    public function get_bairro() {
        return $this->bairro;
    }

    public function get_rua() {
        return $this->rua;
    }

    public function get_numero() {
        return $this->numero;
    }

    public function get_complemento() {
        return $this->complemento;
    }

    public function set_nome($nome) {
        $this->nome = $nome;
    }

    public function set_estado($estado) {
        $this->estado = $estado;
    }

    public function set_cidade($cidade) {
        $this->cidade = $cidade;
    }

    public function set_bairro($bairro) {
        $this->bairro = $bairro;
    }

    public function set_rua($rua) {
        $this->rua = $rua;
    }

    public function set_numero($numero) {
        $this->numero = $numero;
    }

    public function set_complemento($complemento) {
        $this->complemento = $complemento;
    }

    public function saveToDB() {
        if ($this->complemento === NULL) {
        $sql = "INSERT INTO localdecoleta (nome, empresa, estado, cidade, bairro, rua, numero)"
                . " VALUES ('{$this->nome}', '{$this->empresa}', '{$this->estado}', '{$this->cidade}', '{$this->bairro}', '{$this->rua}', '{$this->numero}');";   
        } else {
        $sql = "INSERT INTO localdecoleta (nome, empresa, estado, cidade, bairro, rua, numero, complemento)"
                . " VALUES ('{$this->nome}', '{$this->empresa}', '{$this->estado}', '{$this->cidade}', '{$this->bairro}', '{$this->rua}', '{$this->numero}', '{$this->complemento}');";
        }
        return $sql;
    }
    
    public function getFromDB(){
        $sql = "SELECT * FROM localdecoleta;";
        return $sql;
    }

}
