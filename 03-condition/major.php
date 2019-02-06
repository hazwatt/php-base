<?php
$age = -2;
if($age < 14 && $age >=0){
    echo 'casse toi';
} elseif($age>=14 && $age<16){
    echo 'vous ete trop jeune';
}elseif($age>=16 && $age<18){
echo 'presque';
}elseif($age < 0){
echo 'vous etes pas née';
}else{
    echo 'c\'est bon bro';
}

?>
