<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <?php include 'Include.php'; ?>
    </head>
    <body>
        <header>
            SilverJack
        </header>
        <table>
            <tr>
                <td><img class="img_size" src="imgs/bob_ross.jpg"></td>
                
                <td><img src="cards/clubs/1.png"></td>
                <td>
                    <?php
                
                    echo "$cards[15]['image']";
                    ?>
                </td>
            </tr>
            <tr>
                <td><img class="img_size" src="imgs/kenny.jpg" ></td>
                <td><img src="cards/clubs/2.png"></td>
            </tr>
            <tr>
                <td><img class="img_size" src="imgs/kip.jpg"></td>
                <td><img src="cards/hearts/8.png"></td>
            </tr>
            <tr>
                <td><img class="img_size" src="imgs/eleven.jpg"></td>
                <td><img src="cards/spades/13.png"></td>
            </tr>
        </table>
        
    </body>
</html>