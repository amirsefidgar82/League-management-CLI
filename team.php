<?php
require_once "./player.php";
require_once "./coatch.php";

class Team
{
    private $name;
    private $code;
    private $players;
    private $coatch;

    public function __construct()
    {
        $this->players = array();
        for ($i = 0; $i < 2; $i++) {
            $this->players[] = new Player();
        }

        $this->coatch = new Coatch();
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_code()
    {
        return $this->code;
    }

    public function get_players()
    {
        return $this->players;
    }

    public function get_coatch()
    {
        return $this->coatch;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }
    public function set_code($code)
    {
        $this->code = $code;
    }

    public function set_players(array $players)
    {
        $this->players = $players;
    }

    public function set_coatch(Coatch $coatch)
    {
        $this->coatch = $coatch;
    }

    public function read()
    {
        echo "\n----------------------------------------\n";
        $this->name = readline("team name:  ");
        $this->code = readline("team code:  ");
        echo "\n-----------------players-----------------\n";
        for ($i = 1; $i <= count($this->players); $i++) {
            echo "\n-----------------player number $i-----------------\n";
            $this->players[$i-1]->read();
        }
        echo "\n-----------------coatch-----------------\n";
        $this->coatch->read();
        echo "\n----------------------------------------\n";
    }

    public function show_info()
    {
        echo "\n-----------------" . $this->name . "-----------------\n";
        echo "team code:" . $this->code;
        echo "\n-----------------players-----------------\n";
        for ($i = 1; $i <= count($this->players); $i++) {
            echo "\n-----------------player number $i-----------------\n";
            $this->players[$i-1]->show_info();
        }
        echo "\n-----------------coatch-----------------\n";
        $this->coatch->show_info();
        echo "\n----------------------------------------\n";
    }
}