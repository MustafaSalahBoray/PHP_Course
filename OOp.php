<?php

   require 'f.php';
   Cars::$rate=3.4;
   //Example Construct
   $Cars=new Cars('Green','Marcedes','2500');
   echo $Cars->name;
    echo $Cars->type .'';
     echo $Cars->Color .'';
     // ENddddddddddddddddddddd Construct
     echo "<hr>";
     echo Cars::$rate;
     //Example Marhods public
   echo $Cars->type='BMW';
   echo $Cars->name='2015';
   echo $Cars->Color='red';
   print_r($Cars->GetOwner());
//ENDDDDDDDDDDDDDDDDDDDDDDDDDDD metod public
   echo "<hr>";
   //Example Methods Private
    $Cars->SerSalary('2505$');
   echo $Cars->GetSalart();
//ENSDDDDDDDDDDDDDDDDDDD MEthods private
      echo "<hr>";
      //METHODS MAJIC
      echo $Cars->model="2025";
       echo $Cars->Founds="Yes";
//ENDDDDDDDDDDDDDDDDDDDDDDDDDDD metod MAJic

   
?>