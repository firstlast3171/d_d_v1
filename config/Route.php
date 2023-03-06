<?php 
namespace config;



class Route{
     static function get($oururi, $function){
           $server = $_SERVER["REQUEST_URI"];

           if($oururi == $server){
              return $function ;
             
           }else{
               return '<h1 style="text-align:center"> 404 Not Found </h1>';
           }
          
     }
    
}

?>