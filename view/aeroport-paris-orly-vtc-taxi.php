<?php 
$data_site['title'] = 'Réservez un chauffeur privé VTC aéroport de Paris Orly, moins cher qu\'un taxi.';
include 'header.php' ;
?>
<div class="bgimg-5 w3-opacity w3-display-container" id="home">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-xlarge w3-black w3-large w3-wide w3-animate-opacity">
        Paris-Orly
    </span>
  </div>
</div>
    

<div class="w3-padding-64 w3-white">
    <div class="w3-center w3-padding-large">
    <h1 class="w3-xxlarge w3-text-dark-grey"> Réservez votre chauffeur VTC, mieux qu'un taxi vers ou depuis l'aéroport d'Orly</h1>
    </div>
  <div class="w3-row-padding">
      <div class="w3-col l8 m6 w3-center">
      <h2 class="w3-xxlarge w3-text-dark-grey"><b>Forfait Aéroport</b></h2>
      <h3 class="w3-xlarge w3-text-green">Transfert entre Paris et l'aéroport d'Orly en VTC</h3>
      <p class="w3-large w3-text-dark-grey">Votre chauffeur VTC vous assure vos transferts de Paris vers l’aéroport de Paris Orly dès 44.90 €.<br />
        Réservation facile. Transfert aéroport moins cher qu'un taxi! Prix fixe, 4 passagers et bagages inclus.
    Si vous arrivez à l'aéroport d'Orly, votre chauffeur vous récupère au point de rdv et s'occupe de vos sacs et bagages. N'attendez plus et réservez votre chauffeur privé pour vos transferts Paris – Orly.</p>
    <button class="w3-btn w3-light-grey w3-padding-large w3-sectionw3-hide-small" onclick="window.location.href='<?= MySettings::$_prefixSite ?>#res'">
       Réservation en ligne
    </button>
    </div>
    <div class="w3-col l4 m6">
      <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="<?= $racine ?>/images/terminal.jpg" alt="App" width="335" height="471">
    </div>
  </div>
</div>
<div class="w3-container w3-padding-large w3-center w3-li-grey">
      <h2 class="w3-xxxlarge w3-text-orange"><b>Infos Pratiques</b></h2>
      <p class="w3-large">Au moment de la réservation, il vous est demandé de préciser une heure d'arrivée. Si vous n'avez pas de bagage(s) enregistré(s) en soute, les 20 minutes d'attente gratuite inclus suffisent. 
Cependant si vous devez récupérer des bagages enregistrés ou si vous venez d'une destination non Européenne, prévoyez plus de temps. Nous vous conseillons d'ajouter un délai d'attente supplémentaire de 20 à 45 minutes sans oublier de renseigner votre numéro de vol.</p>
      <p class="w3-large">Temps de trajet vers l'aéroport de Paris Orly : environ 1h00 aux heures de pointes et 45min hors heures de pointes.</p>

</div>
<div class="w3-container w3-padding-64 w3-white w3-center">
    <h2 class="w3-xxxlarge w3-text-dark-grey"><b>Pourquoi nous choisir ?</b></h2>
<div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-clock-o w3-margin-bottom w3-jumbo w3-center w3-text-blue"></i>
      <p class="w3-large w3-text-dark-grey">20 minutes d'attente offertes</p>
      <p class="w3-text-dark-grey">Aux aéroports, 20 minutes d'attente sont offertes pour chaque réservation. Si votre vol est retardé ou s’il est en avance, vous n'avez rien à modifier, on s'occupe de tout et cela gratuitement.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-suitcase w3-margin-bottom w3-jumbo w3-text-brown"></i>
      <p class="w3-large w3-text-dark-grey">Bagages</p>
      <p class="w3-text-dark-grey">Ponctuel et serviable, votre chauffeur VTC vous aidera à porter vos bagages tout en vous évitant les longues files d'attente.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-user w3-margin-bottom w3-jumbo w3-text-dark-grey"></i>
      <p class="w3-large w3-text-dark-grey">Retrouver le chauffeur</p>
      <p class="w3-text-dark-grey">Votre chauffeur vous attendra au niveau de la sortie du terminal au niveau du dépose minute.<br />
        Si vous ne le trouvez pas, ne vous inquiétez pas, vous pouvez le contacter directement grâce au numéro de téléphone communiqué automatiquement par email lors de votre réservation. 
      </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-eur w3-margin-bottom w3-jumbo w3-text-yellow"></i>
      <p class="w3-large w3-text-dark-grey">Prix Forfaitaire</p>
      <p class="w3-text-dark-grey">Le prix de la course est fixe, quel que soit le nombre de passagers transportés, de bagages ou l'état du trafic.</p>
    </div>
  </div>
</div>
<!-- Footer -->
<?php include 'footer.php';?>

<script src="<?= $racine ?>js/menu.js"></script>

</script>
</body>
</html>