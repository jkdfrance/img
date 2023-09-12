<?php echo '<link rel="stylesheet" href="style.css">'; ?>


<h1 class="info">DEMANDE D’INFORMATIONS</h1>



<form method="POST" action="<?=$_SERVER['PHP_SELF'] ?>">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nom</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nom" value="" required>
      <div class="valid-feedback">
      indiquer votre nom
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Prénom</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Prénom" value="" required>
      <div class="valid-feedback">
      indiquer votre prénom
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Votre email.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">ville</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Ville" required>
      <div class="invalid-feedback">
      
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Adresse</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="adresse" required>
      <div class="invalid-feedback">
      indiquer votre adresse
      </div>
    </div>


    <div class="col-md-3 mb-3">
        <label for="validationCustom05">Laisser un commentaire</label>
    <textarea id="story" name="story" rows="5" cols="33">
pour un devis ou achat d'un vehicule...
</textarea>

     
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Accépter les thermes et conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Soumettre</button>
</form>
