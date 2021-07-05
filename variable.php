<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
<div class="contaner">
this is my first php website

<?php

define ('PI', 3.14);
echo "hello world this is printed";
$var1=34;
$var2=35;
echo "<br>";
echo "variable and variable 2 sum is";
echo "<br>";
echo $var1+ $var2;
echo "check 1=4 ";
echo "<br>";
echo var_dump(1==4);
$myvar=(false) and (true);
echo "<br>";
echo var_dump($myvar);

echo "<br>";
echo "data types in string<br>";
$var="this is a string";
echo var_dump($var);
echo PI;
?>

</div>
</body>
</html>