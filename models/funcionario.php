<?php

class Funcionario{

    private $foto;
    private $nome;
    private $matricula;
    private $funcao;
    private $admissao;
    private $estado;
    private $candidato;
   
    public function __construct($foto,$nome,$matricula,$funcao,$admissao,$estado,$candidato){
         
           $this->foto = $foto;
           $this->nome = $nome;
           $this->matricula = $matricula;
           $this->funcao = $funcao;
           $this->admissao = $admissao;
           $this->estado = $estado;
           $this->candidato = $candidato;
    
    }


    public function setFoto($foto){
        $this->foto = $foto;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setFuncao($funcao){
        $this->funcao = $funcao;
    }
    public function getFuncao(){
        return $this->funcao;
    }
    public function setAdmissao($admissao){
        $this->admissao = $admissao;
    }
    public function getAdmissao(){
        return $this->admissao;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setCandidato($candidato){
        $this->candidato = $candidato;
    }
    public function getCandidato(){
        return $this->candidato;
    }
   

    public function cadastrarFuncionario(){

       $db = new DAO();
       $func_exists = $db->select('SELECT * FROM tb_funcionario WHERE matricula = :matricula',[
         ':matricula'=> $this->getMatricula()
       ]);
       if(empty($func_exists)){
       $db->sql('INSERT INTO tb_funcionario(foto,nome,matricula,funcao,admissao,estado,candidato) VALUES (:foto,:nome,:matricula,:funcao,:admissao,:estado,:candidato)',[
         ':foto'=> $this->getFoto(),
         ':nome'=> $this->getNome(),
         ':matricula'=> $this->getMatricula(),
         ':funcao'=> $this->getFuncao(),
         ':admissao'=> $this->getAdmissao(),
         ':estado'=> $this->getEstado(),
         ':candidato'=> $this->getCandidato()
       ]);
         header('location:/dash');
       }
       
    } 
    public function listFuncionario($matricula){
        
        $db = new DAO();
        $funcionarios = $db->select('SELECT * FROM tb_funcionario WHERE matricula = :matricula',[
            ':matricula'=> $matricula
        ]);
        if(count($funcionarios)>0){
        echo json_encode($funcionarios);
        }
    }

    public function listFuncionarioCandidato($num_candidato){

        $db = new DAO();
        $funcionarios = $db->select('SELECT * FROM tb_funcionario WHERE num_candidato = :num_candidato',[
            ':num_candidato'=> $num_candidato
        ]);
        if(count($funcionarios)>0){
        echo json_encode($funcionarios);
        }
    }

    public function votarCandidato($num_candidato){
        
        $total = 0;
        $db = new DAO();
        $sum = $db->select('SELECT SUM(voto) AS vtotal FROM tb_funcionario WHERE num_candidato = :num_candidato',[':num_candidato'=> $num_candidato]);
        
        foreach($sum as $tot){
            $total = $tot['vtotal'];
        }
        if(!is_null($total)){

        $db->sql('UPDATE tb_funcionario SET voto = :vt + 1 WHERE num_candidato = :num_candidato',[
            ':vt'=>$total,
            ':num_candidato'=> $num_candidato
        ]);
        }else{

            $db->sql('UPDATE tb_funcionario SET voto = 1 WHERE num_candidato = :num_candidato',[
                ':num_candidato'=> $num_candidato
            ]);
        }
        header('location:/dash');
    }
}