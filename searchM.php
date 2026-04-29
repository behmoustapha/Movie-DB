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

<?php  $query = $_GET['query']; ?>
<?php  $searchM = searchM($query, $pagesuivante); ?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">
      <?php echo"<h4>Résultats pour '$query' </h4>" ?>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach($searchM as $movie) : ?> 
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
                <strong><?php 
                        if($movie['title'] == null){
                          echo("Titre non trouvé");
                        }
                        else{
                          echo $movie['title']; 
                        }?></strong>
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