<form action='login.php' method='post'>
	<label class="log_label">Userid</label>
	<span class="pflichtmarker"> * </span>
	<input name="userid" maxlength="30"><br
<?php
  		if (isset($_POST['userid'])){
  			echo "value='" . $_POST['userid'] . "'";
  		}
?>>
	<label class="log_label">Passwort</label>
	<span class="pflichtmarker"> * </span>
	<input type="password" name="passwort" maxlength="30"><br
<?php
		if (isset($_POST['passwort'])){
		echo "value='" . $_POST['passwort'] . "'";
  }
?>>
  	<input type="submit" value='Daten absenden'>
</form>