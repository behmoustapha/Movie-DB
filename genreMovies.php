<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>
<?php 
  $page = 1; 
  $pagee = $_GET['page'];
  if($pagee == NULL or $pagee < 0){
    $pagee = 0;
  }
  $pagesuivante = $page + $pagee; 
?>
<?php  $id = $_GET['id']; ?>
<?php  $genre = genre($id, $pagesuivante); ?>



<div class="album py-5 bg-body-tertiary">
  <div class="container">
       <h4>
        <?php 
        switch($id){
          case 28:
            echo("Films d'action");
            break;
          case 12:
            echo("Films d'aventure");
            break;
          case 16:
            echo("Films d'animation");
            break;
          case 35:
            echo("Films de comédie");
            break;
          case 80:
            echo("Films de crimes");
            break;
          case 99:
            echo("Films de crimes");
            break;
          case 18:
            echo("Films dramatiques");
            break;
          case 1075:
            echo("Films familiaux");
            break;
          case 14:
            echo("Films de fantaisie");
            break;
          case 36:
            echo("Films d'histoire");
            break;
          case 27:
            echo("Films d'horreur");
            break;
          case 10402:
            echo("Films de musique");
            break;
          case 878:
            echo("Films de science fiction");
            break;
          case 53:
            echo("Thrillers");
            break;
          case 10752:
            echo("Films de guerre");
            break;
          case 37:
            echo("Films de western");
            break; 
        }
        ?></h4>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach($genre as $movie) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php 
            if ($movie['poster_path'] == null){
              echo 'images/no-image.jpg';
            }else{
              echo 'https://image.tmdb.org/t/p/w780/'.$movie['poster_path'];
            }?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $movie['title']; ?></strong>
              </p>
             <button type="button" class="btn btn-primary mt-auto" onclick="location.href='movieDetails.php?movieId=<?=$movie['id']?>'" >Description</button>
            </div>
          </div>
        </div>
     <?php endforeach; ?>
    </div>
  </div>
</div>

<h4 class="text-center">Page <?php print("$pagee/ $pagemax"); ?> </h4>

<?php require("footer.php"); ?>