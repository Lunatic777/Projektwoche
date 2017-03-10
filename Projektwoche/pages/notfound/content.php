<?php
	function ackermann($m, $n) {
		if (!isset($memo[$m][$n])) {
			if ($m == 0 && $n >= 0) {
				$memo[$m][$n] = ($n+1);
			}
			elseif ($m > 0 && $n == 0) {
				$memo[$m][$n] = ackermann(($m-1), 1);
			}
			elseif ($m > 0 &&  $n > 0) {
				$memo[$m][$n] = ackermann(($m-1), ackermann($m, ($n-1)));
			}
			else {
				$memo[$m][$n] = "Error!";
			}	
		}
		return $memo[$m][$n];
	}
?>
<h1 style="padding-left:1em" id="clickable">Seite nicht gefunden!</h1>
<div style="visibility: hidden" id="hiddenElement">
	<center>
		<br><h2>Ackermannfunktion</h2>
	</center>
	<form method="post" class="container">
		<input type="text" placeholder="m" name="m" style="width: 49.5%;"> 
		<input type="text" placeholder="n" name="n" style="width: 49.5%;">
		<button type="submit" name="show" value="true">Berechnen</button>
		<div id="result"><?php if($_POST){echo "ackermann(".(empty($_POST['m'])?"0":$_POST['m']).", ".(empty($_POST['n'])?"0":$_POST['n']).") = ".ackermann($_POST['m'], $_POST['n']);}?></div>
	</form>
</div>
<script>
	var element = document.getElementById("clickable");
	if (document.getElementById("result").innerHTML.length!=0) {
		hiddenElement.style.visibility = "visible";
	}
	element.onclick = function() {
		var hiddenElement = document.getElementById("hiddenElement");
		hiddenElement.style.visibility = (window.getComputedStyle(hiddenElement).getPropertyValue("visibility")=="hidden")?"visible":"hidden";
	}
</script>