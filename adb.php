<?php
$colors=array("red","green","yellow","blue");
rsort($colors);

echo "<table border=2>";

foreach($colors as $i=>$val)
{
    echo "<tr><td>" .$i. "</td><td>".$val."</td></tr>";

}

echo "</table>"

?>


