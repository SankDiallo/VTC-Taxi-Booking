<!DOCTYPE html>
<html>
<title><?= MySettings::$_society ?> - Administration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/view/admin/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  <?= MySettings::$_society ?></button>
  <span class="w3-bar-item"><?= MySettings::$_society ?></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s12 w3-bar">
      <span>Bienvenue, <strong><?= $_SESSION['id_em']['username']; ?></strong></span><br>
      <a href="<?= MySettings::$_prefixSite ?>deconnexion/" class="w3-bar-item w3-button w3-padding">Déconnexion</a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Tableau de bord</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Fermer</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-laptop"></i>  Accueil</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog"></i> Paramètres</a>
  </div>
</nav>