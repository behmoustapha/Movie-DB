<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  $movieId = $_GET['movieId']; ?>
<?php  $details = details($movieId); ?>
<?php  $acteurs = acteurs($movieId); ?>
<?php  $trailer = trailer($movieId); ?>



<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$details['poster_path']; ?>" >
              <div style="">
                <p class="lh-sm">
                <h1><?php echo $details['title']; ?> </h1>
              </p> 
                <p><?php if($details['overview'] != NULL){
                            echo $details['overview'];
                            }
                            else{
                              echo("Aucun synopsys disponible");
                            } ?></p>
                <p><?php echo ("Date de sortie : ". $details['release_date']); ?></p>
                <p><?php echo ("Noté : ". $details['vote_average']. "/10"); ?></p>
                <p><?php echo ("Nombre de notes : ". $details['vote_count']); ?></p>
              </div>
      </div>
  </div>
</div>

<p class="lh-sm">
  <h2 class="text-center">Bande annonce(s)</h2>
</p> 

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
<?php foreach($trailer as $trailer) : ?> 
  <?php $t = $trailer['key']?> 
  <?php echo"<iframe width='672' height='378' src='https://www.youtube.com/embed/$t' frameborder='0' allowfullscreen></iframe>"; ?> 
     <?php endforeach; ?>
    </div>
    <div class="col">
    </div>  
  </div>
</div>

<h2 class="text-center">Acteurs</h2>


<div class="album py-5 bg-body-tertiary ">
  <div class="container">
    <div class ="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      <?php foreach($acteurs as $acteurs) : ?>  
          <div class="col">
            <div class="card h-100 shadow-sm">

            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$acteurs['profile_path']; ?>" >
            <div class="card-body d-flex flex-column">    
              <p class=" card-text">
                <strong><?php echo $acteurs['name']; ?></strong>
              </p>

              <button type="button" class="btn btn-primary mt-auto" onclick="location.href='actorDetails.php?actorId=<?=$acteurs['id']?>'" >Profil</button>
            </div>
          </div>
        </div>    
      <?php endforeach; ?>
    </div>
  </div>
</div>



<?php require("footer.php"); ?>