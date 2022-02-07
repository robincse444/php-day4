<?php

namespace App\classes;
class Example
{
    public $i;
    public function index ()
    {

        //echo "Hello World";

//        for($this->i =100; $this->i >=1; $this->i--)
//        {
//            echo $this->i. '<br/>';
//        }
//        $this->i=10;
//        while ($this->i<200)
//        {
//            echo $this->i. '<br/>';
//            $this->i++;
//        }
        $this->i=10;
        do{
            echo $this->i;
            $this->i++;
        } while($this->i>20);

    }
}