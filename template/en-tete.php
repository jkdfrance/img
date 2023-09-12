<?php
$mainMenu = [
  "acceuil.php" => ["menu_title" => "acceuil", "head_title" => "menu acceuil", "meta_description"=> "tout sur le garage"],
  "nos_voitures.php" =>["menu_title" => "nos vehicules", "head_title" => "acceuil menu", "meta_description" => "tous nos véhicule d'occasion","exclude" => false],
  "entretien.php" =>[ "menu_title" => " entretien", "head_title" => "infos services","meta_description" => "services & entretien"],
  "depannage.php" =>["menu_title" => "depannage", "head_title" => "infos depannage","meta_description" => "demandez un devis" ],
  "contact.php" =>[ "menu_title" => "contact", "head_title" => "infos contact", "meta_description" => "contactez nous"],
];
?>
<?php $currentPage = basename($_SERVER["SCRIPT_NAME"]); ?>




<?php echo '<link rel="stylesheet" href="acceuil.css">'; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="acceuil.css" />
    <title>Voitures d'occasion</title>
    <script src="stylesheet" href="https://kit.fontawesome.com/de8de52639.js"  crossorigin="anonymous" ></script>
  </head>
  <body>


  <!--header-page-voitures d'occasion-avec-videos-de présentation-->

  <header>
  
    <nav>
  
            <input type="checkbox" id="check">
            <label for="check" class="btn">
                <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Vincent Parrot</label>

      
        <ul class="acceuille">
           <li><a href="acceuil.php">ACCEUIL</a></li>
            <li><a href="entretien.php">Entretien</a></li>
            <li><a href="depannage.php">Depannage</a></li>
           </ul>
      
</nav>
  <img class="parkImg mb-5" src="image/parking.jpg" alt="image parking" height="350">
  <div class="parc">

</div>

</header>
   

