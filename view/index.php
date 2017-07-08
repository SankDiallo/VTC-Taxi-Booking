<?php include 'header.php' ;?>
<div class="bgimg-1 w3-opacity w3-display-container" id="home">
    <div class="w3-display-topleftte2 w3-padding" style="max-width:800px">
    <?php require_once('reservation_view.php'); ?>
    </div>
</div>
  <div class="w3-container w3-padding-large w3-center">
      <h2 class="w3-xxxlarge"><b>Courses et réservations</b></h2>
      <h2 class="w3-xxlarge w3-text-green"><b>Comment ça marche ?</b></h2>
      <p class="w3-xlarge">Le principe est simple, il vous suffit de remplir le formulaire ci-dessus afin de calculer le montant de votre course, si le montant vous convient, cliquez sur "<span class="w3-text-green">Réservez maintenant</span>" et entrez les informations nécessaires pour la réservation de votre chauffeur privé. Une fois le paiement efféctué vous recevrez un email de confirmation contenant un récapitulatif de votre commande. Le nom, téléphone du chauffeur vtc et l'immatriculation du véhicule vous seront envoyés par email la veille de votre prise en charge de manière automatique.</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-lock w3-margin-bottom w3-jumbo w3-text-green"></i>
      <p class="w3-large">Paiement Sécurisé</p>
      <p>Les transactions effectuées sont 100% sécurisées par le système de paiement de notre partenaire STRIPE <br />
          Toutes les informations échangées pour traiter le paiement sont cryptées grâce au protocole SSL.
      </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-wifi w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Wi-Fi à bord</p>
      <p>Wi-Fi gratuit et illimité. Restez connecté même pendant votre trajet grâce au haut débit 4G.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-eur w3-margin-bottom w3-jumbo w3-text-amber"></i>
      <p class="w3-large">Tarif Fixe</p>
      <p>Tarifs compétitifs et fixés à l'avance.<br/>
        Dès la commande vous connaissez la somme exacte de votre course calculée en fonction du kilométrage ou de la prestation de service.
     </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-battery-full w3-margin-bottom w3-jumbo w3-text-black"></i>
      <p class="w3-large">Services</p>
      <p>Vous trouverez à bord bouteille d’eau, bonbons, chargeur téléphone et prise jack pour écouter votre propre musique.</p>
    </div>
  </div>

</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide w3-black w3-padding-xlarge">FORFAITS</span>
  </div>
</div>

<section id="prest">

    
<div class="w3-content w3-container w3-padding-64">
  <h2 class="w3-center">FORFAITS VTC AEROPORTS/GARES</h2>
  <p class="w3-center"><em>Découvrez plus en détail nos forfaits</em></p><br>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-light-grey w3-xlarge w3-padding-32">Paris - Roissy CDG</li>
          <li class="w3-padding-16">Berline Eco/Affaires</li>
          <li class="w3-padding-16">Prise en charge de vos bagages</li>
          <li class="w3-padding-16">Prix fixé à l'avance</li>
          <li class="w3-padding-16">20 minutes d'attente offertes</li>
          <li class="w3-padding-16">
              <h3><del>55,00 € TTC</del></h3>
              <h2>49.90 € TTC*</h2>
          </li>
          <li class="w3-li-grey w3-padding-24">
            <a href="<?= MySettings::$_prefixSite ?>aeroport-paris-roissy-charles-de-gaulle-vtc-taxi/"><button class="w3-btn w3-grey w3-padding-large w3-hover-black">Détails</button></a>
          </li>
        </ul>
      </div>
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-light-grey w3-xlarge w3-padding-32">Paris - Aéroport d'Orly</li>
          <li class="w3-padding-16">Berline Eco/Affaires</li>
          <li class="w3-padding-16">Prise en charge de vos bagages</li>
          <li class="w3-padding-16">Prix fixé à l'avance</li>
          <li class="w3-padding-16">20 minutes d'attente offertes</li>
          <li class="w3-padding-16">
            <h3><del>50,00 € TTC</del></h3>
            <h2>44.90 € TTC*</h2>
          </li>
          <li class="w3-li-grey w3-padding-24">
            <a href="<?= MySettings::$_prefixSite ?>aeroport-paris-orly-vtc-taxi/"><button class="w3-btn w3-grey w3-padding-large w3-hover-black">Détails</button></a>
          </li>
        </ul>
      </div>
      
      <div class="w3-third">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-light-grey w3-xlarge w3-padding-32">Paris - Beauvais</li>
          <li class="w3-padding-16">Berline Eco/Affaires</li>
          <li class="w3-padding-16">Prise en charge de vos bagages</li>
          <li class="w3-padding-16">Prix fixé à l'avance</li>
          <li class="w3-padding-16">20 minutes d'attente offertes</li>
          <li class="w3-padding-16">
          <h3><del>150,00 € TTC</del></h3>
            <h2>119,90 € TTC*</h2>
          </li>
          <li class="w3-li-grey w3-padding-24">
            <a href="<?= MySettings::$_prefixSite ?>aeroport-paris-beauvais-vtc-taxi/"><button class="w3-btn w3-grey w3-padding-large w3-hover-black">Détails</button></a>
          </li>
        </ul>
      </div>
    </div>
    <em>*Prix hors majoration susceptible d'être appliquée selon les heures de pointes ou la prise en charge le dimanche.</em><br>
    <em>Temps de trajet vers l'aéroport de Paris CDG : environ 1h30 aux heures de pointes et 1h hors heures de pointes</em><br>
    <em>Temps de trajet vers l'aéroport de Paris Orly : environ 1h00 aux heures de pointes et 45min hors heures de pointes</em>
</div>
</section>
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-text-white w3-xxxlarge w3-container w3-display-topright">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" style="max-width:100%" alt="">
  </div>
</div>


<!-- Footer -->
<?php include 'footer.php';?>
<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=<?= MySettings::$_keyGoogle ?>"></script>
<script src="<?= $racine ?>js/jquery.placepicker.min.js"></script>
<script src="<?= $racine ?>js/picker.js"></script>
<script src="<?= $racine ?>js/parsley.min.js"></script>
<script src="<?= $racine ?>js/menu.js"></script>
<script type="text/javascript">
    
$('#devis').parsley();
$(".placepicker").placepicker({
  });


$('#datepicker').pickadate({
  monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
  weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
  today: 'aujourd\'hui',
  clear: 'effacer',
  hiddenName: true,
  min: +1,
  formatSubmit: 'dd/mm/yyyy'
})
$('#timepicker').pickatime({
  // Escape any “rule” characters with an exclamation mark (!).
  format: 'HH:i',
  formatLabel: 'HH:i',
  formatSubmit: 'HH:i'
})
$(document).ready(function() {
    $('#devis').on('submit', function(e) {
        e.preventDefault();
        $('#load-booking').show();
 
        var $this = $(this); 
       if ($('#devis').parsley().isValid()) {
            $.ajax({
                url: $this.attr('action'), 
                type: $this.attr('method'), 
                data: $this.serialize(),
                success: function(data) { 
                    var data = JSON.parse(data);
                    $('#message-booking').empty();
                    $('#message-booking').load('view/html/quotation.php', data);
                },
                error: function () { 
                    $('#message-booking').empty();
                    $('#message-booking').html('<p><span class="w3-tag w3-xlarge w3-pale-yellow">une erreur est survenue, veuillez réessayer.</span></p>');
                },
            });
        }
    });
});

</script>
</body>
</html>