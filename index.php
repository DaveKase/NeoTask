<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<title>Neocard test task</title>
	</head>
	
	<body>
		<?php
			$names = [
				"James Hetfield",
				"David Lee Mustaine",
				"Taavi-Dave Kase",
			];
			
			foreach ($names as $name) {
				$splittedName = explode(" ", $name);
				
				if (count($splittedName) == 2) {
					echo "Eesnimi " . $splittedName[0] . ", Perekonnanimi: " . $splittedName[1] . "<br/>";
				} else if (count($splittedName) == 3) {
					echo "Eesnimi " . $splittedName[0] . " " . $splittedName[1] . ", Perekonnanimi: " .  $splittedName[2] . "<br/>";
				}
			}
		?>
	</body>
</html>
