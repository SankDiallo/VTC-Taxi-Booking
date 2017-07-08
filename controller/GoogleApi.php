<?php
class GoogleApi {

    private $_details;
    private $_adresseDepart;
    private $_adresseArrivee;
    private $_distance;
    private $_temps;

    public function getRoute($adresseFrom = null, $adresseTo = null) {

        // Nous verifions si les champs envoyés sont vides et renvoyons une erreur si ceux-la le sont

        if (empty($adresseFrom) OR empty($adresseTo)) {
            MySettings::message('address_error_vide');
            return false;
        }
        else {


            $this->_adresseDepart = MySettings::clean(str_replace(' ','+',$adresseFrom));
            $this->_adresseArrivee = MySettings::clean(str_replace(' ','+',$adresseTo));

            // Nous demandons les détails du trajet (KM + TEMPS)
            $detailsRoute = new GoogleApiManager();
            $datas = $detailsRoute->getDetailsRoute($this->_adresseDepart, $this->_adresseArrivee);
            if ($datas == false) {

                return false;
            }
            else {


                $this->setDistance($datas['rows'][0]['elements'][0]['distance']['text']);
                $this->setTemps($datas['rows'][0]['elements'][0]['duration']['text']);
                $this->setAdresseDepart($datas['origin_addresses'][0]);
                $this->setAdresseArrivee($datas['destination_addresses'][0]);             
                return true;
            }
        }
    }
    public function setDistance ($distance) {
        $distance = explode(" ", $distance);
        $this->_distance = $distance[0];
    }

    //Introduction du temps dans la variable $_temps

    public function setTemps ($temps) {
        $temps = explode(" ", $temps);
        $this->_temps = $temps[0];
    }


    public function setAdresseDepart ($address) {
        $this->_adresseDepart = $address;
    }

    public function setAdresseArrivee ($address) {
        $this->_adresseArrivee = $address;
    }


    public function getDistance() {
        return $this->_distance;
    }


    public function getTemps() {
        return $this->_temps;
    }

    public function getAdresseDepart() {
        return $this->_adresseDepart;
    }


    public function getAdresseArrivee() {
        return $this->_adresseArrivee;
    }
}