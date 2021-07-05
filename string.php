<?php
$str="Hello it is Nikhil";
echo $str."<br>";

$lenn=strlen($str);
echo "The length of string is ". $lenn . " Thank You<br>";
echo " The number of words in string is ". str_word_count($str) . " Thank You<br>";
echo " The reversed string is ". strrev($str) . " Thank You<br>";
echo " The position string is ". strpos($str, "is") . " Thank You";
?>
