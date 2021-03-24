<?php

class DAO{
    public function setBind($stmt,$key,$value){
        $stmt->bindParam($key,$value);
    }
    public function setParams($stmt,$params=[]){
        foreach($params as $key=>$value){
            $this->setBind($stmt,$key,$value);
        }
    }
    public function sql($query,$params =[]){
        $stmt = Database::connectar()->prepare($query);
        $this->setParams($stmt,$params);
        $stmt->execute();
        return $stmt;
    }
    public function select($query,$params=[]){
        $stmt = Database::connectar()->prepare($query);
        $this->setParams($stmt,$params);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $response;
    }
}