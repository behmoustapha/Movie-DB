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
<?php  $searchA = searchA($query, $pagesuivante); ?>


<div class="album py-5 bg-body-tertiary">
  <div class="container">
       <?php echo"<h4>Résultats pour '$query' </h4>" ?>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach($searchA as $actor) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php 
            if ($actor['profile_path'] == null){
              echo 'images/default-non-user-no-photo-1.jpg';
            }else{
              echo 'https://image.tmdb.org/t/p/w780/'.$actor['profile_path'];
            }?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $actor['name']; ?></strong>
              </p>
             <button type="button" class="btn btn-primary mt-auto" onclick="location.href='actorDetails.php?actorId=<?=$actor['id']?>'" >Profil</button>
            </div> 
          </div>
        </div>
     <?php endforeach; ?>
    </div>
  </div>
</div>

<h4 class="text-center">Page <?php print("$pagee/ $pagemax"); ?> </h4>

<?php require("footer.php"); ?>
<?php  ?>