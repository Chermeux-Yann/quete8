<form action="index.php" name="form" method="POST" class="mr-2"  >
  <h3>Formulaire d'ajout des données </h3>

  <div class="form-group  ">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control bg-dark text-white" name="prenom" id="text" aria-describedby="text"required>
   
  </div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control bg-dark text-white" name="nom" id="nom"required>
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" required step="1" min="10" max=60 class="form-control bg-dark text-white" name="age"required>
  </div>
  
  <div class="input-group mb-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-dark text-white">Taille (entre 1.6 et 2m)</div>
    </div>
    <input type="number" required step="0.01" min="1.6" max=2 class="form-control bg-dark text-white" name="taille" id="inlineFormInputGroupUsername2" required>
    <div class="input-group-text bg-dark text-white">m </div></div>
  
  <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio"  value="apprenants" class="custom-control-input" required>
  <label class="custom-control-label" for="customRadio1">Apprenants</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" value="formateur" class="custom-control-input "required>
  <label class="custom-control-label" for="customRadio2">Formateur</label>
</div>

  <button type="submit"  name="submit"class="btn btn-dark float-right">enregistre les données</button>
 

</form>