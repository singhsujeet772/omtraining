<?php
    class base{
        private $name;
        public function hello(){
            echo $this->name;
        }
        public function __get($property)
        {
            echo "property is nonexistent or private($property)";
        }
        public function __set($property,$value)
        {
            if(property_exists($this,$property)){
                $this->$property=$value;
            }else{
                echo "Property does not exist";
            }
        }
    }
    $obj=new base;
    // $obj->name;
    $obj->name="sujeet";

    $obj->hello();
?>