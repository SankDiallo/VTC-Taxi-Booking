<?php include 'header.php' ;?>
<div class="bgimgr-1 w3-opacity w3-display-container" id="home">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">
        RESERVATION
    </span>
  </div>
</div>
<section id="reser">
<div class="w3-content w3-container w3-padding-64" id="about" style="max-width:1200px">
          <h2 class="w3-center w3-xxlarge w3-text-dark-grey">RÉCAPITULATIF DE LA RESERVATION</h2>
    
 <div class="w3-row w3-padding-32 w3-section">
          <div class="w3-col m8 w3-container w3-section">
    <div class="w3-container w3-card-2 w3-li-grey w3-text-dark-grey">
        <form method="post" id="payment-form" action="" enctype="multipart/form-data" name="booking" novalidate>
            <h2 class="w3-center">RÉSERVATION EN LIGNE</h2>
            <p class="w3-center">Veuillez compléter les informations ci-dessous afin de finaliser votre réservation <br />ou appelez nous au <b><?= MySettings::$_phone ?></b></p>
            <noscript>
                <div class="w3-panel w3-card-2 w3-pale-red w3-leftbar w3-rightbar w3-border-red">
                <p>JavaScript est désactivé dans votre navigateur.<br />
                  Veuillez activer JavaScript dans votre navigateur ou installer un navigateur avec JavaScript pour pouvoir effectuer votre réservation sur ce site.</p>
              </div>
            </noscript>

        <?php require_once 'reponse.php' ;?>
            
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="nom" required="" data-parsley-length="[3, 20]" type="text" placeholder="Nom">
            </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="prenom" required="" data-parsley-length="[3, 20]" type="text" placeholder="Prénom">
            </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" data-parsley-type="email" required="" name="email" type="text" placeholder="Email">
            </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="telephone" type="tel" required="" data-parsley-type="digits" placeholder="Numéro de téléphone">
            </div>
        </div>
        <div class="w3-row-padding">
            <div class="w3-half">
                <label>Passagers</label>
                <input class="w3-input w3-border" id="passenger" name="passagers" required="" data-parsley-type="digits" min="1" max="8" value="1" type="number">
            </div>
            <div class="w3-half">
                <label>Numéro de vol (si nécéssaire)</label>
                <input class="w3-input w3-border" type="text" name="volNumber" placeholder="AF 3321">
            </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="note" type="text" placeholder="Note pour le chauffeur">
            </div>
        </div>
        <hr>
         <div class="w3-panel w3-pale-green w3-bottombar w3-border-green w3-border w3-large">
          <p>Prix : <?= $datas['PRIX'] ?> € TTC</p>
        </div>
        <hr>
        <h3>Mode de paiement</h3>
        <div class="w3-row-padding paiement w3-margin-bottom">
          <div class="w3-half">
            <p><input class="w3-radio" type="radio" name="typePaiement" value="1" checked><label class="w3-validate w3-large"> Paiment à bord</label><img src="<?= $racine ?>images/cash.png"></p>
          </div>
          <div class="w3-half">
            <p><input class="w3-radio" type="radio" name="typePaiement" value="2"><label class="w3-validate w3-large"> Carte bancaire</label><img src="<?= $racine ?>images/cb.png"></p>
          </div>
        </div>
        <hr>
        <?php include 'cartebancaire.php' ;?>
            <p class="w3-small">En validant la réservation, vous acceptez les <a href="<?= MySettings::$_prefixSite ?>cgv/" target="_blank">Conditions Générales De Ventes</a>.</p>
            <p id="loading" style="margin:8px 0px; display:none;" class="w3-center"><img src="<?= $racine ?>images/ajax-loader.gif" alt="Chargement..." /></p>
        <button name="reservd" class="w3-btn w3-green w3-padding-large w3-section" type="submit">VALIDER LA RESERVATION</button>
        </form> 
        <p>Les transactions effectuées sur <?= MySettings::$_link ?> sont 100% sécurisées par le système de paiement de notre partenaire : https://stripe.com/fr.<br />Toutes les informations échangées pour traiter le paiement sont cryptées grâce au protocole SSL.</p>
    </div>
    </div>
              
      <div class="w3-col m4 w3-container w3-section">
            <div class="w3-container w3-card-2 w3-li-gre w3-margin-bottom w3-text-dark-grey w3-li-grey">
            <?php include 'infoBooking.php' ;?>
            </div>
      <div class="w3-card-2 w3-li-gre">
              <div id="mapsDevis"></div>
          <p class="w3-center"><b>*ITINERAIRE INDICATIF </b></p>
          </div>
     </div>
    </div>
</div>

</section>
<!-- Footer -->
<?php include 'footer.php';?>
<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=<?= MySettings::$_keyGoogle ?>"></script>
<script src="<?= $racine ?>js/parsley.min.js"></script>
<script src="<?= $racine ?>js/menu.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$('#payment-form').parsley();
$(document).ready(function() {
    $("input[name='typePaiement']").change(function(e){
            if (this.value == '1') {
                $('#cc-number').prop('required',false);
                $('#cc-mm').prop('required',false);
                $('#cc-yy').prop('required',false);
                $('#cc-cvc').prop('required',false);
                $('#Payment-card').hide('slow');
            }
            else if (this.value == '2') {
                $('#cc-number').prop('required',true);
                $('#cc-mm').prop('required',true);
                $('#cc-yy').prop('required',true);
                $('#cc-cvc').prop('required',true);
                $('#Payment-card').show('slow');
            }
    });
});
Stripe.setPublishableKey('<?= MySettings::$_pkey_stripe ?>');

$(function() {
  var $form = $('#payment-form');
  $form.submit(function(event) {
      $('#loading').show();

      if ($("input[type=radio][name=typePaiement]:checked").attr('value') == '1') { 
          $form.get(0).submit();
      }
      else {
        // Disable the submit button to prevent repeated clicks:
        $form.find('.submit').prop('disabled', true);

        // Request a token from Stripe:
        Stripe.card.createToken($form, stripeResponseHandler);

        // Prevent the form from being submitted:
        return false;
      }
  });
});
function stripeResponseHandler(status, response) {
  // Grab the form:
  var $form = $('#payment-form');
  console.log(response);
  if (response.error) { // Problem!

    // Show the errors on the form:
    $('#loading').hide();
    $('#stripe-error').show('slow');
    $form.find('.payment-errors').text(response.error.message);
    $form.find('.submit').prop('disabled', false); // Re-enable submission

  } else { // Token was created!

    // Get the token ID:
    var token = response.id;

    // Insert the token ID into the form so it gets submitted to the server:
    $form.append($('<input type="hidden" name="stripeToken">').val(token));

    // Submit the form:
    $form.get(0).submit();
  }
};

function initMap() {
  var point_a = {lat: <?= $datas['AD_LAT'] ?>, lng: <?= $datas['AD_LNG'] ?>};
  var point_b = {lat: <?= $datas['AA_LAT'] ?>, lng: <?= $datas['AA_LNG'] ?>};

  var map = new google.maps.Map(document.getElementById('mapsDevis'), {
    center: point_a,
    scrollwheel: false,
    zoom: 7
  });

  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });

  // Set destination, origin and travel mode.
  var request = {
    destination: point_b,
    origin: point_a,
    travelMode: google.maps.TravelMode.DRIVING
  };

  // Pass the directions request to the directions service.
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });
}
google.maps.event.addDomListener(window, 'load', initMap);

</script>
</body>
</html>