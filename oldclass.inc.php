<?php 
   class Gets {
   
   	 public $db;
   	 public function __construct(){
   	     	require 'DB.inc.php';
   	  	  $ObjectDataBase= new BD;
   	  	  $this->db=$ObjectDataBase->connect();
   	  } 
   	  public function getUser()
   	  {
   	  	$select="SELECT * FROM admins";
   	  	$stmt=$this->db->prepare($select);
   	  	$stmt->execute();
   	  	$stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
   	  	print_r($stmt);
   	  }

   	}
  


?>