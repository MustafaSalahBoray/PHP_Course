<?php 
    class BD
    {
    	public $host="localhost";
    	public $DbName="dbcompaney";
    	public $username="root";
    	public $password="";
    	public  function connect(){
    		$dsn="mysql:host=".$this->host.";dbname=".$this->DbName;
    		$db= new PDO ($dsn,$this->username,$this->password);
    		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    		return $db;
    	}
    	
    }
 



?>