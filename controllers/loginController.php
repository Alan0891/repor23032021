<?php

class loginController extends controller{
   
    public function index(){
      
           $data=[];
           $this->template('login',$data);
    }

    public function logar(){

        $user_login = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if(isset($user_login) && !empty($user_login)){
        $user = new User();
        $user->setEmail($user_login['eMail']);
        $user->setPassword($user_login['ePass']);

        $user->login();
        
        }
    }
}