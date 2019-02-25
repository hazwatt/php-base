<?php 
/**
 * Ce fichier va nous permettre d'ajouter un film en base de données
 * 
 * on affichera d'abord un formulaire correctement configuré pour faire de l'upload
 * le formulaire contiendra 5 champs
 * titre
 * date
 * description
 * jaquette
 * categorie
 * 
 * Quand le formulaire sera soumis on recupere tous les champs du formulaire en php
 */

?>

<?php
// On inclus le fichier header.php sur la page
include(__DIR__.'/../partials/header.php');
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Titre</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="date">Date de sortie</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="cover">Jaquette</label>
                    <input type="file" name="cover" id="cover" class="form-control">
                </div>

                <div class="form-group">
                    <label for="category_id">Catégorie</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <?php
                            $query = $db->query('SELECT * FROM category');
                            $categories = $query->fetchAll();
                            foreach ($categories as $category) {
                                echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                            }
                        ?>
                    </select>
                </div>

                <button class="btn btn-primary btn-block">Ajouter le film</button>
            </form>
        </div>
    </div>
</div>
<?php
include(__DIR__.'/../partials/footer.php');
?>