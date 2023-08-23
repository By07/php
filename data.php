mysqli_select_db($con, "isdb");
$strl2="create table stud(
    rollno int not NULL,
    name varchar (20),
    subject varchar(20), PRIMARY KEY(rollno)";
if(mysqli_query($con, $str2))
{
    echo "table created";
}
else
{
    echo "table not created".mysqli_query($con);

}
?>