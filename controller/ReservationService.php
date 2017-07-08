<?php


class ReservationService {


	private $_bdd;
	private $_pagination;

	public function __construct($pagination = null){

		$bdd = new ReservationManager(DataBase::connect());
		$this->_bdd = $bdd;
		if (isset($pagination)) {
			$this->_pagination = $pagination;
		}
		else {
			$this->_pagination = 10;
		}
	}
	public function getReservations($page) {


		if (is_numeric($page) AND $page > 0) {

        	$nombreDePages = $this->nombreDePages();

	        if ($page <= $nombreDePages)  { 

            	$contenusPage = ($page - 1) * $this->_pagination;
            	$datas = $this->_bdd->getReservations($contenusPage, $this->_pagination);

            	return $datas;

        	}
        	else {
        		return false;
        	}


		}
		else {
			return false;
		}



	}
	public function getReservation($id) {
		if (is_numeric($id) AND $id > 0) {
			$datas = $this->_bdd->getReservation($id);

			if (!empty($datas)) {

				return $datas;

			}
			else {
				return false;
			}

		}
		else {
			return false;
		}
		
	}
	public function nombreDePages() {
		$nombreDarticle = $this->countReservation();
    	$nombreDePages = ceil($nombreDarticle['total'] / $this->_pagination);
    	return $nombreDePages;
	}
	public function countReservation() {

		return $this->_bdd->getCount();

	}

}