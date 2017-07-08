<?php
class ControllerAdmin {

	public $_Reservation;
	public $_Admin;

	public function __construct(){

		MySettings::loadAdmin();
		$this->_Reservation = new ReservationService();	
		$this->_Admin = new AdminService();	

	}

	public function home($page = null) {

		if (!isset($_SESSION['id_em'])) {


			if (isset($_POST['username']) AND isset($_POST['psw']) ) {

			    $adminCheck = $this->_Admin->checkUser($_POST);
			    if ($adminCheck == true) {

			    	MySettings::autoHeader('admin');
			    }

			}

			require('view/admin/connexion.php');
			exit();

		}

		if (!isset($page) OR !is_numeric($page)) { 

			$page = 1; 
		}
	    $nombreDePages = $this->_Reservation->nombreDePages();

	    $reservation = $this->_Reservation->getReservations($page);
        if ($reservation == false)  { 

           MySettings::autoHeader('admin');
        }
	    require('view/admin/index.php');

	}

	public function bon($id) {


		if (!isset($_SESSION['id_em'])) {

			MySettings::autoHeader('admin');
		}

	    $reservation = $this->_Reservation->getReservation($id);
        if ($reservation == false)  { 

           MySettings::autoHeader('admin');
        }

	    require('view/admin/bon.php');

	}
	public function logOut() {

		if (isset($_SESSION['id_em'])) {

			unset($_SESSION['id_em']);
		}

        MySettings::autoHeader('admin');

	}

}
?>