<?php echo '<link rel="stylesheet" href="acceuil.css">';
      echo ' <section id="cars"><h1 class="section-title">Nos vehicules</h1></section>';
     

?>

<!--creation-page-nos_voitures.php-->

 <?php $server_uri = ($_SERVER["REQUEST_URI"]); ?>

<div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach($articles as $key=>$article) { ?>
        <div class="col">
          <div class="card shadow-sm">
          <img class="img-car"src="vehicules/<?=htmlentities($article["image"]) ?>" alt="car" height="250">
            <div class="card-body">
            <h4 class="card-title"><?=htmlentities($article["title"])  ?></h4>
              <div class="d-flex justify-content-between align-items-center">
              <a href="voiture-1.php?id=<?=$key?>">EN SAVOIR +</a>
              </div>
            </div>
          </div>
         </div>
        <?php } ?>
        
        <?php echo '<link rel="stylesheet" href="acceuil.css">'
             
              
        ?>
