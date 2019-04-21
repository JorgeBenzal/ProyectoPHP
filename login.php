<?php
/**
 * Festlegung der Untergrenze für die PHP-Version
 * @version: 1.0
 */
if (0 > version_compare(PHP_VERSION, '5')){
	die('<h1>Für diese Anwendung ' . 'ist mindestens PHP 5 notwendig</h1>');
}
session_start();
?>
<!DOCTYPE html>
<html lang="de">
  <head>
	<meta charset="utf-8">
	<title>Image2food - Login</title>
  </head>
  <body>
	<div id="nav">
	  <?php
	  require ("nav.php");
	  require ("plausi.inc.php"); /* eine Bibliothek mit Plausibilisierungs */
	  							  /* funktionalitäten */
	  ?>
	</div>
	<div id="content">
	<h1>Login</h1>
	<?php
		require 'login.inc.php' ;
		/**
		 * Foto2Gericht
		 * Das soziale Netwerk für Kochideen
		 * Die Loginseite
		 */

class Login {

		/**
		* Loginsmethode
		*  Erst Eingaben des Anwenders plausibilisieren
		* - Dann in der MySQL-Datenbank eintragen, wenn die Plausibilisierung
		* - keine Fehler ergeben hat
		*/
	public function _login(){	/* Methode registrieren*/
		if ($this-> plausibilisieren()){
			$this->anmelden_db();
		}
	}

	/**
	 * Plausibilisierungsmethode
	 * Testet die einzelnen Eingabefelder des
	 * Registrierungsformulars gegenüber
	 * - den Notwendigkeiten in der MySQL-Datenbank und
	 * - weiteren Anforderungen, die die Logik
	 * des Netzwerks fordert.
	 * Die eingaben stehen im globalen Array $_POST
	 * zur Verfügung
	 * @return true, wenn die Plausibilisierung
	 * keine Fehler ergab - sonts false
	 */

	private  function plausibilisieren(){
		// Fehlervariable
		$anmelden = 0;
		$p = new Plausi();

		$anmelden += $p -> nutzerdatentest($_POST['userid']);
		$anmelden += $p -> nutzerdatentest($_POST['passwort']);

		// Testausgaben für den derzeitigen Stand
		// des Projekts
		echo "Die Eingaben: <hr />";
		print_r($_POST);
		echo "<br />Fehleranzahl: " . $anmelden . "<hr />";
		if ($anmelden == 0) return true;
		else return false;
	}


	private function anmelden_db(){
		$vorhanden = false;
		require_once ("db.inc.php");
		if($stmt = $pdo -> prepare(
			"SELECT userid, pw FROM mitglieder")) {
			$stmt -> execute();
			while ($row = $stmt -> fetch()) {
				if (isset($_POST["userid"]) && $_POST["userid"] == 
				   $row["userid"] && md5($_POST["pw"]) == $row["pw"]){
					$vorhanden = true;
					break;
				} 
			}
		}
		
		if ($vorhanden){
			$_SESSION["name"] = $_POST["userid"];
			$_SESSION["login"] = "true";
			$dat = "index.php";
		}else {
			$dat = "loginfehler.php";
		}
		header("Location: $dat");

	}
}
	$regobj = new Login();
	/*Hier Überprüfen ob der Datei überhaupt Daten übergeben werden */
	if (sizeof($_POST) > 0){
		$regobj -> _login();
	}
	?>
	</div>
  </body>
</html>