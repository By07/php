<?php
$color=array("k1"=>"red","k2"=>"green","k3"=>"yellow","k4"=>"blue");

echo "<table border=2>";
foreach($color as $i=>$val)
{
    echo"<tr><td>".$i."</td><td>".$val."</td></tr>";
}
echo"</table>"

?>