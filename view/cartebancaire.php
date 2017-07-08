        <div id="Payment-card" style="display:none;">
            <h3>Details de paiement</h3>
                    <h4  class="w3-center w3-text-green">Paiement sécurisé <i class="fa fa-lock fa-1x" aria-hidden="true"></i></h4>
              <div id="stripe-error" class="w3-modal">
                <div class="w3-modal-content">
                  <div class="w3-container">
                    <span onclick="document.getElementById('stripe-error').style.display='none'" class="w3-btn w3-display-topright">&times;</span>
                    <p class="payment-errors w3-center"></p>
                  </div>
                </div>
              </div>
           <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-credit-card"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border cc-number" id="cc-number" type="tel"  placeholder="Numéro de Carte" data-stripe="number">
                </div>
            </div>

            <div class="w3-row" style="margin-left:50px;">
                <p>Expiration</p>
                <div class="w3-col s6 w3-center"><div class="w3-margin-right"><input class="w3-input w3-border" id="cc-mm" type="tel" data-stripe="exp_month" placeholder="MM" data-parsley-type="number" maxlength="2"></div></div>
                <div class="w3-col s6  w3-center"><div class="w3-margin-right"><input class="w3-input w3-border" id="cc-yy" type="tel" data-stripe="exp_year" placeholder="YY"  data-parsley-type="number" maxlength="2"></div></div>
            </div>
            <div class="w3-row" style="margin-left:50px;">
                <p>Code de sécurité</p>
                <div class="w3-col s6  w3-center"><div class="w3-margin-right"><input class="w3-input w3-border cc-cvc" id="cc-cvc" type="tel" style="width:100px" data-stripe="cvc" placeholder="CVC" data-parsley-type="number" maxlength="4"></div></div>
                <div class="w3-col s6  w3-center"><div class="w3-margin-right"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></div></div>
            </div>
        </div>