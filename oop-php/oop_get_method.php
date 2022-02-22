<?php

    class base{
        // private $name="sujeet";
        public $data=["Name"=>"sujeet","course"=>"php","fees"=>"2000"];
        public function __get($key)
        {
            if(array_key_exists($key,$this->data)){
                return $this->data[$key];
            }
            else{
                return "This key ($key) not defind";
            }
        }

    }

    $obj=new base;
    // $obj->name;
    // print_r($obj->data);
    echo $obj->Name;
    echo $obj->course;
?>