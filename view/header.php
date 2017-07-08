<?php
$racine = MySettings::$_prefixSite.'view/';
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
<title><?= MySettings::$_society ?> - <?= $data_site['title'] ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="Content-Language" content="fr" />
    <meta name="language" content="fr" />
  <meta name="Description" content="Réservez un chauffeur VTC, moins cher qu'un taxi, en choisissant un forfait aéroports / gares ou un lieu de prise en charge. Prix fixe sans mauvaise surprise." />
  <meta name="Keywords" content="transport, voyageur, VTC, chauffeur privé, uber, transport de personnes, taxi, roissy, orly, charles de gaulle, navette roissy, vtc roissy pas cher, vtc aeroport paris roissy, taxi cdg paris, taxi aéroport charles de gaulle, taxi paris roissy, taxi pour roissy, forfait taxi aeroport paris, reserver un taxi pour roissy, prix taxi aeroport paris, transport aéroport orly, taxi tarif orly, prix taxi paris orly, taxi orly, taxi orly paris prix, tarif taxi aeroport orly, transfert paris orly, forfait taxi paris orly, taxi paris orly, vtc pour orly, vtc orly pas cher, taxi tarif, reservation de taxi, vtc tarif, tarif vtc, vtc prix, vtc pas cher, taxi pas cher paris, taxi pas cher, reservation taxi, reservation chauffeur vtc, commander un vtc, taxi vtc pas cher, forfait aeroport taxi, reserver un vtc, chauffeur privé" />
  <meta name="Copyright" content="<?= MySettings::$_society ?> © 2017. All Rights Reserved." />
  <meta name="Author" content="Fady michel" />
    <meta name="revisit-after" content="1 days" />
  <meta name="Identifier-Url" content="<?= MySettings::$_link ?>">
  <meta name="Robots" content="index,follow" />
  <meta name="Rating" content="general" />
  <meta name="Distribution" content="global" />
<link rel="canonical" href="<?= MySettings::$_link ?>" />
<link rel="shortcut icon" type="images/x-icon" href="<?= $racine ?>images/logo.ico">
<link rel="stylesheet" href="<?= $racine ?>css/styles.css">
<link rel="stylesheet" href="<?= $racine ?>css/site.css">
<link rel="stylesheet" href="<?= $racine ?>css/default.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="<?= $racine ?>js/jquery.js"></script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Transcar Paris VTC",
  "url": "https://www.transcarparis.fr",
  "description": "Réservez un VTC en toute Liberté en choisissant un forfait aéroport / gares ou un lieu de prise en charge, la date et l’heure exacte ainsi que le mode de paiement.",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+33184214698",
    "contactType": "customer service"
  }]
}
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: Arial, Helvetica, sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}


/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimgr-1, .bgimg-4, .bgimg-5 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('<?= $racine ?>images/paris3.jpg');
    min-height: 700px;
}
.bgimgr-1 {
    background-image: url('<?= $racine ?>images/paris3.jpg');
    min-height: 40%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("<?= $racine ?>images/mercedes.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("<?= $racine ?>images/paris2.jpg");
    min-height: 400px;
}
.bgimg-4 {
    background-image: url("<?= $racine ?>images/gare.jpg");
    min-height: 400px;
}
.bgimg-5 {
    background-image: url("<?= $racine ?>images/airport.jpg");
    min-height: 400px;
}
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimgr-1, .bgimg-4, .bgimg-5 {
        background-attachment: scroll;
    }
}
/* Adjust the position of the parallax image text */
.w3-display-middle2 {top:15%}
.w3-wide {letter-spacing: 10px;}

.w3-hover-opacity {cursor: pointer;}
.mep-select img {
    margin-bottom: -20px;
}
.paiement img {
  height: 25px;
  margin-left: 10px;
}
#mapsDevis {
    width: 100%;
    height: 400px;
    
}

</style>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1708683095812348'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1708683095812348&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>

<body>
<!-- Navbar (sit on top) -->
<?php include 'menu.php';?>