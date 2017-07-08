<?php 
$data_site['title'] = 'Voir les prix et tarifs de votre chauffeur VTC pour Roissy, Orly, Beauvais et Paris - Ile-de-France';
$data_site['index'] = 'index';
include 'header.php' ;
?>
<div class="bgimgr-1 w3-opacity w3-display-container" id="home">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">
        TARIFS
    </span>
  </div>
</div>
    

<div class="w3-padding-64 w3-white w3-content w3-container" style="max-width:1200px">
    <div class="w3-center w3-padding-large">
    <h1 class="w3-xxlarge w3-text-dark-grey"> Prix d'un taxi ? 20% plus cher !</h1>
    </div>
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h2 class="w3-xxlarge"><b>Nos Tarifs VTC</b></h2>
        <h2 class="w3-xlarge w3-text-green"><b>Le Prix est fixe</b></h2>
        <p class="w3-large">Retrouvez les prix de votre chauffeur VTC en berline classe eco ainsi que les préstations fournis par notre société. Réservez un chauffeur privé en berline à prix fixe et  sans surprise pour vos transferts depuis et vers l' aéroports Roissy Charles de Gaulle (CDG), d' Orly, et de Beauvais grâce à a réservation en ligne de manière totalement sécurisée. Commandez votre chauffeur 12/24h à l'avance. Plus de stress, vous arrivez à l’heure à l’aéroport ou à votre destination de choix.</p>
      <button class="w3-btn w3-light-grey w3-padding-large w3-section w3-hide-small" onclick="window.location.href='#tarifs'">
        Découvrez nos tarifs
      </button>
    </div>
    <div class="w3-col l4 m6">
      <img src="<?= $racine ?>images/card.png" class="w3-image w3-right w3-hide-small w3-grayscale-max w3-circle" width="335" height="471" alt="Tarifs">
      <div class="w3-center w3-hide-large w3-hide-medium">
        <button class="w3-btn-block w3-light-grey w3-padding-large" onclick="window.location.href='#tarifs'">
          Découvrez nos tarifs
        </button>
      </div>
    </div>
  </div>
</div>
<section id="tarifs">
<div class="w3-content w3-container w3-padding-64 w3-center" id="about" style="max-width:1200px">
<h2 class="w3-jumbo"><b>Nos Forfaits</b></h2>
  <p class="w3-large">Choisissez le forfait qui correspond à vos besoins.</p>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-light-grey w3-xlarge w3-padding-32">Paris - Roissy CDG</li>
          <li class="w3-padding-16">Berline Eco/Affaires</li>
          <li class="w3-padding-16">3 Passagers inclus</li>
          <li class="w3-padding-16">4 bagages inclus</li>
          <li class="w3-padding-16">Prix fixe</li>
          <li class="w3-padding-16">20 minutes d'attente offertes</li>
          <li class="w3-padding-16">
              <h3><del>55,00 € TTC</del></h3>
              <h2>49,90 € TTC*</h2>
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
          <li class="w3-padding-16">3 Passagers inclus</li>
          <li class="w3-padding-16">4 bagages inclus</li>
          <li class="w3-padding-16">Prix fixe</li>
          <li class="w3-padding-16">20 minutes d'attente offertes</li>
          <li class="w3-padding-16">
            <h3><del>50,00 € TTC</del></h3>
            <h2>44,90 € TTC*</h2>
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
          <li class="w3-padding-16">3 Passagers inclus</li>
          <li class="w3-padding-16">4 bagages inclus</li>
          <li class="w3-padding-16">Prix fixe</li>
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
<!-- Footer -->
<?php include 'footer.php';?>

<script src="<?= $racine ?>js/menu.js"></script>

</script>
</body>
</html>