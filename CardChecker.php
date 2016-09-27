<?php
function cardCheck($dealt0,$person0)
{
    $cardflag = false;
    for($j=0;J<count($dealt0);$j++)
    {
    
        for($i=0;$i<count($person0['hand']);$i++)
        {
                if($dealt0[j]==$person0['hand'][i])
             {  
                 $cardflag = true;
             }
        }   
    }
    return $cardflag;
}
?>