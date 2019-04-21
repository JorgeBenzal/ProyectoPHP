<!DOCTYPE html>
<html lang="de">
  <head>
	<meta charset="utf-8">
	<title>Image2food</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
  </head>
  <body>
	<h2>Geben Sie vor und nach dem Muster die Regulären Ausdrücken</h2>
	<h2>um keine unsinnige Zeichen eingeben werden.</h2><br>
	<form action="reg1test.php" method="get">
	<?php /*<div>
	  Selectieren <select id="dat1" name="dat1">
	  <option value="^" title="^ führt zu Treffern in allen Strings, wo diese Textpassage am Anfang vorkommt.">^</option>
	  <option value="\d" title="Sucht nach einer beliebigen ganzen Zahl. Das ist äquivalent zu der Angabe [0-9].">\d</option>
	  <option value="\b" title="Sucht den Suchstring an einer Wortgrenze.">\b</option>
	  <option value="\B" title="Sucht den vorangestellten oder nachfolgenden Suchstring.">\B</option>
	  <option value="\D" title="Sucht ein beliebiges Zeichen, das Keine Ziffer ist.">\D</option>
	  <option value="\w" title="Führt zu Treffern bei allen alphanumerischen Zeichen und dem Unterstrich.">\w</option>
	  <option value="\W" title="Führt zu Treffern allen Zeichen, die keine alphanumerischen Zeichen und dem Unterstrich sind.">\W</option>
	  </select></div>
	  Eingabe <input name="reg"  value="\w+@\w+\.\w{2,3}"  size="18">
	<div>
	  Selectieren <select id="dat2" name="dat2">
	  <option value="$" title="$ Führt zu Treffern in allen Strings, wo diese Textpassage am Ende vorkommt.">$</option>
	  <option value="\d" title="Sucht nach einer beliebigen ganzen Zahl. Das ist äquivalent zu der Angabe [0-9].">\d</option>
	  <option value="\b" title="Sucht den Suchstring an einer Wortgrenze.">\b</option>
	  <option value="\B" title="Sucht den vorangestellten oder nachfolgenden Suchstring.">\B</option>
	  <option value="\D" title="Sucht ein beliebiges Zeichen, das Keine Ziffer ist.">\D</option>
	  <option value="\w" title="Führt zu Treffern bei allen alphanumerischen Zeichen und dem Unterstrich.">\w</option>
	  <option value="\W" title="Führt zu Treffern allen Zeichen, die keine alphanumerischen Zeichen und dem Unterstrich sind.">\W</option>
	  </select></div>
	  <br />
	  <label id="text"><?php $resultado = $_POST['dat1'] .= $_POST['dat2'];echo $resultado;?></label>*/?>
	  Eingabe <input name="reg" />
	  <input type="submit" />
	</form>
</body>
</html>
