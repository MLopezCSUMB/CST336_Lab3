<?php
function winCheck(&$player)
{
    $sum;
    
$sum = array_sum(array_column($player[$hand],'value'));


    if($sum == 42)
    {
        echo"$sum .  $player[$name] . Wins!"; 
    }
    else
    {
        echo"$sum";
    }
    
    
}
?>