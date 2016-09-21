<?php
function deal()
{
    $randomNumber = rand(4,6);
    
    for($i =3;$i<$randomNumber;$i++)
    {
        $randomCard = rand(0,52);
        for($j =0;$j<$cardsDealt.length();$j++)
        {
            if($cardsDealt[$j] != $randomCard)
            {
                 $hand.push($deck[$randomNumber]);
                 $cardsDealt.push($deck[$randomNumber]);
            }
            else
            {
                $i--;
            }
        
        }
    }
    
    

    
}
?>