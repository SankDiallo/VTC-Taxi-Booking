      <div class="w3-card-2 w3-opacity" style="width:100%">
          <div class="w3-container w3-black">
        <p><i class="fa fa-car w3-margin-right"></i>Réservez votre chauffeur VTC <span class="w3-hide-small">en ligne</span></p>
        </div>
          <div class="w3-container w3-padding-8 w3-white w3-text-black">
              <noscript>
                  <div class="w3-panel w3-card-2 w3-pale-red w3-leftbar w3-rightbar w3-border-red">
                  <p>JavaScript est désactivé dans votre navigateur.<br />
                    Veuillez activer JavaScript dans votre navigateur ou installer un navigateur avec JavaScript pour pouvoir effectuer votre réservation sur ce site.</p>
                </div>
              </noscript>
              <?php require_once 'reponse.php' ;?>
            <form method="post" id="devis" action="reservation/devis/" enctype="multipart/form-data" autocomplete="off">
              <div class="w3-row-padding" style="margin:0 -5px;">
                <div class="w3-half w3-margin-bottom">
                  <label><i class="fa fa-map-marker"></i> Adresse de départ</label>
                  <input required="" name="depart" class="w3-input w3-border w3-hover-border-tr placepicker" placeholder="Adresse, Aéroport, Gares" type="text" />
                </div>
                <div class="w3-half">
                  <label><i class="fa fa-map-marker"></i> Adresse de destination</label>
                  <input required="" name="arrivee" class="w3-input w3-border w3-hover-border-tr placepicker" placeholder="Adresse, Aéroport, Gares" style="width:100%;" type="text" />
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0px -5px;">
                <div class="w3-half">
                  <label><i class="fa fa-calendar"></i> Date de prise en charge</label>
                  <input  name="date-course" class="w3-input w3-border w3-hover-border-tr" id="datepicker" type="text" required=""/>
                </div>
                <div class="w3-half">
                  <label><i class="fa fa-clock-o"></i> Heure de prise en charge</label>
                <input required="" name="heure-course" class="w3-input w3-border w3-hover-border-tr" id="timepicker" type="text" />
                </div>
              </div>

              <div class="w3-row-padding mep-select">
                <div class="w3-half">
                  <p><input class="w3-radio" type="radio" name="type-car" value="1" checked><img src="<?= $racine ?>images/berline.png" alt="Berline"/><label class="w3-validate">
                    <span class="w3-padding">
                    4x <i class="fa fa-user"></i> 
                    3x <i class="fa fa-briefcase"></i>
                  </span>
                  </label></p>
                </div>
                <div class="w3-half">
                  <p><input class="w3-radio" type="radio" name="type-car" value="2" disabled="true"><img src="<?= $racine ?>images/van.png" alt="VAN"/><label class="w3-validate"> <span class="w3-padding">
                    8x <i class="fa fa-user"></i>
                    6x <i class="fa fa-briefcase"></i>
                  </span></label></p>
                </div>
              </div>

              <div class="w3-clear">
                  <button id ="sdevis" class="w3-btn w3-black w3-right" type="submit" ><i class="fa fa-location-arrow w3-margin-right"></i> ESTIMEZ <span class="w3-hide-small">LA COURSE</span></button>
              </div>
            </form>
          </div>
      </div>
                  <div id="load-booking" class="w3-modal">
              <div class="w3-modal-content" style="max-width:500px">
                <div class="w3-container">
                  <span onclick="document.getElementById('load-booking').style.display='none'" class="w3-btn w3-display-topright">&times;</span>
                  <span id="message-booking" class="w3-center">
                  <h3>Calcul en cours...</h3>
                  <hr>
                    <p><img src="<?= $racine ?>images/loader-devis.gif" alt="Chargement..." /></p>
                  </span>
                </div>
              </div>
            </div>