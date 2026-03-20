<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  $actorId = $_GET['actorId']; ?>
<?php  $details = acteur($actorId); ?>
<?php  $topfilms = topFilms($actorId); ?>



<div class="album py-5 bg-body-tertiary">
  <div class="">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$details['profile_path']; ?>" >
              <div style="">
                <p class="lh-sm">
                <h1><?php echo $details['name']; ?> </h1>
              </p> 
                <p><?php 
                  if($details['biography'] != NULL){
                    echo("BIOGRAPHIE: ". $details['biography']);

                  }
                  else{
                    echo("Pas de biographie");
                  }
                   ?></p>
                <p><?php echo ("Date de naissance: ". $details['birthday']); ?></p>
                <p><?php echo ("Lieu de naissance: ". $details['place_of_birth']); ?></p>
              </div>
      </div>
  </div>
</div>

<?php foreach($topfilms as $films) : ?>  
        <div class="container">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$films['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">    
              <p class=" lh-sm">
                <strong><?php echo $films['title']; ?></strong>
              </p>
              <button type="button" class="btn btn-primary mt-auto" onclick="location.href='movieDetails.php?movieId=<?=$films['id']?>'" >Description</button>
            </div>
          </div>
        </div>
     <?php endforeach; ?>


<?php require("footer.php"); ?>