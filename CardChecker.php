<?php
static $cardsDelt = array();
function cardCheck($player1, $player2, $player3, $player4)
{
    $cardflag = false;
    
    $checker = array_intersect($cardsDelt,  $player1[$hand], $player2[$hand], $player3[$hand], $player4[$hand]);
    if($checker.length() > 0)
    {
        return true;
    }

    return $cardflag;
}
?>