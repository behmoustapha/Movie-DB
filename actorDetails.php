<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  $actorId = $_GET['actorId']; ?>
<?php  $details = acteur($actorId); ?>



<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$details['profile_path']; ?>" >
              <div style="">
                <p class="lh-sm">
                <h1><?php echo $details['name']; ?> </h1>
              </p> 
                <p><?php echo $details['biography']; ?></p>
                <p><?php echo $details['birthday']; ?></p>
                <p><?php echo $details['place_of_birth']; ?></p>
              </div>
      </div>
  </div>
</div>




<?php require("footer.php"); ?>