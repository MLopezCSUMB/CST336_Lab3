<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <?php include 'Include.php';?>
    </head>
    <body>
        <header>
            SilverJack
        </header>
        <table>
            <tr>
                <td><img class="img_size" src="imgs/bob_ross.jpg"></td>
                <td>
                    <?php
                   
                    deal($cards,$player[0],$counter,$cardsDealt);
                    array_push($winArray ,winCheck($player[0]));
                    ?>
                </td>
            </tr>
            <tr>
                <td><img class="img_size" src="imgs/kenny.jpg" ></td>
                <td> <?php
                    
                    deal($cards,$player[1],$counter,$cardsDealt);
                    
                       array_push($winArray ,winCheck($player[1]));
                   
                    ?></td>
            </tr>
            <tr>
                <td><img class="img_size" src="imgs/kip.jpg"></td>
                <td> <?php
                   
                    deal($cards,$player[2],$counter,$cardsDealt);
                    
                       array_push($winArray ,winCheck($player[2]));
                    ?></td>
            </tr>
            <tr>
                <td><img class="img_size" src="imgs/eleven.jpg"></td>
                <td> <?php
                    
                    deal($cards,$player[3],$counter,$cardsDealt);
                    
                       array_push($winArray ,winCheck($player[3]));
                    ?></td>
            </tr>
        </table>
        <?php
         
            if(winner($winArray) == 0)
            {
                echo $player[0]['name'] . "is a WINNER!";
            }
            if(winner($winArray) == 1)
            {
                 echo $player[1]['name'] . "is a WINNER!";
            }
            if(winner($winArray) == 2)
            {
                 echo $player[2]['name'] . "is a WINNER!";
            }
            if(winner($winArray) == 3)
            {
                 echo $player[3]['name'] . "is a WINNER!";
            }

       ?>
    </body>
</html>