<?php
class Controller {


	public function home() {
 		
 		$data_site['title'] = 'Réservez votre chauffeur vtc pour vos déplacements à Paris, depuis et vers les Aéroports de Paris Orly et CDG';

	    require('view/index.php');

	}
	public function other($page) {

		$page = str_replace("/","",$page);

		if (is_file('view/' . $page . '.php')) {

	    	require 'view/' . $page . '.php';
		}
		else {
			return false;
		}


	}
	public function booking($bookingNumber) {


		if (ctype_alnum($bookingNumber) AND isset($_SESSION[$bookingNumber]) AND !empty($_SESSION[$bookingNumber])) {

			$datas = $_SESSION[$bookingNumber];

			if (isset($_POST) AND !empty($_POST)) {

				$booking = new Reservation($datas,$_POST);
				$check = $booking->checkData();
				if ($check == true) { 

					$method_payment = $booking->getPaiement();
					if ($method_payment == 2 AND isset($_POST['stripeToken'])) {

						$token = $_POST['stripeToken'];

						$stripePayment = new StripePayment();
						$etatPayment = $stripePayment->Payment($token,$booking->getMail(),$booking->getPrix());

					}
					else {

						$etatPayment = true;
					}

					if ($etatPayment != false) {

						$reservation = new ReservationManager(DataBase::connect());
						$reservation->AddReservation($booking);

						$emailBooking = new Email();
						$emailBooking->sendEmailConfirmation($booking);
						unset($_SESSION[$bookingNumber]);

					}

					$data_site['title'] = 'Réservation en Ligne';
					require('view/confirmation.php');
					exit();


				}
			}

			$data_site['title'] = 'Réservation en Ligne';
	    	require('view/booking.php');
		}
		else {
			MySettings::autoHeader('home');
			exit();
		}	

	}
	public function devis() {

		if (isset($_POST) AND !empty($_POST)) {

		   $datas = $_POST;

		   $adForm = MySettings::clean($datas['depart']);
		   $adTo = MySettings::clean($datas['arrivee']);
		   $rDate = MySettings::clean($datas['date-course']);
		   $rTime = MySettings::clean($datas['heure-course']);
		   $typeCar = MySettings::clean($datas['type-car']);


			list($dd,$mm,$yyyy) = explode('/',$rDate);
			if (!checkdate($mm,$dd,$yyyy)) {
			        MySettings::message('date_error');
			        MySettings::autoHeader('home_reservation');

			}
			if (!preg_match("/^([01]?[0-9]|2[0-3])\:+[0-5][0-9]$/", $rTime)) {
			        MySettings::message('time_error');
			        MySettings::autoHeader('home_reservation');

			}
			if (!is_numeric($typeCar)) {

				MySettings::autoHeader('home_reservation');
			}

			$car = new Cars($typeCar);
			if ($car->getExist() == false) {
				MySettings::autoHeader('home_reservation');
			}


		  	$googleApi = new GoogleApi();
			$infoRoute = $googleApi->getRoute($adForm, $adTo);

			if ($infoRoute == true) {

				$forfait = new Forfait();
				$checkForfait = $forfait->check($adForm,$adTo);

				$details_addressFrom = new Address($googleApi->getAdresseDepart());
				$details_addressTo = new Address($googleApi->getAdresseArrivee());
				$tarif = new Tarifs($car);

				if ($checkForfait == false) {

					$tarif->priceCalculation($googleApi->getDistance(), $googleApi->getTemps());

				}
				else {

					$citys = array(
						'from' => $details_addressFrom->getCity(), 
						'to' => $details_addressTo->getCity()
						);

					$tarif->forfaitCalculation($citys, $googleApi->getDistance(), $googleApi->getTemps(), $checkForfait, $typeCar);
				}
				$thePrice = $tarif->getPrice();

				$bookingNumber =  'N'. mt_rand(10000,90000);

				$data_course = array('REF' => $bookingNumber, 
					'AD' => $googleApi->getAdresseDepart(),
					'AD_LAT' => $details_addressFrom->getLat(),
					'AD_LNG' => $details_addressFrom->getLng(),
					'AA' => $googleApi->getAdresseArrivee(),
					'AA_LAT' => $details_addressTo->getLat(),
					'AA_LNG' => $details_addressTo->getLng(), 
					'KM' => $googleApi->getDistance(), 
					'TIME' => $googleApi->getTemps(), 
					'QUEL_DATE' => $rDate, 
					'QUEL_HEURE' => $rTime, 
					'PRIX' => $thePrice,
					'ID_CAR' => $typeCar,
					'CAR' => $car->getType(),
					);

				$_SESSION[$bookingNumber] = $data_course;

				if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
				    echo json_encode($_SESSION[$bookingNumber]);
				    exit();
				}
				MySettings::autoHeader('reservation/'.$bookingNumber);
			}
			else {
				MySettings::autoHeader('home_reservation');
			}
		}
		else {
			MySettings::autoHeader('home');
		}	
	}

}
?>