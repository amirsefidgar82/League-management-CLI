<?php
require_once 'team.php';
class League
{
    private $teams;
    private $team_count = 0;
    function __construct()
    {
        for ($i = 0; $i < 16; $i++) {
            $this->teams[$i] = null;
        }
    }

    public function get_team_info()
    {
        if ($this->team_count >= 16) {
            return "teams informations is completed!";
        }
        $this->teams[$this->team_count] = new Team();
        $this->teams[$this->team_count]->read();
        $this->team_count++;
    }

    public function show_teams()
    {
        for ($i = 0; $i < count($this->teams); $i++) {
            if (isset($this->teams[$i])) {
                $this->teams[$i]->show_info();
            }
        }
    }

    public function get_team_by_code($code)
    {
        for ($i = 0; $i < count($this->teams); $i++) {
            if (isset($this->teams[$i]) && $this->teams[$i]->get_code() == $code) {
                $this->teams[$i]->show_info();
            }
        }
    }

    public function get_coatch_by_team_name($team_name)
    {
        for ($i = 0; $i < count($this->teams); $i++) {
            if (isset($this->teams[$i]) && $this->teams[$i]->get_name() == $team_name) {
                return $this->teams[$i]->get_coatch()->get_fname() . " " . $this->teams[$i]->get_coatch()->get_lname() . "\n";
            }
        }
    }

    public function get_team_name_by_coatch_nid($nid)
    {
        for ($i = 0; $i < count($this->teams); $i++) {
            if (isset($this->teams[$i]) && $this->teams[$i]->get_coatch()->get_nid() == $nid) {
                return $this->teams[$i]->get_name() . "\n";
            }
        }
    }

    public function get_team_name_by_player_nid($nid)
    {
        for ($i = 0; $i < count($this->teams); $i++) {
            if (isset($this->teams[$i])) {
                for ($j = 0; $j < count($players = $this->teams[$i]->get_players()); $j++)
                    if (isset($players[$j]) && $players[$j]->get_nid() == $nid) {
                        return $this->teams[$i]->get_name() . "\n";
                    }
            }
        }
    }

    public function get_old_players(){
        $result = [];
        for ($i = 0; $i < count($this->teams); $i++) {
            if (isset($this->teams[$i])) {
                for ($j=0; $j < count($players = $this->teams[$i]->get_players()); $j++) { 
                    if($players[$j]->get_birthdate()->Date_difference(new Date(1,1,1402))->get_y() >= 30) {
                        array_push($result, $players[$j]);
                    }
                }
            }
        }
        return $result;
    }

    
}
