<?php

class controller{
    
    public function view($view , $data =[]){
        extract($data);
        include "views/".$view.".php";
    }
    public function template($view , $data = []){
        extract($data);
        include "views/template.php";
    }
    public function inTemplate($view , $data = []){
        extract($data);
        include "views/".$view.".php";
    }
}