<!DOCTYPE html>
<html>
<h1>Task Two</h1>
<br>
<?php
echo "<h1>Data Type</h1>";
$n = 3.6; 
echo "DataType of 3.6 = "." ";
var_dump($n);
echo "<br>";
$x = 57584; 
echo "DataType of 57584 = "." ";
var_dump($x);
echo "<br>";
$x = false; 
echo "DataType of false = "." ";
var_dump($x);
echo "<br>";
$x = "farah"; 
echo "DataType of farah = "." ";
var_dump($x);
echo "<br>";
$x = null; 
echo "DataType of null = "." ";
var_dump($x);
echo "<br>";
$x =array("red","blue","green"); 
echo "DataType of array = "." ";
var_dump($x);
echo "<br>";
echo "<br>";
echo "<h1>Data output</h1>";
$n = "do your task";
echo "1-"."$n";
echo "<br>";
echo "2-".strlen("what is your name?");
echo "<br>";
echo "3-".str_word_count("my name is farah");
echo "<br>";
echo "4-".strrev("my name is farah");
echo "<br>";
echo "5-".strpos("welcome to my task page","task");
echo "<br>";
echo "6-".str_replace("farag","sara","this is farah page");
echo "<br>";
define("name", "farah");
$name = "sara";
echo "7-".name;

?>
</html>