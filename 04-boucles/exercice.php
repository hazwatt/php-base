<?php
//1/

for($i=10;$i>0;$i--){
    echo $i;
}
// 2/
echo '<br/>';
for($k=1;$k<=100;$k++){
    if($k % 2 == 0){
        echo $k;
    }
}

// 3/
/**96-36=60

60-36=24

36-24=12

24-12=12

12-12=0

PGCD(96;36)=12 */

$number1 = 200;
$number2 = 30;
$result = 0;
while ($result == 0){
if ($number1>$number2){
   $number1 = $number1 - $number2;
}else{
    $number2 = $number2 - $number1;
}
if ($number2 == 0){
    $result = $number1;
}
}
echo '<br/>'.$result;
// 4/
for($f=1;$f<=100;$f++){
    if($f%15 == 0){
        echo '<br/> fizzbuzz';
    }elseif($f%5 == 0){
         echo '<br/> buzz';
    }elseif( $f%3 == 0){
      echo '<br/> fizz';
    }else{
     echo "<br/>$f";
    }
}


