
<?php
// On inclus le fichier header.php sur la page
include(__DIR__.'/../partials/header.php');
?>

<?php

/**
 * Sur cette page, on affichera la liste des catégories. Il n'y aura pas la sidebar ni le carousel.
 * On pourra cliquer sur une catégorie, par exemple, si on clique sur la catégorie 5, on va sur
 * le lien category_single?id=5.
 */
$query = $db->query('SELECT * FROM category');
$categorie = $query->fetchAll();
?><div class="container">
<div class="row">
 <?php foreach($categorie as $item)  { ?>
    <div class="col-6 text-center my-2">
    <a href="category_single.php?id=<?= $item['id']; ?>" class=""><?php echo $item['name'] ?></a>
    </div>
<?php   } ?>

</div>
</div>


<?php
include(__DIR__.'/../partials/footer.php');
?>