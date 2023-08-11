<?php
echo "Hello Vishal Ji Welcome to PHP World";
echo "<br>";
$name = "Vishal Kumar Yadav<br>";
$age = 21;
$address = "Dhanbad";
echo " Your name is $name"."Your age is $age<br>"."Your address is $address";
echo "<br>";
$a = 80;
$b = 20;
echo $a + $b;
echo "<br>";
echo "Your name lenght is : " .strlen($name);
echo "<br>";
echo "Number of world in your name : " .str_word_count($name);
echo "<br>";
echo "Reverse of  your Address : " .strrev($address);
echo "<br>";
var_dump(is_int($age));
echo "<br>";
var_dump($age);
echo "<br>";
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
//PHP MATHS STARS WITH HERE
echo"<br>";
echo(pi());
echo"<br>";
echo(min(34,56,78,34,44,56,55));
echo"<br>";
echo(max(34,56,78,34,44,56,55));
echo"<br>";
echo(abs(-4.7));
echo"<br>";
echo(sqrt(64));
echo"<br>";
echo(round(7.9));
echo"<br>";
echo(rand());
echo"<br>";
echo(rand(10,100));
//PHP MATHS ENDS HERE
//PHP CONSTANT STARTS WITH HERE
echo"<br>";

define("cars",["bmw","teslsa","tata"]);
echo cars[0];
//PHP CONSTANT ENDS HERE
//PHP IF STATEMENTS
$t = date("H");
if($t<"20"){
    echo "Have a good day!";
}




?>