<?php

namespace Libs;

class CreateiTable{
     private $db = null;

     public function __construct(MySQL $db){
          $this->db = $db->connect();
     }

     public function create(){
          $query = 'SHOW TABLES';
          $show_tables = $this->db->query($query);

         $count_tables = count($show_tables->fetchAll());




         switch($count_tables){


          case 0:
               $this->db->query(
                    "CREATE TABLE `admin` (
                    id int NOT NULL AUTO_INCREMENT,
                    name varchar(50),
                    password varchar(100),
                    PRIMARY KEY (id)
               );");

          case 1:
               $this->db->query(
                    "CREATE TABLE `user` (
                    id int NOT NULL AUTO_INCREMENT,
                    name varchar(50),
                    password varchar(100),
                    PRIMARY KEY (id)
               );");

          case 2:
               $this->db->query(
                    "CREATE TABLE `commission` (
                    id int NOT NULL AUTO_INCREMENT,
                    name varchar(50),
                    user_id int,
                    PRIMARY KEY (id)
               );");

          case 3:
               $this->db->query(
                    "CREATE TABLE `num_price` (
                    id int NOT NULL AUTO_INCREMENT,
                    num varchar(10),
                    PRIMARY KEY (id)
               );");
               $this->db->query(
                    "INSERT INTO `num_price` (`num`) VALUES ('00'), ('01'), ('02'), ('03'), ('04'), ('05'), ( '06'), ( '07'), ( '08'), ( '09'), ( '10'), ( '11'), ( '12'), ( '13'), ( '14'), ( '15'), ( '16'), ( '17'), ( '18'), ( '19'), ( '20'), ( '21'), ( '22'), ( '23'), ( '24'), ( '25'), ( '26'), ( '27'), ( '28'), ( '29'), ( '30'), ( '31'), ( '32'), ( '33'), ( '34'), ( '35'), ( '36'), ( '37'), ( '38'), ( '39'), ( '40'), ( '41'), ( '42'), ( '43'), ( '44'), ( '45'), ( '46'), ( '47'), ( '48'), ( '49'), ( '50'), ( '51'), ( '52'), ( '53'), ( '54'), ( '55'), ( '56'), ( '57'), ( '58'), ( '59'), ( '60'), ( '61'), ( '62'), ( '63'), ( '64'), ( '65'), ( '66'), ( '67'), ( '68'), ( '69'), ( '70'), ( '71'), ( '72'), ( '73'), ( '74'), ( '75'), ( '76'), ( '77'), ( '78'), ( '79'), ( '80'), ( '81'), ( '82'), ( '83'), ( '84'), ( '85'), ( '86'), ( '87'), ( '88'), ( '89'), ('90'), ('91'), ('92'), ('93'), ('94'), ('95'), ('96'), ('97'), ('98'), ('99')"
               )
               ;

         }
     }
}


?>


             <!-- {
               $query = 'SHOW TABLES';
               $show_tables = $this->db->query($query);
              

               
             
     
          } -->