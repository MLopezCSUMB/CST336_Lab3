<?php
function winCheck(&$player)
{
    $sum;
    
$sum = array_sum(array_column($player['hand'],'value'));


    if($sum == 42)
    {
        echo "<b><u>" . $sum .  $player[$name] . "Wins!"; 
    }
    if($sum > 42)
    {
    
        echo "<b><u>" .$sum . " Too high";
    
    }
    if($sum < 42)
    {
        echo "<u><b>" .$sum;
    }
    
    return $sum;
    
    
    function winner(&$winArr)
    {
        $max = 0;
        for($i=0;$i<count($winArr);$i++)
        {
            if($winArr[$i] > $max && $winArr[$i] < 43)
            {
                $max = $i;
            }
            
        }
        echo "$max";
        #return $max;
    }
}
?>