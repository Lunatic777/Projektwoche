<center>
	<h1>Projekt erstellen</h1>
</center>
<form class="container" action="" method="post">
	<label><b>Projektname:</b></label><br>
	<input type="text" name="proName" placeholder="Projektname">
	<label><b>Projektbeschreibung:</b></label><br>
	<textarea name="proBesch" placeholder="Projektbeschreibung"></textarea>
	<label><b>mind. Schüleranzahl</b></label>
	<input type="text" name="minS" placeholder="min. Schüler">
	<label><b>max. Schüleranzahl</b></label>
	<input type="text" name="maxS" placeholder="max. Schüler">
	<label><b>mind. Jahrgangsstufe:</b></label>
	<select name="minJahr">
		<option value="1" selected>5. Klasse</option>
		<option value="2">6. Klasse</option>
		<option value="3">7. Klasse</option>
		<option value="4">8. Klasse</option>
		<option value="5">9. Klasse</option>
		<option value="6">10. Klasse</option>
	</select>
	<label><b>max. Jahrgangsstufe:</b></label><br>
	<select name="maxJahr">
		<option value="1">5. Klasse</option>
		<option value="2">6. Klasse</option>
		<option value="3">7. Klasse</option>
		<option value="4">8. Klasse</option>
		<option value="5">9. Klasse</option>
		<option value="6" selected>10. Klasse</option>
	</select>
	<label><b>Geschlecht</b></label><br>
	<select name="geschlecht">
		<option value="1" selected>-</option>
		<option value="2">männlich</option>
		<option value="3">weiblich</option>
	</select>
	<label><b>Gymnasium</b></label>
	<label class="switch">
 	<input type="checkbox">
  	<div class="slider"></div>
	</label>	
	<label><b>Realschule</b></label>
	<label class="switch">
 	<input type="checkbox">
  	<div class="slider"></div>
	</label>	
	<label><b>Hauptschule</b></label>
	<label class="switch">
 	<input type="checkbox">
  	<div class="slider"></div>
	</label><br>
	<button type="submit">Erstellen</button>
</form>
