<?php
$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];
foreach($eleves as $eleve){
   echo $eleve['nom'];
   echo ' a eu ';
   foreach($eleve['notes'] as $index => $note){
    
       if($index == count($eleve['notes'])-1){
           $v=' . ';
       }elseif($index == count($eleve['notes'])-2){
           $v=' et ';
       }else{
           $v=' , ';
       }
       echo $note.$v;
   }
   echo '<br/>';
}
$somme=0;
 foreach($eleves[2]['notes'] as $note){
     
     $somme = $somme + $note;
 }
 $moyenne = $somme/count($eleves[2]['notes']);
 echo 'Jean a une moyenne de '.$moyenne;

 foreach($eleves as $eleve){
     $somme = 0;
     foreach($eleve['notes'] as $note){
        $somme = $somme + $note;
     }
     $moyenne = $somme/count($eleve['notes']);
     if($moyenne < 10){
echo '<br/>'.$eleve['nom'].' n\'a pas la moyenne';
     }
     else{
         echo '<br/>'.$eleve['nom'].' a la moyenne';
     }
// echo '<br/>'.$eleve['nom'].' a une moyenne de '.$moyenne;
 }