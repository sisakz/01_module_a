<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Number of Days</title>
</head>

<body>
	<h4>Calculate number of days</h4>

	<form action="#">
		<label for="date1">Date 1:
			<input type="date" id="date1" name="date1">
		</label>

		<label for="date2">Date 2:
			<input type="date" id="date2" name="date2">
		</label>

		<input type="submit" />
	</form>
	<?php
		if ($_GET["date1"] && $_GET["date2"]) {
			$d1 = new DateTime($_GET["date1"]);
			$d2 = new DateTime($_GET["date2"]);
			echo '<p>Output: ' . $d1->diff($d2)->format("%a") . ' days</p>';
		}
	?>
</body>

</html>