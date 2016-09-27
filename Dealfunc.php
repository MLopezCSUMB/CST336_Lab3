<?php

function deal($deck,&$person,&$counter1,&$dealt)
{

    $random = rand(4,6);
     $checker = FALSE; 
     
    for($i =0;$i<$random;$i++)
    {
        $random2 = rand(0,51);
        if(count($dealt) == 0)
        {
            $person['hand'][$i] = $deck[$random2];
            array_push($dealt,$random2);
            echo $person['hand'][$i]['image'];
        }
        else
        {
            while($checker == FALSE)
             {
                   for($j =0;$j < count($dealt);$j++)
                {
                    if($dealt[$j] != $random2)
                    {
                        $checker = TRUE;
                    }
                    else
                    {
                        $checker = FALSE;
                    }
                }
                $random2 = rand(0,51);
             }
            
            $person['hand'][$i] = $deck[$random2];
            array_push($dealt,$random2);
            echo $person['hand'][$i]['image'];
        
        
     
          
        }
    }
}
?>S