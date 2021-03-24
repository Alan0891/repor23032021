<?php

class funcionarioController extends controller{
    
    public function index(){
        $dados = [];
        $this->template('',$dados);
    }

    public function novoFuncionario(){

        $func_new = filter_input_array(INPUT_POST,FILTER_DEFAULT);
        $func_img = $_FILES['img'];
       
        $img = new Images();
        $new_img = $img->imageFuncionario($func_img);


        if(!empty($func_new) && isset($func_new)){
            
            $func = new Funcionario('foto','nome','matricula','funcao','admissao','estado','candidato');
            $func->setFoto($new_img);
            $func->setNome($func_new['nome']);
            $func->setMatricula($func_new['matricula']);
            $func->setFuncao(ucwords($func_new['funcao']));
            $func->setAdmissao($func_new['data']);
            $func->setEstado(1);
            $func->setCandidato(0);
          
            $func->cadastrarFuncionario();
        }
    }

    public function novoCandidato(){
        
         $candidato = filter_input_array(INPUT_POST,FILTER_DEFAULT);
         
         if(!empty($candidato) && isset($candidato)){
         $db = new DAO();
         $response = $db->select('SELECT admissao,estado,candidato,num_candidato FROM tb_funcionario WHERE matricula = :matricula',[
           ':matricula'=> $candidato['matricula']
         ]);
         
         $num_candidato = $db->select('SELECT num_candidato FROM tb_funcionario',[]);
         if(count($num_candidato)>0){
             foreach($num_candidato as $value){
               if($value['num_candidato'] == $candidato['chapa']){
                //var_dump($value['num_candidato'],$candidato['chapa']);exit;
                echo "<script>";
                echo"alert('Número de candidato já cadastrado')";
                echo "</script>";
                header('location:/dash'); 
                exit;
               }
             }
         }
    
         if(count($response)>0){
            
            foreach($response as $resp){ 


                if($resp['candidato'] != TRUE){  
                    $temp = explode('-',$resp['admissao']);
                   
                   $data_atual = explode('/',date('d/m/YY'));
                   if(($data_atual[2] - $temp[0]) > 1){
                      $db = new DAO();
                      $db->sql('UPDATE tb_funcionario SET candidato = 1,num_candidato = :num_candidato WHERE matricula = :matricula' ,[
                          ':matricula'=> $candidato['matricula'],
                          ':num_candidato'=> $candidato['chapa']
                      ]);
                      header('location:/dash');
                   
                      }
                    }else{
                      header('location:/dash');  
                   }
                }  
            }
         }
    }
    public function list(){
        $user = filter_input(INPUT_POST,'matricula',FILTER_DEFAULT);
       
        $func = new Funcionario('','','','','','','');
        
        $func->listFuncionario($user);
    }

    public function listCandidato(){
        $vote = filter_input(INPUT_POST,'num_candidato',FILTER_DEFAULT);
        
        $func = new Funcionario('','','','','','','');
        
        $func->listFuncionarioCandidato($vote);
    }

    public function votarCandidato(){
        $vote = filter_input(INPUT_POST,'vote',FILTER_DEFAULT);
        $func = new Funcionario('','','','','','','');
        if(isset($vote) && !empty($vote)){
        $func->votarCandidato($vote);
        header('location:/views/congrulations.php');
        }else{
            header('location:/views/dash');
        }
    }
}


