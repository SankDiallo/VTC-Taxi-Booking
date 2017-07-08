<?php
class DataBase {

	private static $_hName = '';
	private static $_dbName = '';
	private static $_ident = '';
	private static $_pass = '';
	private static $_bdd;

	public static function  connect() {

		if(self::$_bdd === null) {

			try
			{
				// On se connecte Ã  MySQL
				$bdd = new PDO('mysql:host='. self::$_hName .';dbname='. self::$_dbName .'', ''. self::$_ident .'', ''. self::$_pass .'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				self::$_bdd = $bdd;
			}
			catch(Exception $e)
			{
				// En cas d'erreur, on affiche un message et on arrÃªte tout
			    return $e->getMessage();
			}
		}
		return self::$_bdd;	
	}
}


?>