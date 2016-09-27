<?php

function printer($person)
{
      for($i =0;$i<count($person['hand']);$i++)
      {
        echo "<td>" . $person['hand']['image'][i] . "</td>";
      }
}
?>
