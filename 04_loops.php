<?php
$a = 10;
while($a<=100){
    echo "The number is : $a<br>";
    $a=$a+5;
}
echo"<br>";
//do while loop
$b = 1;
do{
    echo "Your number is : $b<br>";
    $b++;
}while($b<=50);
echo"<br>";
//for loops
for($x=0;$x<=10;$x++){
    echo"The number is : $x<br>";
}
echo"<br>";
//foreach loops
$colors = array("red","green","yello");
foreach($colors as $value){
    echo "$value <br>";
}
echo "<br>";
$age = array("vishal"=>"21",
             "arpita"=>"23",
            "sudipa"=>"19");
foreach($age as $x=>$value){
    echo "$x = $value<br>";

}
?>