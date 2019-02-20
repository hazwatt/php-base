<?php 

// on va créer une connexion à la base de données avec PDO
 $db = new PDO('mysql:host=localhost;dbname=netflix2','root','');

//permet de definir des constantes
define('DB_HOST','mysql.localhost');
define('DB_NAME','netflix2');
define('DB_USER','root');
define('DB_PASSWORD','');

// on peut utiliser le bloc try catch pour attraper une erreur (exeption) si elle se produit
try{
    $db = new PDO('mysql:host=localhost;port=3306;dbname=netflix2;charset=UTF8','root','',
    //on active les erreur PDO
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
}catch (exeption $e){
    echo '<span style="color:red">'.$e->getMessage().'</span>';
}
// ecrire la requete permettant de recuperer tous les films
$query=$db->query('SELECT * FROM movie');
$results = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($results);
// ecrire la requete permettant de recuperer tous les acteurs
$query=$db->query('SELECT * FROM actor');
$results = $query->fetchAll(PDO::FETCH_ASSOC);
// on peut parcourir le tableau de resultat
foreach ($results as $actor){
    echo '<h2>'.$actor['firstname'].' '.$actor['name'].'</h2>';
}
// ecrire la requete permettant de recuperer le film heat
$query = $db->query('SELECT * FROM movie WHERE id = 4');
$results = $query->fetch();
var_dump($results);
echo $results['name'];