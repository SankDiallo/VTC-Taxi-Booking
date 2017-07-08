<?php 
$data_site['title'] = 'Contactez-Nous';
include 'header.php' ;
?>
<div class="bgimgr-1 w3-opacity w3-display-container" id="home">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">
        CONTACT
    </span>
  </div>
</div>
<section id="contact">
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">HORAIRES</h3>
  <p class="w3-center"><em>7j/7 et 24h/24 avec réservation 24h à l'avance</em></p>
  <p class="w3-center"><em>Sans réservation préalable, nos chauffeurs sont disponibles immédiatement du lundi au vendredi de 7h à 00h.</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="mapsDevis" class="w3-round-large"></div>
    </div>
    <div class="w3-col m8 w3-container w3-section">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker w3-hover-text-black" style="width:30px"></i> <?= MySettings::$_adresse ?><br>
        <i class="fa fa-phone w3-hover-text-black" style="width:30px"></i> Phone: <?= MySettings::$_phone ?><br>
        <i class="fa fa-envelope w3-hover-text-black" style="width:30px"> </i> Email: <?= MySettings::$_email ?><br>
      </div>
      <p>Nous sommes joignables pendant nos horaires de travail (9h - 18h) afin de vous répondre immédiatement</p>
       <div id="reponse"></div>
        <form method="post" id="contact-form" action="/contact/" enctype="multipart/form-data">

                            <!-- The feedback message is here -->
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border w3-hover-light-grey" name="name" id="name-form" type="text" placeholder="Votre nom" name="firstname" required="" data-parsley-length="[4, 20]">
                </div>
                <div class="w3-half">
                  <input class="w3-input w3-border w3-hover-light-grey" name="email" data-parsley-type="email" required="" type="text" placeholder="Indiquez votre e mail" >
                </div>
              </div>
              <textarea class="w3-input w3-border w3-hover-light-grey" required="required" name="message" id="message-form" rows="8" cols="30" placeholder="Comment" data-parsley-minlength="10"></textarea>
              <input type="hidden" name="action" value="sendmail" id="action" />
              <button class="w3-btn w3-grey w3-right w3-padding w3-section" type="submit">
                  <i class="fa fa-paper-plane"></i> ENVOYER
                </button>
        </form>
    </div>
  </div>
</div>
</section>
<!-- Footer -->
<?php include 'footer.php';?>
<script src="<?= $racine ?>js/parsley.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=<?= MySettings::$_keyGoogle ?>"></script>
<script src="<?= $racine ?>js/menu.js"></script>
<script src="<?= $racine ?>js/ajax.js"></script>
<script>
$('#contact-form').parsley();
var myCenter = new google.maps.LatLng(48.9, 2.45); 

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:10,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("mapsDevis"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

var contactForm = document.getElementById("contact-form");
contactForm.addEventListener("submit", function (e) {
    document.getElementById("reponse").innerHTML = "";
     e.preventDefault();
    if ($('#contact-form').parsley().isValid()) {
        var data = new FormData(contactForm);
        ajaxPost(contactForm.getAttribute('action'), data,
        function (reponse) {
            var donneesRecu = JSON.parse(reponse);
                if (donneesRecu.type == "error") { 
                    document.getElementById("reponse").innerHTML += '<div class="w3-panel w3-red w3-center"><h3>Erreur !</h3><p>' + donneesRecu.text +'</p></div>'; 
                }
                else if (donneesRecu.type == "ok") { 
                    document.getElementById("reponse").innerHTML += '<div class="w3-panel w3-green w3-center"><span onclick="this.parentElement.style.display=\'none\'" class="w3-closebtn">&times;</span><h3> Message envoyé!</h3><p>' + donneesRecu.text +'</p></div>';
                }
        }
        );
    }
}); 
</script>
</body>
</html>