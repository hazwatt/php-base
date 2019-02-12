<?php 
//Déclarer une fonction hello
function hello(){
    echo 'Hello do you want my git';
}

//Appeller une fonction
hello();




function carré($nb1){
    $nbcarré = $nb1*$nb1;
    echo $nbcarré;
}


carré(16);

function airRectangle($L,$l){
    $air = $l*$L;
    return $air;
}

echo '<br/>'.airRectangle(10,5);


function airCercle($R){
    $p = 3.14;
    $airCercle = $R*$R*$p;
    return $airCercle;
}
echo '<br/>'.airCercle(10);

function convertirHTversTTC($prix,$taux,$bouleen){
    
    if($bouleen == false){
        $result = $prix/(($taux/100)+1);
        return $result;
    }else{
        $result = $prix*($taux/100)+$prix;
    return $result;
    }
}
echo '<br/>'.convertirHTversTTC(10,20,true);