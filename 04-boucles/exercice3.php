<?php
/*echo '<table>';
$result;
for($a=0; $a<=10; $a++){
   echo '<tr>';
    for($b=0; $b<=10; $b++){
        $result=$b*$a;
        echo'<td>';
        echo "<br/> $result <td/>";
    }
   
}
echo '</table>';*/



/**
 * TABLEAU DE MULTIPLICATION
 */
// echo PHP_EOL; retoure a la ligne (retour chariot)



echo PHP_EOL; // Equivaut à un retour chariot
echo '<table align="center" border="1" style="border-collapse: collapse">'.PHP_EOL;
// Légende du tableau
echo '<thead><tr>';
echo '<td align="center" style="width: 20px; background-color: lightgrey">x</td>';
for ($z = 0; $z <= 20; $z++) {
    $color = ($z % 2) ? 'lightgrey' : 'white';
    /* // Le code ci-dessus est un ternaire, il est
    // équivalent au code suivant :
    if ($z % 2) {
        // Pair
        $color = 'lightgrey';
    } else {
        // Pas pair
        $color = 'white';
    } */
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$z.'</td>';
}
echo '</tr></thead>';
for ($i = 0; $i <= 20; $i++) {
    $color = ($i % 2) ? 'lightgrey' : 'white';
    $direction = ($color === 'lightgrey') ? 1 : 0; // Sens du background color
    echo "\t<tr>"; // "\t" génére une tabulation
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$i.'</td>';
    for ($j = 0; $j <= 20; $j++) {
        $color = ($j % 2 === $direction) ? 'lightgrey' : 'white';
        $color = ($i === $j) ? 'grey' : $color; // Gris foncé sur le carré
        echo '<td align="center" style="width: 20px; background-color: '.$color.'">'.$i * $j.'</td>';
    }
    echo '</tr>';
}
echo '</table>';



?>