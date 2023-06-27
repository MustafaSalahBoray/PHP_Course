<?php 
      class Cars {
        public $Color;
        public $type;
        public$name;
         static public $rate;
        private $Salary;

        private $model;
        private $Founds;
        private $material;
        public function __construct($color,$Type,$Name){
          $this->Color=$color;
          $this->type=$Type;
          $this->name=$Name;
        }
        public function GetOwner(){
          $Owner=array('mostafa','Amr','Ali');
          return $Owner;
        }
        public function SerSalary($salary){
        $this->Salary=$salary;
      }
    public function GetSalart(){
      return $this->Salary;
    }
    public function __set($Name,$Value){
      switch ($Name) {
        case 'model':
           $this->model=$Value;
          break;
          case 'Founds':
           $this->Founds=$Value;
          break;
          case 'material':
           $this->material=$Value;
          break;
                
      }
       return $Value;

    }
    public function __get($Name)
    {
           switch ($Name) {
        case 'model':
         return  $this->model;
          
       case 'Founds':
               return  $this->Founds;
          
       case 'material':
               return $this->material;
          

      }
     
    }

}

?>