<?php 
$data_site['title'] = 'FAQ, Foire aux questions';
include 'header.php' ;
?>
<div class="bgimgr-1 w3-opacity w3-display-container" id="home">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-xlarge w3-black w3-large w3-wide w3-animate-opacity">
        QUESTIONS ?
    </span>
  </div>
</div>
    

<div class="w3-padding-64 w3-white w3-content w3-container" style="max-width:1200px">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
        <h1 class="w3-xxxlarge "><b> Foire aux questions</b></h1>
        <p><span class="w3-xlarge w3-text-green">Qui sommes nous ?</span><br />
            Transcar Paris est une société de transport de personnes spécialisée dans les transferts aéroports Roissy Charles de Gaulle (CDG), Orly, et l'aéroport de Beauvais. Nous gérons aussi votre transport vers au départ de Paris ou d'Ile de France ainsi que pour tous vos déplacements personnels et professionnels.Les réservations sont gérées en ligne ou par téléphone directement auprès de nos conseillers clientèle, et ce, pour tout type de préstations.<br />
            <?= MySettings::$_society ?><br/>
            SIRET : <?= MySettings::$_siret ?><br/>
            Phone: <?= MySettings::$_phone ?><br/>
            Email: <?= MySettings::$_email ?>
        </p>
        <p><span class="w3-xlarge w3-text-green">Annulation</span><br />
          - L'annulation 24 heures à l'avance = remboursement de 100%<br />
          - L'annulation 12 heures à l'avance = remboursement de 50%<br />
          - L'annulation 6 heures à l'avance = remboursement de 25%</p>
        <p><span class="w3-xlarge w3-text-green">Réservation, Paiement sécurisé</span><br />
            Les transactions effectuées sont 100% sécurisées par le système de paiement de notre partenaire STRIPE: https://stripe.com/fr. Toutes les informations échangées pour traiter le paiement sont cryptées grâce au protocole SSL.<br />
            Solution de paiement certifiée PCI/DSS de niveau 1 (le niveau de sécurité le plus élevé pour payer en ligne.).<br />
        </p>
      <button class="w3-btn w3-light-grey w3-padding-large w3-section w3-hide-small" onclick="window.location.href='<?= MySettings::$_prefixSite ?>'">
        Réservez votre chauffeur VTC
      </button>
    </div>
    <div class="w3-col l4 m6">
      <img src="<?= $racine ?>images/quest.jpg" class="w3-image w3-right w3-hide-small w3-grayscale-max w3-circle" width="335" height="471" alt="Faq">
      <div class="w3-center w3-hide-large w3-hide-medium">
        <button class="w3-btn-block w3-light-grey w3-padding-large" onclick="window.location.href='<?= MySettings::$_prefixSite ?>'">
          Réservez votre chauffeur VTC
        </button>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';?>

<script src="<?= $racine ?>js/menu.js"></script>

</script>
</body>
</html>