<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> EXERCICO 1</title>
</head>
<body>

	<?php
		$sorteio = [];

		do{
			$cond = true;
			$num = rand();
			foreach ($sorteio as $idx1 => $valor1) {
				if($num == $valor1){
					$cond = false;
				}
			}
		}while($cond)

	?>

</body>
</html>