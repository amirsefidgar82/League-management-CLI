<?php
require_once './person.php';
class Player extends person{

    private $post;

    public function read(){
        parent::read();
        $this->post = readline("post: ");
    }

    public function show_info(){
        parent::show_info();
        echo "post: $this->post\n";
    }

    public function get_post(){
        return $this->post;
    }

    public function set_post($post){
        $this->post = $post;
    }
}