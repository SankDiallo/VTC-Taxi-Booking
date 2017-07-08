<footer class="w3-center w3-li-grey w3-padding-64 w3-opacity w3-hover-opacity-off">
<a href="#home" class="w3-btn w3-padding w3-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Haut de page</a>
<div class="w3-row-padding">
    <div class="w3-half">
        <p  class="w3-center w3-xlarge w3-text-green"><b>Paiement sécurisé</b></p>
        <p><img src="<?= $racine ?>images/accepted.png" alt="paiement sécurisé"/></p>
    </div>
    <div class="w3-half">
        <div class="w3-xlarge w3-section">
            <a href="https://www.facebook.com/transcarparis/" target="_blank"><i class="fa fa-facebook-official w3-hover-text-indigo"></i></a>
            <i class="fa fa-twitter w3-hover-text-light-blue"></i>
            <i class="fa fa-linkedin w3-hover-text-indigo"></i>
        </div>
        <p><a href="<?= MySettings::$_prefixSite ?>cgv/">Conditions Générales De Ventes</a></p>
        <p><a href="<?= MySettings::$_prefixSite ?>mentions-legales/">Mentions Légales</a></p>
    </div>
</div>

          <p class="w3-small">
            <span class="w3-tag w3-black w3-margin-bottom">Transcar Paris</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Uber</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Chauffeur privé</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">VTC</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">transport</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">personnes</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">TPMR</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">forfait aéroport</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">forfait gares</span>
            <span class="w3-tag w3-grey w3-small w3-margin-bottom">réservation vtc</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">cab</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">transcar</span>
             <span class="w3-tag w3-grey w3-small w3-margin-bottom">réserver vtc</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">forfait taxi aeroport paris</span><span class="w3-tag w3-grey w3-small w3-margin-bottom">vtc prix</span><span class="w3-tag w3-grey w3-small w3-margin-bottom">prix taxi aeroport paris</span>
<?php
$page = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$page = $page[0];
if ($page == 'chauffeur-prive-vtc-tarifs-prix') { $fileSeo = 'view/seo/seoTarifs.txt'; }
elseif ($page == 'aeroport-paris-orly') { $fileSeo = $racine.'view/seo/seoOrly.txt'; }
elseif ($page == 'aeroport-paris-roissy-charles-de-gaulle') { $fileSeo = $racine.'view/seo/seoCDG.txt'; }
else {
    $fileSeo = 'view/seo/seo.txt';
}
/*Ouverture du fichier en lecture seule*/
$handle = fopen($fileSeo, 'r');
/*Si on a réussi à ouvrir le fichier*/
if ($handle)
{
    /*Tant que l'on est pas à la fin du fichier*/
    while (!feof($handle))
    {
        /*On lit la ligne courante*/
        $buffer = fgets($handle);
        /*On l'affiche*/
        echo '<span class="w3-tag w3-small w3-grey w3-tiny w3-margin-bottom">' . $buffer . '</span> ';
    }
    /*On ferme le fichier*/
    fclose($handle);
}
?>
          </p>
        <p><?= MySettings::$_society ?> - Tous droits réservés © 2016-2017</p>

</footer>