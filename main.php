<?php
require_once "./league.php";

$league = new League();

while (true) {
    echo "
___________________________________
get one team info (1)
show all teams info (2)
show team info by team code (3)
show coatch name by team name (4)
show team name by coatch nid (5)
show team name by players nid (6)
show old players of league (older than 30 years) (7)
exit (8)
___________________________________\n\n\n";
    $task = readline("enter a number: ");
    if ($task == 8) {
        break;
    }
    switch ($task) {
        case 1:
            popen('cls', 'w');
            echo $league->get_team_info();
            break;
        case 2:
            popen('cls', 'w');
            $league->show_teams();
            break;

        case 3:
            popen('cls', 'w');
            $code = readline("enter team code: ");
            $league->get_team_by_code($code);
            break;

        case 4:
            popen('cls', 'w');
            $team_name = readline("enter team name: ");
            echo $league->get_coatch_by_team_name($team_name);
            break;

        case 5:
            popen('cls', 'w');
            $nid = readline("enter coatch nid: ");
            echo $league->get_team_name_by_coatch_nid($nid);
            break;

        case 6:
            popen('cls', 'w');
            $nid = readline("enter player nid: ");
            echo $league->get_team_name_by_player_nid($nid);
            break;

        case 7:
            popen('cls', 'w');
            for ($i = 0; $i < count($old_players = $league->get_old_players()); $i++) {
                echo $old_players[$i]->get_fname() . " " . $old_players[$i]->get_lname() . "\n";
            }
            break;

        default:
            popen('cls', 'w');
    }
}
