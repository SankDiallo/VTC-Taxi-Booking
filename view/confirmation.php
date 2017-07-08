<?php include 'header.php' ;?>
<div class="bgimg-1bis w3-opacity w3-display-container" id="home">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">
        Confirmation
    </span>
  </div>
</div>
<section id="reser">
<div class="w3-content w3-container w3-padding-64" id="about" style="max-width:1200px">
          <h2 class="w3-center w3-xxlarge w3-text-dark-grey">Récapitulatif de la réservation</h2>
    
 <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m8 w3-container w3-section">

<?php if($etatPayment == true AND $method_payment == 2): ?>
      <h4 class="w3-center">MERCI D'AVOIR EFFECTUÉ VOTRE RESERVATION SUR <?= strtoupper(MySettings::$_society) ?>!</h4>
      <div class="w3-panel w3-padding w3-pale-green w3-leftbar w3-border-green w3-text-grey">
            <h3 class="w3-text-green">Le paiement a été accepté.</h3>
            <p>Nous vous informons que le paiement de votre reservation n°<?= $datas['REF'] ?> a été validée.<br />
            Vous recevrez un mail avec le récapitulatif de votre reservation. Si vous n'avez rien reçu,<br /> <b>vérifiez votre dossier de courrier indésirable (spam).</b></p>
      </div>

<? elseif($etatPayment == true AND $method_payment == 1): ?>
      <h4 class="w3-center">MERCI D'AVOIR EFFECTUÉ VOTRE RESERVATION SUR <?= strtoupper(MySettings::$_society) ?>!</h4>
      <div class="w3-panel w3-padding w3-pale-green w3-leftbar w3-border-green w3-text-grey">
            <h3 class="w3-text-green">Réservation confirmée.</h3>
            <p>Nous vous informons que votre reservation n°<?= $datas['REF'] ?> a été validée.<br />
             <b>Le paiement de la course s'effectuera directement auprès du chauffeur.</b><br />
            Vous recevrez un mail avec le récapitulatif de votre reservation. Si vous n'avez rien reçu,<br /> <b>vérifiez votre dossier de courrier indésirable (spam).</b></p>
      </div>
<? elseif($etatPayment == false): ?>
      <div class="w3-panel w3-padding w3-pale-red w3-leftbar w3-border-red w3-text-grey">
              <h3 class="w3-text-red">Paiement refusé!</h3>
              <p>Votre paiement n’a pu aboutir car la transaction a été refusée.<br /> 
              Merci de vérifier et de réessayer.</p>
      </div>

<? endif ?>


    </div>
              
      <div class="w3-col m4 w3-container w3-section">
            <div class="w3-container w3-card-2 w3-li-gre w3-margin-bottom w3-text-dark-grey w3-li-grey">
              <h4 class="w3-center">Votre Réservation</h4>
              <?php include 'infoBooking.php' ;?>
            </div>
     </div>
    </div>
</div>

</section>
<!-- Footer -->
<?php include 'footer.php';?>
<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=AIzaSyBYM7ehj93A-AEdTDupTMEL7wAgOHWCTxA"></script>
<script src="<?= $racine ?>js/menu.js"></script>

</body>
</html>