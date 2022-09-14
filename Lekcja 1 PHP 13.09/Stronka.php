<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

	<h1>This is a Heading</h1>
	<p>This is a paragraph.</p>
	
	<?php
	$zmin = 5;
	if ($zmin == 0) echo "Brak wiadomości.";
	else echo "Masz ", $zmin, " wiadomości.";
	
	?>

</body>
</html>