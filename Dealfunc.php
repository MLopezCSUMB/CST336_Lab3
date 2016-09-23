<?php

function deal($deck,&$player)
{
    $random = rand(4,6);
    
    for($i =0;$i<$random;$i++)
    {
        $random2 = rand(0,52);
        
        
      if($cardCheck()== false)
      {
          $player[$hand].push($deck[$random]);
          $cardsDealt.push($deck[$random]);
          
      }
       else
       {
           $i--;
       } 
       
    }
    for($i=0;$i<count($player[$hand]).length();$i++)
    {
        echo"$player[$hand][$i][$image]";
        
    }
    
    
}

?>