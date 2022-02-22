<?php
    class percentage{
        public $physics,$chemistry,$maths,$marks;
        function __construct($p=0,$c=0,$m=0)
        {
            
                $this->physics=$p;
                $this->chemistry=$c;
                $this->maths=$m;
    
                $this->marks=(($p+$c+$m)*100)/300;
                if($this->marks==0){
                    echo "Enter Valid Scores"."<br>";
                }else{
                    echo  $this->marks;
                }
            }
        
    }
    $obj1=new percentage();
    $obj2=new percentage(45,55,65);
?>