<?php
class PDO2 extends PDO{
	private static $_instance;
	public function __construct( ) {
	}
	public static function getInstance() {
		if (!isset(self::$_instance)) {
			try {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                                $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
				self::$_instance = new PDO('mysql:host='.SQL_SERVEUR.';dbname='.SQL_DB_NAME, SQL_USER, SQL_PASS, $pdo_options);
			} catch (PDOException $e) {
				echo $e;
			}
		}
		return self::$_instance;
	}
	// End of PDO2::getInstance() */
}
?>
