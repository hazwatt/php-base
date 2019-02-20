<?php 

// on va créer une connexion à la base de données avec PDO
 $db = new PDO('mysql:host=localhost;dbname=netflix2','root','');

//permet de definir des constantes
define('DB_HOST','mysql.localhost');
define('DB_NAME','netflix2');
define('DB_USER','root');
define('DB_PASSWORD','');

// on peut utiliser le bloc try catch pour attraper une erreur (exeption) si elle se produit

    $db = new PDO('mysql:host=localhost;port=3306;dbname=netflix2;charset=UTF8','root','',
    //on active les erreur PDO
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
if(!empty($_GET)) {
$id=intval($_GET['id']);
}else{
    die('error'); //on arrete le script PHP et on affiche un message
}
// ecrire une requete qui recupere un film par son ID
$movieid = $db->query('SELECT * FROM movie WHERE id ='.$id);
// l'ID doit provenir de l'URL
// exemple : si je saisis movie.php?id=4, la requete doit 
// recuperer le film avec l'id 4
//sur la page, on affichera le titre du film recupere
$movie = $movieid->fetch();
if($movie){
echo $movie['name'];
}else{
    echo 'le film n\'existe pas';
}


