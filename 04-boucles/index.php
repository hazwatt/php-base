<?php
/**
 * Les boucles
 * 
 * Presentation des boucles en php
 */

//  for
echo '<h2>la boucle for</h2>';
for($i = 0; $i< 10; $i++){
    echo $i;
}
// foreach
echo '<h2>la boucle foreach</h2>';
$car = ['mazda','opel','twingo'];
foreach($car as $poney){
    echo '<br/>'.$poney;
}
// while
echo '<h2>la boucle while</h2>';

$i = 0;
while ($i < 10){
    echo $i++;
}
// do ... while
echo '<h2>la boucle do ... while</h2>';
$i = 10;
do{
    echo $i++;
}
while($i<10);