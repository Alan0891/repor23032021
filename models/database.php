<?php

class Database{

   private static $conn;

   public static function connectar(){
       try{
         self::$conn = new PDO('mysql:host=localhost;dbname=tester;port=3306','root','');
          return self::$conn;
       }catch(PDOException $error){
          return $error->getMessage();
       }
   }
}