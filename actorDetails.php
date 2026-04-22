<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  $actorId = $_GET['actorId']; ?>
<?php  $details = acteur($actorId); ?>
<?php  $topfilms = topFilms($actorId); ?>



<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$details['profile_path']; ?>" >
              <div style="">
                <p class="lh-sm">
                <h1><?php echo $details['name']; ?> </h1>
              </p> 
                <p class="text-break"><?php 
                  if($details['biography'] != NULL){
                    echo("BIOGRAPHIE: ". $details['biography']);

                  }
                  else{
                    echo("BIOGRAPHIE: Non renseigné");
                  }
                   ?></p>
                <?php 
                  if($details['birthday'] != NULL){
                    echo("Date de naissance: ". $details['birthday']);

                  }
                  else{
                    echo("Date de naissance: Non renseigné");
                  }
                   ?></p>
                <p><?php 
                  if($details['place_of_birth'] != NULL){
                    echo("Lieu de naissance: ". $details['place_of_birth']);

                  }
                  else{
                    echo("Lieu de naissance: Non renseigné");
                  }
                   ?></p>
              </div>
      </div>
  </div>
</div>

<h2 class="text-center">Films </h2>


<div class="album py-5 bg-body-tertiary ">
  <div class="container">
    <div class ="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      <?php foreach($topfilms as $films) : ?>  
              <div class="col">
                <div class="card h-100 shadow-sm">

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
    </div>
  </div>
</div>



<?php require("footerOther.php"); ?>