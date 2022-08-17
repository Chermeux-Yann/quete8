<form action="index.php" name="formu" method="POST" class="mr-2"  >
 
<!-- prenom -->
  <div class="form-group  ">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control bg-dark text-white" name="prenom" id="text" aria-describedby="text"required>
   <!-- nom -->
  </div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control bg-dark text-white" name="nom" id="nom"required>
  </div>
  <!-- âge -->
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" required step="1" min="10" max=60 class="form-control bg-dark text-white" name="age"required>
  </div>
  <!-- taille -->
  <div class="input-group mb-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-dark text-white">Taille (entre 1.6 et 2m)</div>
    </div>
    <input type="number" required step="0.01" min="1.6" max=2 class="form-control bg-dark text-white" name="taille" id="inlineFormInputGroupUsername2" required>
    <div class="input-group-text bg-dark text-white">m </div></div>
  <!-- choix apprenants ou formateur -->
  <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio"  value="apprenants" class="custom-control-input" required>
  <label class="custom-control-label" for="customRadio1">Apprenants</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" value="formateur" class="custom-control-input "required>
  <label class="custom-control-label" for="customRadio2">Formateur</label>
</div>
<!-- enregistrer les données -->
  <button type="submit"  name="submit"class="btn btn-dark float-right">enregistre les données</button>
 

</form>