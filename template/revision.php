<?php echo '<link rel="stylesheet" href="style.css">'; ?>
      <?php $server_method = ($_SERVER["REQUEST_METHOD"]); ?>
      
        
    <!--creation-page-revision.php---->
    
    
    
    <form action="contact.php" action="<?=$_SERVER['REQUEST_METHOD'] ?> " method="GET">
    <div id="content">
    <div class="scroller">
      
      <div class="titre">
      <h4>Obtenez un devis en ligne</h4>
      <p>et prenez rendez-vous en quelques clics !</p>
    </div>
    
    <label for="presta-select">Nos préstations</label>
    <select id="prest-select">
                    
          <optgroup label="1-freinage">
            <option>Plaquettes de freins avant - Remplacement</option>
            <option>Disques et plaquettes de freins avant - Remplacement </option>
            <option> Plaquettes de freins arrière - Remplacement</option>
            <option> Disques et plaquettes de freins arrière - Remplacement</option>
            <option>Tambours de frein arrière - Remplacement</option>
            <option>Liquide de frein - Purge et remplacement</option>
          <optgroup label="2-RÉVISION ET ENTRETIEN">    
            <option> Révision Garantie Constructeur </option>
            <option> Vidange moteur + changement filtre à huile</option>
            <option>  Filtre d'habitacle - Remplacement</option>
            <option> Liquide Ad Blue - Remplacement</option>
            <option>Liquide de refroidissement - Remplacement</option>
          <optgroup label="3-ÉLECTRICITE - DÉMARRAGE">
            <option> Batterie - Remplacement</option>
            <option>Phares classiques - Réglages</option>
            <option>  Phares xénon - Réglage</option>
            <option> Phare - Rénovation</option>
            <option> Alternateur - Remplacement</option>
            <option>Démarreur - Remplacement</option>
          </optgroup>
        </select>  
     

   
                <label for="presta-select">Votre immatriculation*</label>
                <input class="mandatory" type="text" name="imma" id="imma" value="" placeholder="AA-111-BB">

             
       
                    
        <div class="bloc blocville  ">
                <div class="tablebox">
                </div>
                </div>
                <label for="presta-select">Votre adresse*</label>
                <input type="text" id="ville" value="" size="40"
                               class="inputville" placeholder="Ville ou code Postal*" />
                               
        
                <label for="presta-select">Votre Kilomètrage*</label>
                <input class=" numericlimit" type="number" min="0" max="250000" name="chiffres" id="km" placeholder="000000" value="">
        

      
              <div>
                <input type="submit" class="validate" data-container="bloc_step1" value="validez">
              </div>
              <label for="presta-select"><i class="champ">Champ obligatoire*</i></label>

       
        <script src="https://v3-widget.leadformance.com/v1/bridge-widget.js" data-target="#leadWidget" data-api-key="5b3c85a85c700c0011f464ec_9549c1e8-fab3-40fd-94ca-be080b57e6bf" data-api-secret="4ad6bb52-2df3-4d70-a091-391b0aca2c02" data-locale="fr" data-search-max-results="10" data-search-geolocation="true" data-custom-style-url="../wp-content/themes/gdevisTheme/lfv3_widget.css" data-custom-redirection-url="#" data-search-placeholder="Ville" data-countries="fr,re,gp,mq,gf,yt,bl">
                    </script>

    </form>
    </div>
