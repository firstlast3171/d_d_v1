<?php

namespace Libs;

class Num_price{
     private $db = null;

     public function __construct(MySQL $db){
          $this->db = $db->connect();
     }

     public function select(){
          $query = "SELECT * FROM `num_price`";
          $statement = $this->db->query($query);

          $result = $statement->fetchAll();
          return $result;
     }
     public function selectwithnum($num){
          $query = "SELECT * FROM `num_price` WHERE `num` = :num";
          $statement = $this->db->prepare($query);

         $statement->execute([
          ":num" => $num,
         ]);
          $row = $statement->fetchAll();

          return $row ?? false;

     }

     public function updatePrice($price, $num){
          $statement = $this->db->prepare("
          UPDATE `num_price` SET `AungAung` = :price WHERE `num` = :num"
          );
          $statement->execute([ ':price' => $price, ':num' => $num ]);
          return $statement->rowCount();
     }
}