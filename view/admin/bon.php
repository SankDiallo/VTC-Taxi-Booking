<!DOCTYPE html>
<html lang="fr-FR">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bon de commande</title>
  <style type="text/css">

  /* Take care of image borders and formatting */

  img {
    max-width: 600px;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
  }

  a {
    border: 0;
    outline: none;
  }

  a img {
    border: none;
  }

  /* General styling */

  td, h1, h2, h3  {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
  }

  td {
    font-size: 13px;
    line-height: 150%;
    text-align: left;
  }

  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #37302d;
    background: #ffffff;
  }

  table {
    border-collapse: collapse !important;
  }


  h1, h2, h3 {
    padding: 0;
    margin: 0;
    color: #444444;
    font-weight: 400;
    line-height: 110%;
  }

  h1 {
    font-size: 35px;
  }

  h2 {
    font-size: 30px;
  }

  h3 {
    font-size: 24px;
  }

  h4 {
    font-size: 18px;
    font-weight: normal;
  }

  .important-font {
    color: #21BEB4;
    font-weight: bold;
  }

  .hide {
    display: none !important;
  }

  .force-full-width {
    width: 100% !important;
  }
  .content {
  max-width: 600px;
  margin: 0 auto;
  display: block;
  padding: 20px;
}
.aligncenter {
  text-align: center;
}

.alignright {
  text-align: right;
}

.alignleft {
  text-align: left;
    width:100px;
}
.invoice {
  margin: 40px auto;
  text-align: left;
  width: 80%;
}
.invoice td {
  padding: 0px 0;
    font-size: 15px;
}
.invoice .invoice-items {
  width: 100%;
}
.invoice .invoice-items td {
  border-top: #eee 1px solid;
      width: 80%;
}
.invoice .invoice-items .total td {
  border-top: 2px solid #333;
      width: 100%;
  border-bottom: 2px solid #333;
  font-weight: 700;
}
.clear {
  clear: both;
}

.main {
  background-color: #fff;
  border: 1px solid #e9e9e9;
  border-radius: 3px;
}

.content-wrap {
  padding: 15px;
}

.content-block {
  padding: 0 0 20px;
}

  </style>

  <style type="text/css" media="screen">
      @media screen {
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400);

        /* Thanks Outlook 2013! */
        td, h1, h2, h3 {
          font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif !important;
        }
      }
  </style>

  <style type="text/css" media="only screen and (max-width: 600px)">
    /* Mobile styles */
    @media only screen and (max-width: 600px) {

      table[class="w320"] {
        width: 320px !important;
      }

      table[class="w300"] {
        width: 300px !important;
      }

      table[class="w290"] {
        width: 290px !important;
      }

      td[class="w320"] {
        width: 320px !important;
      }

      td[class~="mobile-padding"] {
        padding-left: 14px !important;
        padding-right: 14px !important;
      }

      td[class*="mobile-padding-left"] {
        padding-left: 14px !important;
      }

      td[class*="mobile-padding-right"] {
        padding-right: 14px !important;
      }

      td[class*="mobile-block"] {
        display: block !important;
        width: 100% !important;
        text-align: left !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding-bottom: 15px !important;
      }

      td[class*="mobile-no-padding-bottom"] {
        padding-bottom: 0 !important;
      }

      td[class~="mobile-center"] {
        text-align: center !important;
      }

      table[class*="mobile-center-block"] {
        float: none !important;
        margin: 0 auto !important;
      }

      *[class*="mobile-hide"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
        line-height: 0 !important;
        font-size: 0 !important;
      }

      td[class*="mobile-border"] {
        border: 0 !important;
      }
    }
  </style>
</head>
<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
<table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
  <tr>
    <td align="center" valign="top" bgcolor="#ffffff"  width="100%">

    <table cellspacing="0" cellpadding="0" width="100%">
      <tr>
      </tr>
      <tr>
        <td style="border-bottom:1px solid #e7e7e7;">
          <center>
              <table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" width="600">
			<div class="content">
				<table class="main" width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="content-wrap aligncenter">
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td class="content-block">
										<h4 class="aligncenter">BON DE RESERVATION</h4>
									</td>
								</tr>
                <tr>
                  <td>
                    <h5 class="aligncenter">SERVICE DE VOITURE DE TRANSPORT AVEC CHAUFFEUR</h5><br />
										<h5 class="aligncenter"><?= strtoupper(MySettings::$_society) ?></h5>
									</td>
								</tr>
								<tr>
									<td class="content-block aligncenter">
										<table class="invoice">
											<tr>
												<td>
                                                    <p>BILLET COLLECTIF  (Arrêté du 14 Février 1986 - Article 5) et<br/>
                                                   ORDRE DE MISSION (Arrêté du 6 Janvier 1993 - Article 3)
                                                    </p>
                                                    <h4>Location de voiture avec chauffeur</h4>
                                                </td>
											</tr>
											<tr>
												<td>
													<table class="invoice-items" cellpadding="0" cellspacing="0">
														<tr>
															<td><h4><b><?= $reservation['nom']?> <?= $reservation['prenom']?></b></h4></td>
														</tr>
                            <tr>
                              <td><b>Référence de dossier : </b><?= $reservation['reference']?><br /></td>
                            </tr>
                            <tr>
                              <td><b>Téléphone : </b><?= $reservation['telephone']?></td>
                            </tr>
														<tr>
															<td><b>Nombre de passagers : </b><?= $reservation['passagers']?></td>
														</tr>
                                                        <tr>
															<td><b>Réservation efféctuée le :</b> <?= $reservation['date_heure_reserv']?></td>
														</tr>
                                                        <tr>
															<td><b>Prise en charge :</b> <?= $reservation['date_course']?> à <?= $reservation['heure_course']?></td>
														</tr>
														<tr>
															<td><b>Lieu de prise en charge :</b> <?= $reservation['depart']?></td>
														</tr>
                                                        <tr>
															<td><b>Destination :</b> <?= $reservation['arrivee']?></td>
														</tr>
                            <tr>
                              <td><b>Véhicule : </b><?= $reservation['car_id']?></td>
                            </tr>
                            <?php if (!empty($reservation['no_vol'])): ?>
                            <tr>
                              <td><b>N° de Vol: </b><?= $reservation['no_vol']?></td>
                            </tr>
                            <? endif ?>
                            <?php if (!empty($reservation['note'])): ?>
                            <tr>
                              <td><b>Note : </b><?= $reservation['note']?></td>
                            </tr>
                            <? endif ?>
														<tr class="total">
															<td>TARIF : <?= $reservation['prix']?> € TTC (<?= $reservation['method_paiement']?>)</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td class="content-block aligncenter">
								        <?= MySettings::$_society ?>, <?= MySettings::$_adresse ?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<div class="footer">
					<table width="100%">
						<tr>
							<td class="aligncenter content-block">Des Questions? <a href="mailto:"><?= MySettings::$_email ?></a></td>
						</tr>
					</table>
				</div></div>
		</td>
		<td></td>
	</tr>
</table>
          </center>
        </td>
      </tr>
    
    </table>

    </td>
  </tr>
</table>
</body>
</html>