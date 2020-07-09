<?php
class Person{
    protected $first="Aya";
    private $last="Omar";
    private $age="22";



    public function owner(){
        $a = "Hi";
        return $a;
    }
}

class Pet extends Person{



    public function owner(){
        $a=$this->first;
        return $a;
    }
}
