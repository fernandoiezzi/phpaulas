<?php

date_default_timezone_set('America/Sao_Paulo');
 
spl_autoload_register(function($file_name){
   $fileName = "php" . DIRECTORY_SEPARATOR . "{$file_name}.php";

   if(file_exists($fileName)){
       require_once($fileName);
   }
 });

 spl_autoload_register(function($file_name){
  $fileName = "php" . DIRECTORY_SEPARATOR . "service" . DIRECTORY_SEPARATOR . "{$file_name}.php";

  if(file_exists($fileName)){
      require_once($fileName);
  }
});