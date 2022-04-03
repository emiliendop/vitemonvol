<?php
require_once('../controller/connexion.php');

$request = "SELECT `id`, `nom`, `description`,`nombre_place_total`,`date_debut`,`date_fin`,`prix` FROM `circuit` WHERE `type` = 1 ORDER BY `nom`";
$allcircuit = $connexion->query($request);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARCHIPEL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../Public/css/w3.css">
<link rel="stylesheet" href="../Public/css">
<link rel="stylesheet" href="../Public/css/details.css">
<style>
	body, html,h1{height: 100%;
font-style: italic;
font-family: "Amatic SC", sans-serif;

font-size:25px;}
</style>
</head>
<body>
<nav>
  
     
  <div class="w3-top">
<div class="w3-bar  w3-black w3-xlarge">
<a href="home.php" class="w3-bar-item w3-button"><i>Accueil</i></a>
      <a href="../View/home.php#circuit" class="w3-bar-item w3-button"><i>Circuits</i></a>
      <a href="#about" class="w3-bar-item w3-button"><i>A Propos</i></a>
      <a href="#contact" class="w3-bar-item w3-button"><i>Contact</i></a>
      <div class="w3-dropdown-hover w3-hide-small">
<button class="w3-button" > <i  class="fa fa-user"></i> <i class="fa fa-caret-down"></i></button>     
<div class="w3-dropdown-content w3-card-4 w3-bar-block">
<a href="login.php" class="w3-bar-item w3-button">Connexion</a>
  <a href="register.php" class="w3-bar-item w3-button">Inscription</a>
 
  <a href="#" class="w3-bar-item w3-button">Reservation</a>
  
</div>
</div>
      <div style="float: right!important;">
  <a class="w3-bar-item "><i> AGENCE DE VOYAGE</i></a>
      </div>
</div>
    
</nav>
<div class="w3-display-container" style="margin-bottom:50px">
<img src="../Public/images/voyage.webp" alt="" class="image">
  <div class="w3-display-bottomleft w3-container w3-amber  w3-hide-small"
   style="bottom:3%;width:100%">
   <h2 class="center">Visite historique en Grèce</h2>
</div>
</div>   
<h2 class="center w3-amber">LES DETAILS</h2>
<?php $connexion= new mysqli("localhost","root","","vitemonvol");
    $i=2;
    ?>

<div class="padding " style="margin-bottom:128px">
<div  class="w3-half">
<img src="../Public/images/grece.webp" style="width:458px;height:258px;" >
</div>
<div class="w3-half">
   <div class="half">
        <?php $requet="SELECT `prix` FROM `circuit` where `id`='".$i."'";
            $Result= $connexion->query($requet);
        ?>
        A partir de : <span class="amber">
        <?php while($colom=$Result->fetch_array(MYSQLI_ASSOC)):?>
                <?php echo $colom['prix'];?></li>
        <?php endwhile?>£ </span>/personne

    </div>
    <div  class="half">
        <?php $requet="SELECT `nombre_place_total` FROM `circuit` where `id`='".$i."'";
          $place= $connexion->query($requet);
        ?>
        Il reste <span class="amber">
        <?php while($colom=$place->fetch_array(MYSQLI_ASSOC)):?>
                    <?php echo $colom['nombre_place_total'];?></li>
        <?php endwhile?></span> disponible <br>
    </div>
    <div  class="half">
        <?php $requet="SELECT `date_debut` FROM `circuit` where `id`='".$i."'";
            $debut= $connexion->query($requet);
        ?>  
        Date du sejour:
        <?php while($colom=$debut->fetch_array(MYSQLI_ASSOC)):?>
                <?php echo $colom['date_debut'];?></li>
        <?php endwhile?> au 
        <?php $requet="SELECT `date_fin` FROM `circuit` where `id`='".$i."'";
            $fin= $connexion->query($requet);
        ?>  
       
        <?php while($colom=$fin->fetch_array(MYSQLI_ASSOC)):?>
                <?php echo $colom['date_fin'];?></li>
        <?php endwhile?>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-amber">RESERVATION</a>
</div> </div>

<div class=" pad half">
  <u> <h1 class="amber">RESUME</h1></u> 
  Remonter la mythique gorge de Samaria, randonner dans les Lefka Ori : les "Montagnes Blanches", flâner dans le petit village de pêcheurs de Loutro, se rendre sur le plateau de Lassithy et ses fameux moulins à vent, ou encore se baigner à la plage paradisiaque de Vaï et sa palmeraie endémique.</div>
  
<div class="row">
  <div class="columns">
    <div class="card">
      <h3>JOUR 1</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>

  <div class="columns">
    <div class="card">
      <h3>JOUR 2</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="columns">
    <div class="card">
      <h3>JOUR 3</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  
</div>
<footer class="w3-container w3-padding-32 w3-grey">  
    <div class="w3-row-padding">
      
    
      <div class="w3-third">
        <h3>GALLERIES</h3>
        <ul class="w3-ul">
          <li class="w3-padding-16 w3-hover-black">
            <img src="../Public/images/cameroun.webp" class="w3-left w3-margin-right" style="width:100px">
            <span class="w3-xlarge">A la decouverte</span><br>
            <span>du Cameroun</span>
          </li>
          <li class="w3-padding-16 w3-hover-black">
            <img src="../Public/images/dubai.jpg" class="w3-left w3-margin-right" style="width:100px; height:60px">
            <span class="w3-xlarge">A la decouverte</span><br>
            <span>de Dubai</span>
          </li> 
        </ul>
      </div>

      <div class="w3-third">
        <h3>PAYS POPULAIRES</h3>
        <p>
          <span class="w3-tag w3-black w3-margin-bottom">DESTINATION</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">London</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Assanie</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Kribi</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Berlin</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Caraibes</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Quebec</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Milan</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Nepal</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Paris</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Marseille</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Limbe</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Bruxelles</span>
        </p>
      </div>
      <div class="w3-third">
      <a href="home.php" class="w3-button w3-light-grey w3-xlarge w3-center"><i class="fa fa-arrow-up w3-margin-right"></i>revenir en haut</a>
  <br>
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity w3-margin-right"></i>
    <i class="fa fa-instagram w3-hover-opacity w3-margin-right"></i>
    <i class="fa fa-snapchat w3-hover-opacity w3-margin-right"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity w3-margin-right"></i>
    <i class="fa fa-twitter w3-hover-opacity w3-margin-right"></i>
    <i class="fa fa-linkedin w3-hover-opacity w3-margin-right"></i></div>
    <div class="posfooter">
    Copyright@<a href="#" target="_blank">2022</a>
  </div>
        </div>
    </div>
  </footer>
</body>
</html>