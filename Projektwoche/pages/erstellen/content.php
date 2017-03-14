<center>
	<h1>Projekt erstellen</h1>
</center>
<form class="container" action="" method="post">	<!-- add action -->
	<label><b>Projektname:</b></label><br>
	<input type="text" name="proName" placeholder="Projektname">
	<label><b>Projektbeschreibung:</b></label><br>
	<textarea name="proBesch" placeholder="Projektbeschreibung"></textarea>
	<label><b>Angaben:</b></label>
	<!--<input type="text" name="maxS" placeholder="max. Schüler"> -->
	<label><b>mind. Jahrgangsstufe:</b></label>
	<select name="minJahr">
		<option value="1">5. Klasse</option>
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
		<option value="6">10. Klasse</option>
	</select>
	<label><b>Geschlecht</b></label><br>
	<select name="geschlecht">
		<option value="1">männlich</option>
		<option value="2">weiblich</option>
		<option value="70">cis</option>
		<option value="69">AAH</option>
	</select>
	<button type="submit">Erstellen</button>
</form>
