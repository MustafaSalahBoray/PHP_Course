<?php 
function autolader($className){
   $extintion=".inc.php";
    $path =$className .$extintion;

   if (!file_exists($path)) {
    return false ;  } else{
      echo "string";
    }
    require $path;
}
spl_autoload_register('autolader');

require 'oldclass.inc.php';
   $Test=new GEts;
   $Test->getUser();
    


?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<form method="POST">
    <input type="number" name="num1">
    <select name="oper">
    	<option value="add">add</option>
    	<option value="div">div</option>
    	<option value="sub">sub</option>
    </select>
    <input type="number" name="num2">
    <button type="submt">calc</button></form>
 </body>
 </html>