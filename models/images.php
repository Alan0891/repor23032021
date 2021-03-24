<?php

class Images{

    public function imageFuncionario($img){
      if(isset($img) && !empty($img)){
          $permission = ['image/jpg','image/jpeg','image/gif'];
          if(in_array($img['type'],$permission)){
            $img_temp = time().'.jpg';
          }
          $dir = 'assets/imgs/'.$img_temp;
          move_uploaded_file($img['tmp_name'],$dir);

          return $dir;
      }
    }
}