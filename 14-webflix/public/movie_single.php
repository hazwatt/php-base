<?php
// On inclus le fichier header.php sur la page
include(__DIR__.'/../partials/header.php');


/**
 * Récuperer les information du film
 * 1recuperer l'id dans l'URL
 * 2verifier qu'il est correct (nombre entier)
 * 3executer la requête pour recuperer le film en BDD grâce a m'ID
 * 4si le film existe, on recupere les info
 * 5si le film n'existe pas, on affiche un message pour dire que le film n'existe pas
 */

$id = intval($_GET['id']);
if(!empty($id)){
    $movieid = $db->prepare('SELECT * FROM movie WHERE id = :id');
    $movieid->bindValue(':id', $id);
    $movieid->execute();

    $movie = $movieid->fetch();
}else{
    echo 'le film n\'existe pas';
    exit; //On arrete le script

}
?>




<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="assets/img/<?php echo $movie['cover'] ?>" alt="<?php echo $movie['name'] ?>">
        </div>

        <div class="col-md-6">
            <h1><?= $movie['name']; ?></h1>
            <p> <?php echo formatFrenchDate($movie['date']) ?></p>
            <div>
            <?= $movie['description']; ?>
            </div>
        </div>
    </div>
</div>

<?php
include(__DIR__.'/../partials/footer.php');
?>