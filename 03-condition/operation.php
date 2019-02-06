<?php
$chiffre = 0;
$nombre = 5;
$encore = 8;
$resultat = 0;
$resutat = $chiffre + $nombre + $encore ;
$resultat1 = $chiffre * ($nombre - $encore);
$resultat2 = ($encore - $nombre)/ $chiffre;
 echo $chiffre." + ".$nombre." + ".$encore." = ".$resultat ."<br/>";
 echo  $chiffre. '* ('.$nombre. '-' .$encore.') = '.$resultat1."<br/>"; 
 echo '('.$encore.' - '.$nombre.')/ '.$chiffre.' = '.$resultat2."<br/>"; 
if ($resultat < 20 || $resultat2 < 20 || $resultat3 < 20){
    echo 'une des operation renvoie moins de 20';
}
?>
