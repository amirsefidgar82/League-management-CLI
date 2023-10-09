<?php
require_once './person.php';
class Coatch extends person{

    private $degree;

    public function read(){
        parent::read();
        $this->degree = readline("degree: ");
    }

    public function show_info(){
        parent::show_info();
        echo "degree: $this->degree\n";
    }

    public function get_degree(){
        return $this->degree;
    }

    public function set_degree($degree){
        $this->degree = $degree;
    }
}