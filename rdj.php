<?php
$con = mysqli_connect("localhost","root","");
if($con)
{
    echo "connection done";

}
else{
    echo "connection Failed" , mysqli_errror($con);

}
$strl = "CREATE DATABASE isdc";
if(mysqli_query($con, $strl))
{
    echo "database creared";

}
else{
    echo "database not created".mysqli_query($con);
}
