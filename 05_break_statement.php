<?php
//break statements
for($x=0;$x<=10;$x++){
    if($x==6){
        break;
    }
    echo "The number is : $x<br>";
}

//Continue Statement
echo"<br>";
for($x=0;$x<=10;$x++){
    if($x==5){
        continue;
    }
    echo "The number is : $x <br>";
}
echo"<br>";
//break in while statement
$a = 0;
while($a<10){
    if($a==5){
        break;
    }
    echo "The number is : $a<br>";
    $a++;
}
echo"<br>";
//continue in while loop
$a1 = 0;
while($a1<10){
    if($a1==6){
        $a1++;
        continue;
    }
    echo "The number is : $a1<br>";
    $a1++;
}
?>