<?php
if(isset($_POST['name']))
{
$server="localhost";
$username="root";
$password="";
$dbname="trip";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
die("connection failed due to " . mysqli_connect_error() );
// echo"success connecting to database";
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `trip`( `Name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone','$desc',current_timestamp() )";
echo $sql;

if($con->query($sql)==TRUE)
{
    echo("Successfully inserted");
}
else{
    echo "error:$sql <br> $con->error";
}
$con->close();
}
?>

