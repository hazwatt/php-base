<?php 
$sec= date('s');
echo date("l").' '.date('d').' '.date('M'). ' '.date('Y').', il est '.date('h').'h'.date('i').' et '.$sec.' ';
if($sec<1){
    echo 'seconde';
}else{
    echo 'secondes';
}



