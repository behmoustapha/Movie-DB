<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  $movieId = $_GET['movieId']; ?>
<?php  $details = details($movieId); ?>
<?php  $acteurs = acteurs($movieId); ?>



<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$details['poster_path']; ?>" >
              <div style="">
                <p class="lh-sm">
                <h1><?php echo $details['title']; ?> </h1>
              </p> 
                <p><?php echo $details['overview']; ?></p>
              </div>
      </div>
  </div>
</div>


<?php foreach($acteurs as $acteurs) : ?>  
        <div class="container">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$acteurs['profile_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">    
              <p class=" lh-sm">
                <strong><?php echo $acteurs['name']; ?></strong>
              </p>
              <button type="button" class="btn btn-primary mt-auto" onclick="location.href='actorDetails.php?actorId=<?=$acteurs['id']?>'" >Profil</button>
            </div>
          </div>
        </div>
     <?php endforeach; ?>




<?php require("footer.php"); ?>