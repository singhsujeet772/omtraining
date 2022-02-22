<?php
    namespace App\Controllers;

    class MyController extends BaseController{

        public function index(){
            echo " Mycontroller";
        }

        public function secondMethod($a,$b){
            echo $a+$b;
        }

    }
?>