
<?php
// On inclus le fichier header.php sur la page
include(__DIR__.'/../partials/header.php');
?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
<?php
      $categorieid = $db->query('SELECT * FROM category');
      $categorie = $categorieid->fetchAll();
      
?>
        <h1 class="my-4">Categorie</h1>
        <div class="list-group">
       
        <?php foreach($categorie as $item)  { ?>
         <a href="#" class="list-group-item"><?php echo $item['name'] ?></a>
     <?php   } ?>
        </div>
        <a href="movie_add.php" class="btn btn-primary btn-block mt-4">Ajouter un film</a>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
         <?php $query = $db->query('SELECT * FROM movie WHERE cover IS NOT NULL ORDER BY RAND()');
         $movies = $query->fetchAll();
         
         foreach($movies as $key => $cc) { ?>
           
            <div class="carousel-item <?php if($key === 0){echo 'active'; } ?>">
              <div class="movie-cover" style="background-image: url(assets/img/<?php echo $cc['cover']; ?>)"></div>
            </div>
        <?php
         } 
        ?>
         
          
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
<?php 
$films = $db->query('SELECT * FROM movie');
$listFilms = $films->fetchAll();
foreach($listFilms as $film){
  $date = new dateTime($film['date']);
?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="movie_single.php?id=<?= $film['id']; ?>">
              <img class="card-img-top" src="assets/img/<?php echo $film['cover'] ?>" alt="<?php echo $film['name'] ?>">
              <div class="movie-cover" style="background-image: url(assets/img/<?php echo $film['cover']; ?>)"></div>
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="movie_single.php?id=<?= $film['id']; ?>"> <?php echo $film['name'] ?> </a>
                </h4>
                <h5> <?php echo formatFrenchDate($film['date']) ?> </h5>
                <p class="card-text"> <?php echo $film['description'] ?> </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">
                &#9733; 
                &#9733; 
                &#9733; 
                &#9733; 
                &#9734;
                </small>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <?php
include(__DIR__.'/../partials/footer.php');
?>
