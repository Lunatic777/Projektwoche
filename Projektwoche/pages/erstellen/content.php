<center>
	<h1>Projekt erstellen</h1>
</center>
<form class="container" action="" method="post">	<!-- add action -->
	<label><b>Projektname:</b></label>
	<input type="text" name="name" placeholder="Projektname">
	<label><b>Projektbeschreibung:</b></label>
	<textarea name="name" placeholder="Projektbeschreibung"></textarea>
	<label><b>Angaben:</b></label><br>
	<!--<input type="text" name="maxS" placeholder="max. Schüler"> -->
	<select name="mind. Jahrgangsstufe">
		<option value="1">5. Klasse</option>
		<option value="2">6. Klasse</option>
		<option value="3">7. Klasse</option>
		<option value="4">8. Klasse</option>
		<option value="5">9. Klasse</option>
		<option value="6">10. Klasse</option>
	</select>
	<select name="max. Jahrgangsstufe">
		<option value="1">5. Klasse</option>
		<option value="2">6. Klasse</option>
		<option value="3">7. Klasse</option>
		<option value="4">8. Klasse</option>
		<option value="5">9. Klasse</option>
		<option value="6">10. Klasse</option>
	</select>
	<input type="text" name="teacher" placeholder="Lehrer">
	<button type="submit">Erstellen</button>
</form>
