<?php 
$data_site['title'] = 'Mentions Légales';
$data_site['index'] = 'noindex';
include 'header.php' ;
?>
<div class="bgimgr-1 w3-opacity w3-display-container" id="home">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">
        mentions l<span class="w3-hide-small">égales</span>
    </span>
  </div>
</div>
    

<div class="w3-padding-64 w3-white w3-content w3-container" style="max-width:1200px">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
        <p><span class="w3-large w3-text-green">Qui sommes nous ?</span><br />
            <?= MySettings::$_society ?><br/>
            SIRET : <?= MySettings::$_siret ?><br/>
            Phone: <?= MySettings::$_phone ?><br/>
            Email: <?= MySettings::$_email ?><br />
            Nom du résponsable : GUINATIMO OBANDZI Yann<br />
            Site hébérgé par Infomaniak.
        </p>
        <p><span class="w3-large w3-text-green">Données personnelles</span><br />
            Les informations recueillies à partir du formulaire de réservation font l’objet d’un traitement informatique destiné à : <?= MySettings::$_society ?><br/><br /><br />
            Pour la ou les finalité(s) suivante(s) :<br />

            - Générer un bon de commande / facture<br /><br />

            Le ou les destinataire(s) des données sont :<br />

            <?= MySettings::$_society ?><br /><br />

            Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée, vous disposez d’un droit d’accès et de rectification aux informations qui vous concernent.<br />

            Vous pouvez accèder aux informations vous concernant en vous adressant à :<br />

            <?= MySettings::$_email ?><br /><br />


            Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant.<br />

            Pour en savoir plus, consultez vos droits sur le site de la CNIL.</p>
        <p><span class="w3-large w3-text-green">Les cookies</span><br />
            Le site que vous visitez utilise des traceurs (cookies). Ainsi, le site est susceptible d'accéder à des informations déjà stockées dans votre équipement terminal de communications électroniques et d'y inscrire des informations.<br />
            Le site utilise exclusivement des traceurs dits "strictement nécessaires", qui ne nécessitent pas votre consentement préalable.<br />
            Nous utilisons ces traceurs pour permettre et faciliter la navigation sur le site notamment en mémorisant vos préférences de navigation définis au cours de votre session, réaliser des statistiques anonymes de visites.<br />
            Ces traceurs ne peuvent pas, techniquement, être désactivés depuis le site. Vous pouvez néanmoins vous opposer à l'utilisation de ces traceurs, exclusivement en paramétrant votre navigateur. <br />
            Ce paramétrage dépend du navigateur que vous utilisez, mais il est en général simple à réaliser : en principe, vous pouvez soit activer une fonction de navigation privée soit uniquement interdire ou restreindre les traceurs (cookies). Attention, il se peut que des traceurs aient été enregistrés sur votre périphérique avant le paramétrage de votre navigateur : dans ce cas, effacez votre historique de navigation, toujours en utilisant le paramétrage de votre navigateur.<br /><br />
            L'utilisation des traceurs est régie par l'article 32 II de la loi n° 78-17 du 6 janvier 1978, transposant l'article 5.3 de la directive 2002/58/CE du parlement européen et du conseil du 12 juillet 2002 modifiée par la directive 2009/136/CE.<br />
            Pour en savoir plus sur les cookies et traceurs, nous vous invitons à consulter le site de la CNIL : www.cnil.fr.
        </p>
    </div>
    <div class="w3-col l4 m6">
      <img src="<?= $racine ?>images/info.png" class="w3-image w3-right w3-hide-small w3-grayscale-max w3-circle" width="335" height="471" alt="Mentions Légales">
    </div>
  </div>
</div>
<!-- Footer -->
<?php include 'footer.php';?>

<script src="<?= $racine ?>js/menu.js"></script>

</script>
</body>
</html>