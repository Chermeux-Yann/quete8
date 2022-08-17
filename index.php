<?php   session_start()   ?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<body class="bg-secondary">
<?php include_once 'includes/header.php'; ?>

<!-- debut  -->
<section class="container-fluid">
<div class="row">
<div class="col-4  text-center " >
        <!--bouton home  -->
    <a type="submite" class="btn btn-block btn-outline-dark ml-2" href="index.php">Home</a>
  <?php   
if (isset($_SESSION['nav'])){
  include 'includes/ul.php';
}


?>
  <div>  
    </div>
</div>

<!-- forum -->
<div class="col-8"> 
<?php

if (isset($_POST['formulaire'])){
    include 'includes/form.php';
    
}
elseif(isset($_POST['submit'])){
    if(isset($_POST['prenom'])&& !empty($_POST['prenom']));
    $name1 = $_POST['prenom'];
    if(isset($_POST['nom'])&& !empty($_POST['nom']));
    $name2 = $_POST['nom'];
    if(isset($_POST['age'])&& !empty($_POST['age']));
    $name3 = $_POST['age'];
    if(isset($_POST['taille'])&& !empty($_POST['taille']));
    $name4 = $_POST['taille'];
    if(isset($_POST['customRadio'])&& !empty($_POST['customRadio']));
    $name5 = $_POST['customRadio'];
    $_SESSION['nav'] = ['prenom' => $name1 , 'nom' => $name2 , 'age' => $name3, 'taille' => $name4 , 'customRadio' => $name5] ;
    echo    '  <div class="alert alert-dark text-center" role="alert">
    Les données ont bien été sauvegardées
  </div>'     ;
    
}else{
  if (empty($_SESSION)){
    echo '<form name="formulaire" method="POST"  class=" btn btn-secondary "><input type="submit" name="formulaire" value="Ajouter des données" class=" btn btn-sm btn-dark "></input></form>' ;
    
  }
}

if (isset($_POST['formulaireplus'])){
  

}
elseif(isset($_POST['submit'])){
  if(isset($_POST['prenom'])&& !empty($_POST['prenom']));
  $name1 = $_POST['prenom'];
  if(isset($_POST['nom'])&& !empty($_POST['nom']));
  $name2 = $_POST['nom'];
  if(isset($_POST['age'])&& !empty($_POST['age']));
  $name3 = $_POST['age'];
  if(isset($_POST['taille'])&& !empty($_POST['taille']));
  $name4 = $_POST['taille'];
  if(isset($_POST['customRadio'])&& !empty($_POST['customRadio']));
  $name5 = $_POST['customRadio'];
  $_SESSION['nav'] = ['prenom' => $name1 , 'nom' => $name2 , 'age' => $name3, 'taille' => $name4 , 'customRadio' => $name5] ;
  echo    '  <div class="alert alert-dark text-center" role="alert">
  Les données ont bien été sauvegardées
</div>'     ;

}else{
if (empty($_SESSION)){
  echo '<form name="formulaireplus" method="POST"  class=" btn btn-secondary "><input type="submit" name="formulaireplus" value="Ajouter plus des données" class=" btn btn-sm btn-dark "></input></form>' ;
}
// fin formulaire 1
}

if (isset($_SESSION['nav']))

// debogage
?>
<?php 
if(isset($_GET['debo'])){
  echo '<h2>debugging</h2>' ;
  echo '<pre>';
 print_r($_SESSION['nav'])  ;
 echo  '</pre>';
}

// concaténation
if(isset($_GET['conca'])){
  echo '<h2> Concaténation  </h2>';
  foreach($_SESSION as $key => $value){
    ?>
    <h3> <?php     echo $value['prenom']  . ' '.  $value['nom'];         ?>    </h3>
    <?php  echo $value['age'] . ' '. 'ans, je mesure ' . $value['taille'].'m' . ' et je fais partis des ' . $value['customRadio'].' de AFCI'  ; 
  }
  ?>
  <h3> <?php echo  $value['prenom'] . ' '. strtoupper($value['nom']); ?></h3>
  <?php
  echo  $value['age'] . ' '. 'ans, je mesure ' . $value['taille'].'m' . ' et je fais partis des ' . $value['customRadio'].' de AFCI'  ;
?>
  <h3> <?php echo  $value['prenom'] . ' '. strtoupper($value['nom']); ?></h3>
  <?php
  echo  $value['age'] . ' '. 'ans, je mesure ' . str_replace('.' , ',' , $value['taille']).'m' . ' et je fais partis des ' . $value['customRadio'].' de AFCI'  ;
}
// boucle
if(isset($_GET['boucle'])){
  foreach($_SESSION as $key => $value){

    echo '<h2> loop  </h2>';
    $i = 0;
    while($i<10){
      echo 'je m\'appelle '.$value['prenom'] .' '.$value['nom'].', j\'ai '.$value['age']. ' ans et je mesure '.$value['taille'].'m <br>'  ;
      $i++;

  }
  }

}
// fonction
if(isset($_GET['fonction'])){
  echo '<h2>fonction</h2>';

  

  function phrase(){
    foreach($_SESSION['nav'] as $key => $value){
      echo 'Cette ligne correspond à la clé '. $key . ' et contient '. $value . '<br>' ;
    }
  }
 echo phrase();
 

}

// supprimer les données
if(isset($_GET['sup'])){
  session_destroy();
  echo '<h2>les données ont bien étaient supprimées</h2>';
}
?>
 
    
    
  
    </div> 
  </div>
  
</section>
<!-- fin section -->
<!-- footer -->
<?php include_once 'includes/footer.php'; ?>


<!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>