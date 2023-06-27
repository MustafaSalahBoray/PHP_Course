<?php  

$username="mostafa";
$pass="123";
$db = new PDO("mysql:host=Localhost;dbname=medical_services;Charset=utf8;",$username,$pass);


// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// header("Access-Control-Allow-Methods: POST");

    $show=$db->prepare("SELECT * FROM cities ");
    $show->execute();
    foreach ($show as $key ) {  

   
     echo "<th>".$key['city_id']."</th>";
     echo "<th>".$key['City_name']."</th>";
    
    }
  
    ?>


    
/**
 * 
 * 	interface animal{
		public function ren($run);
		public function eat($eat);

	} 
	class Donkey implements animal{ 

     
   
     
     public function ren($run){
     	return sprintf(" runs:%s",$run);
     	
     }
     public function eat($eat){
     	return sprintf(" eat:%s",$eat);
     }
     

	  }
	  $Donkey1=new Donkey();
	  echo $Donkey1->ren("meduim");
	  echo $Donkey1->eat("oshp");
 * abstract class Suber{
     
     protected  $Fristname;
 	protected $lastname; 
 	public function __construct($Fristname,$lastname)
 	{  
      $this->Fristname=$Fristname;
      $this->lastname=$lastname;
 	}
 	public function __toString(){

 		return  $this->Fristname ." ".$this->lastname;
 	}
	 	
 	abstract public function getSalary();


	}
	class Sub extends Suber{ 

      private $Salary;
     public function __construct( $Fristname,$lastname,$Salary){  
 		parent:: __construct($Fristname,$lastname);
      $this->Salary=$Salary;
      
 	}
 	public function getSalary(){}
 	public function __toString(){

 		return   sprintf("abstract one project:%s Salary %f",parent::__toString(),$this->Salary);
 	}
     

	}
  $subAbstruct=new sub("Mostafa","Salah",300);
  echo($subAbstruct);
    class Stre extends Suber{

  	private  $Departmen;
  	private $Salary ;
  	private $Age ;
  	private $addes;
  	 public function __construct( $Fristname,$lastname,$Salary ,$Age,$addes,$Departmen){  
 		parent:: __construct($Fristname,$lastname);
      $this->Salary=$Salary;
      $this->Age=$Age;
      $this->addes=$addes;
       $this->Departmen=$Departmen;}
      public function getSalary(){
      	return $this->Salary;
      }
      public function getDepartment(){
      	return $this->Departmen;
      }
      public function Age(){
      	return $this->Age;
      }
      public function getAddres(){
      	return $this->addes;
      }
      public function __toString(){

 		return   sprintf("abstract two project:%s Salary %f Age:%d :Departmen:%s addes :%s",parent::__toString(),
 			$this->Salary,$this->Age,$this->addes,$this->Departmen);}}
 		echo "<br> <br> <br> <br> <br> <br>";
 		  $Stre1 = new Stre("Dalia","Salah", 300,32 ,"php Departmen","elshmabab");
  echo($Stre1);
 	 
   
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 *  class Construc{

 	private $Fristname;
 	private $lastname;
 	private$age;  
 	public function __construct($Fristname, $lastname,$age){
 		$this->Fristname=$Fristname;
 		$this->lastname=$lastname;
 		$this->age=$age;}
 	public function __toString(){

 		return "<h1>" .$this->Fristname."</h1>" ."  ".$this->lastname .$this->age;
 	}

 }
 $construt1= new Construc('mostafa','salah',21);
 echo $construt1;
  * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 

  /  <?php class magic{

          
          private $attribuates;
           public function __get($attribuatesNames)
          {
          	if(array_variables($attribuatesNames,$attribuates)){
          		return $this->attribuates[$attribuatesNames];
          	}
          	// code...
          }
          public function __set($attribuatesNames,$attribuatesValue){
          	$this->attribuates[$attribuatesNames]=$attribuatesValue;
          }




    }


?>









   $magic1=new magic();
   $magic1->Fname='mostafa';
	$magic1->setlasy="boray";
	$magic1->addres="elshmabab";
	 	var_dump($magic1);**/



	/**
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	* 
	 * 
	 * 
	 * 
	 * 
	 *
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	 * class Person{

		public $Fname;
		private $lastName;
		function getinfo(){
			$result=" ";
			$result.=$this->Fname." ".$this->lastName;
			return $result;
		}
		public function getLast(){
			return $this->lastName;
		}
		public function setlasy(){
			$this->lastName=$lastName;
		}
	}
	$Person1=new Person();
	var_dump($Person1);
	$Person1->Fname='mostafa';
	$Person1->setlasy="boray";
	 	var_dump($Person1);
    echo $Person1->getinfo();**/