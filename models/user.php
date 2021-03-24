<?php 

Class User{

    private $nome;
    private $email;
    private $password;

    /*public function __construct($nome,$email,$password){
      $this->nome = $nome;
      $this->email = $email;
      $this->password = $password;
    }
    */
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password = password_hash($password,PASSWORD_BCRYPT);
    }
    public function getPassword(){
        return $this->password;
    }
    public function login(){
         header('location:/home');
    }
}