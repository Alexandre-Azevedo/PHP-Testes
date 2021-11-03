<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> EXERCICO 1</title>
</head>
<body>

	<?php
		$sorteio = [rand(1,60)];
		
		$aux = true;
		do{
			$num = rand(1, 60);
			if(!in_array($num, $sorteio)){
				array_push($sorteio, $num);
			}
		}while(count($sorteio) != 6);

		echo '<pre>';
		echo var_dump($sorteio);
		echo '</pre>';

	?>

</body>
</html>