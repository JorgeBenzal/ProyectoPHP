<?php /*
  if (preg_match("/[1234567]/", $_GET['reg'])){
	echo "<h1>Die Eingabe war korrekt</h1>";
  }else {
  	echo "<h1>Die Eingabe war nicht korrekt</h1>";
  }
?>
<?php
  if (preg_match("/^\d/", $_GET['reg'])){
	echo "<h1>Die Eingabe war korrekt</h1>";
  }else {
  	echo "<h1>Die Eingabe war nicht korrekt</h1>";
  }
?>
<?php
echo "<h1>Die entschärfte Eingabe</h1>";
  echo preg_replace("/[<|>|$|%|&|§]/", "#", $_GET['reg'])
/*^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$
?>\w+@\w+\.\w{2}
  <?php*/
	$muster = "/^\w+@\w+\.\w{2,3}$/";
	//$dat1 = $_GET['dat1'];
	if (preg_match("/^\w+@\w+\.\w{2,3}$/", $_GET['reg'])){
		echo "<h1>Die Eingabe ist ein korrekt E-mail</h1>";
  }else {
  	echo "<h1>Die Eingabe war nicht ein korrekt E-mail</h1>";
  }
?>