<?php
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){

        if (is_file('modele/' . $class . '.php')) {
            require_once 'modele/' . $class . '.php';
        } elseif (is_file('controller/' . $class . '.php')) {
            require_once 'controller/' . $class . '.php';
        }
    }

}
?>