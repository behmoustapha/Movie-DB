<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  $movieId = $_GET['movieId']; ?>
<?php  $details = details($movieId); ?>



<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$details['poster_path']; ?>" >
            <p class="lh-sm">
                <h1><?php echo $details['title']; ?> </h1>
              </p>  
              <div class="row row-cols-1">
                <p class=" lh-sm">

                <?php echo $details['overview']; ?>
              </p> 
            </div>
    </div>
    
  </div>
</div>

<?php require("footer.php"); ?>