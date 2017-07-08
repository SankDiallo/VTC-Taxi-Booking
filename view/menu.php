<div class="w3-top">
  <ul class="w3-navbar w3-animate-top w3-white w3-opacity w3-text-dark-grey w3-padding-16" id="myNavbar">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-hover-black" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="w3-left-align"><a href="<?= MySettings::$_prefixSite ?>" class="w3-hover-dark-grey "> <b class="w3-large" style="letter-spacing:2px"><?= strtoupper(MySettings::$_society) ?></b></a></li>
    <div class="w3-hide-small w3-right">
      <li><a href="<?= MySettings::$_prefixSite ?>vtc-taxi-tarifs-prix/" class="w3-hover-light-grey"> TARIFS</a></li>
      <li><a href="<?= MySettings::$_prefixSite ?>faq/" class="w3-hover-light-grey"> FAQ</a></li>
      <li><a href="<?= MySettings::$_prefixSite ?>contact/" class="w3-hover-light-grey"> CONTACT</a></li>
      <li>
        <a href="tel:<?= MySettings::$_phone ?>" class="w3-hover-green"><i class="fa fa-phone-square w3-large"></i> <?= MySettings::$_phone ?></a></li>
      </li>
    </div>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-white">
      <li><a href="<?= MySettings::$_prefixSite ?>vtc-taxi-tarifs-prix/" class="w3-hover-light-grey"> TARIFS</a></li>
      <li><a href="<?= MySettings::$_prefixSite ?>faq/" class="w3-hover-light-grey"> FAQ</a></li>
      <li><a href="<?= MySettings::$_prefixSite ?>contact/" class="w3-hover-light-grey"> CONTACT</a></li>
      <li>
        <a href="tel:<?= MySettings::$_phone ?>" class="w3-hover-green"><i class="fa fa-phone-square w3-large"></i> <?= MySettings::$_phone ?></a></li>
      </li>
    </ul>
  </div>
</div>