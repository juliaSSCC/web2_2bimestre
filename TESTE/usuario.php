<?php
  Class Usuario{
    public $nome;
    public $telefone;
    public $email;
    public $senha;

    function Usuario($nome, $telefone, $email, $senha){
      $this->prepareUsuario($nome, $telefone, $email, $senha);
    }

    function prepareUsuario($nome, $telefone, $email, $senha){
      $this->nome = $nome;
      $this->telefone = $telefone;
      $this->email = $email;
      $this->senha = $senha;
    }

    function getNome(){
      return $this->nome;
    }
    function getTelefone(){
      return $this->telefone;
    }
    function getEmail(){
      return $this->email;
    }
    function getSenha(){
      return $this->senha;
    }
  }

?>
