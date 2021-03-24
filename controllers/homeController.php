<?php 

class homeController extends controller{

    public function index(){
       
        $data = [];
        
        $this->template('home',$data);
    }

    public function buscar($resp){

        $con = new DAO;
        $response = $con->select("SELECT * FROM tb_user WHERE nome LIKE '%".$resp."%' ",[]);
        if(!empty($response)){
        //sleep(1);    
        echo json_encode($response);
        }
    }
}