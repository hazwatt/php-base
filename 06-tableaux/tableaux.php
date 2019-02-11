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
   echo ' a eu <br/>';
   foreach($eleve['notes'] as $note){
       if(count(-1)){
           $v='et';
       }else{
           $v=',';
       }
       echo $note.$v;
   }
}


