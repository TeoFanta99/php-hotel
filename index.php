<!-- Stampare tutti i nostri hotel con tutti i dati disponibili.

Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form>
	<label for="parking">Parcheggio:</label>
            <select name="parking" id="parking">
                <option value="0">Tutti gli hotel</option>
                <option value="1">Con parcheggio</option>
				<option value="2">Senza parcheggio</option>
			</select>
	</form>

	
</body>
</html>


<?php

$hotels = [

	[
		'name' => 'Hotel Belvedere',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	],

];

foreach($hotels as $hotel) {
	echo "<h2>Hotel Name: " . $hotel['name'] . "</h2>";
	echo "<span>Description: " . $hotel['description'] . "</span> <br>";
	echo "<span>Parking: " . ($hotel['parking'] ? 'Yes' : 'No') . "</span> <br>";
	echo "<span>Vote: " . $hotel['vote'] . "<span> <br>";
	echo "<span>Distance to center: " . $hotel['distance_to_center'] . " km</span>";
}


?>
