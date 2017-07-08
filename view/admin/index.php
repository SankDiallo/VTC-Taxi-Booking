<?php include 'header.php' ; ?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Mon Tableau de Bord</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-car w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?= MySettings::$_reservations['1days']['total'] ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Demain</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-car w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?= MySettings::$_reservations['2days']['total'] ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Après Demain</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-file-text-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?= MySettings::$_reservations['all']['total'] ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Réservations</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-eur w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?= MySettings::$_reservations['prix']['total'] ?> €</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-container">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
        <?php foreach ($reservation as $value): ?>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td><a href="<?= MySettings::$_prefixSite ?>bon/<?= $value['id']?>/" target="_blank"><?= $value['reference']?></a></td>
            <td><?= $value['date_course']?> à <?= $value['heure_course']?></td>
            <td><?= $value['nom']?> <?= $value['prenom']?></td>
            <td><i><?= $value['prix']?> €</i></td>
          </tr>
        <?php endforeach ?>
        </table>
        <div class="w3-center w3-margin">
        <div class="w3-bar w3-border">
          <?php for ($i = 1 ; $i <= $nombreDePages ; $i++): ?>
          <a href="<?= MySettings::$_prefixSite ?>admin/<?= $i ?>/" class="w3-bar-item w3-button"><?= $i ?></a>
          <? endfor ?>
        </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
 
  <!-- Footer -->
<?php include 'footer.php' ; ?>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
