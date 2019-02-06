<?php
/*for($i=0;$i<9;$i++){
    echo '*';
}
*/
'<hr/>';
 for($i=0;$i<10;$i++){
    echo '<br/>';
    for($j=$i;$j<9;$j++){
        echo '*';
    }
 }

for($i=0;$i<4;$i++){
    echo'<br/>';
    for($j=0;$j<4;$j++){
        if($j<1&&$j>3){
            echo ' ';
        }else{
            echo '*';
        }
        
    }
}