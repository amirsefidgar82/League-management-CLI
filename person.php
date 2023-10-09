<?php

require_once 'date.php';
class person {
    private  $fname;
    private  $lname;
    private  $nid;
    private $birthdate;
    
    public function __construct()
    {
        $this->birthdate = new Date();
    }

public function get_fname(){
    return $this->fname;
}
    
public function get_lname(){
    return $this->lname;
}
    
public function get_nid(){
    return $this->nid;
}
    
public function get_birthdate(){
    return $this->birthdate;
}

public function set_fname($fname){
    $this->fname = $fname;
}
public function set_lname($lname){
    $this->lname = $lname;
}
public function set_nid($nid){
    $this->nid = $nid;
} 
public function set_birthdate($birthdate){
    $this->birthdate = $birthdate;
}

public function read(){
    $this->fname = readline("fname: ");
    $this->lname = readline("lname: ");
    $this->nid = readline("nid: ");
    $this->birthdate->read();
}

public function show_info(){
    echo "fname: $this->fname\n";
    echo "lname: $this->lname\n";
    echo "nid: $this->nid\n";
    echo "birthdate: ";
    $this->birthdate->show();
    echo "\n";
}
}