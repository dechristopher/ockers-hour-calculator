<?php

/*
 * Created by Andrew DeChristopher 2016
 * Open-sourced under the MIT License
 */

$calculted = false;

if($_POST['go']){
	$calculated = true;

	$m1 = $_POST['m1'];
	$tu1 = $_POST['tu1'];
	$w1 = $_POST['w1'];
	$th1 = $_POST['th1'];
	$f1 = $_POST['f1'];

	$m2 = $_POST['m2'];
	$tu2 = $_POST['tu2'];
	$w2 = $_POST['w2'];
	$th2 = $_POST['th2'];
	$f2 = $_POST['f2'];

	$ml = $_POST['ml'];
	$tul = $_POST['tul'];
	$wl = $_POST['wl'];
	$thl = $_POST['thl'];
	$fl = $_POST['fl'];

	$m3 = $_POST['m3'];
	$tu3 = $_POST['tu3'];
	$w3 = $_POST['w3'];
	$th3 = $_POST['th3'];
	$f3 = $_POST['f3'];

	$m4 = $_POST['m4'];
	$tu4 = $_POST['tu4'];
	$w4 = $_POST['w4'];
	$th4 = $_POST['th4'];
	$f4 = $_POST['f4'];

	$total = floatval($_POST['mt']) + floatval($_POST['tut']) + floatval($_POST['wt']) + floatval($_POST['tht']) + floatval($_POST['ft']);

$hours = "
Hey Dennis,

These are my hours for the week:

Monday: " . $m1 . "-" . $m2 . ", " . $ml . " hour lunch, " . $m3 . "-" . $m4 . "  (" . $_POST['mt'] . " Hours)
Tuesday: " . $tu1 . "-" . $tu2 . ", " . $tul . " hour lunch, " . $tu3 . "-" . $tu4 . " (" . $_POST['tut'] . " Hours)
Wednesday: " . $w1 . "-" . $w2 . ", " . $wl . " hour lunch, " . $w3 . "-" . $w4 . " (" . $_POST['wt'] . " Hours)
Thursday: " . $th1 . "-" . $th2 . ", " . $thl . " hour lunch, " . $th3 . "-" . $th4 . "  (" . $_POST['tht'] . " Hours)
Friday: " . $f1 . "-" . $f2 . ", " . $fl . " hour lunch, " . $f3 . "-" . $f4 . " (" . $_POST['ft'] . " Hours)

Total: " . $total . "

Thanks,
" . $_POST['name'] . "
";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ockers Hour Calculator</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h3>Ockers Hours Calculator</h3> <hr>
		<div id="form">
			<form action="#" method="post">
				<span>M: </span><input type="text" name="m1" /> - <input type="text" name="m2" /> :: <input type="text" name="ml" /> hour lunch :: <input type="text" name="m3" />-<input type="text" name="m4" /> (<input type="text" name="mt" /> hours total)<br />
				<span>T: </span><input type="text" name="tu1" /> - <input type="text" name="tu2" /> :: <input type="text" name="tul" /> hour lunch :: <input type="text" name="tu3" />-<input type="text" name="tu4" /> (<input type="text" name="tut" /> hours total)<br />
				<span>W: </span><input type="text" name="w1" /> - <input type="text" name="w2" /> :: <input type="text" name="wl" /> hour lunch :: <input type="text" name="w3" />-<input type="text" name="w4" /> (<input type="text" name="wt" /> hours total)<br />
				<span>T: </span><input type="text" name="th1" /> - <input type="text" name="th2" /> :: <input type="text" name="thl" /> hour lunch :: <input type="text" name="th3" />-<input type="text" name="th4" /> (<input type="text" name="tht" /> hours total)<br />
				<span>F: </span><input type="text" name="f1" /> - <input type="text" name="f2" /> :: <input type="text" name="fl" /> hour lunch :: <input type="text" name="f3" />-<input type="text" name="f4" /> (<input type="text" name="ft" /> hours total)<br />
				<span>Name: </span><input type="text" id="name" name="name" /><br />
				<input type="submit" value="Calculate Hours" name="go" />
			</form>
		</div>
		<?php
			if($calculated){
				echo"
				<hr>
				<textarea id='returned'>" . $hours . "</textarea>
				";
			}
		?>
		<hr>
		<p>Created by Andrew DeChristopher 2016</p>
		<p>Last updated: 6-20-2016
	</body>
</html>
