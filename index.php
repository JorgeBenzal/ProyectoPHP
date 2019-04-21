<?php
session_start();
/**
 * Festlegung der Untergrenze für die PHP-Version
 * @version: 1.0
 */
if (0 > version_compare(PHP_VERSION, '5')){
	die('<h1>Für diese Anwendung ' . 'ist mindestens PHP 5 notwendig</h1>');
}
/**
* Hier setzen ein Cookie. Soll 120 Tage betragen.
*/
setcookie("Image2Food", mktime(), time() + (60 * 60 * 24 * 120), "/", "localhost", false, true);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
	<meta charset="utf-8">
	<title>Image2food - Index</title>
  <head>
  <body>
  	<div id="nav">
  	<?php
		if (isset($_SESSION['login']) && ($_SESSION["login"] == "true")) {
			require ("navmitglieder.php");
		} else {
			require ("nav.php");
		}
	?>
  	</div>
  	<div id="content">
	  <h1>Image2Food  ̶  Sag mir, was ich daraus kochen kann</h1>
	  <h2>Das soziale, multimediale Netzwerk für Kochideen</h2>
	  <?php 
		class Index {
			function besucher() {
				echo"<div id='indextext'>";
				if(isset($_SESSION['login']) && ($_SESSION["login"] == "true")) {
					echo "<h3>Mitgliederbereich</h3>";
					echo "<p>Sie sind angemeldet</p>";
				}else if (isset($_SESSION['login']) && $_SESSION['login'] == "false"){
					echo "<p>Sie können sich jetzt zum Mitgliederbereich anmelden.</p>";
				}elseif (isset($_COOKIE ['Image2Food'])) {
					echo "Schön, Sie wiederzusehen. Melden Sie sich an, um in den geschlossenen Mitgliederbereich zu gelangen, wenn Sie sich schon registriert haben.";
				}else{
					echo "Wilkommen auf unserer Website." .
					"Schauen Sie sich um. Sie können sich hier registrieren " .
					"und dann in einem geschlossenen Mitgliederbereich anmelden.";
				}
				echo"</div>";
			}
		}
		$obj = new Index();
		$obj -> besucher();
	  ?>
	  </div>
  </body>
</html>