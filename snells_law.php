<?php

require_once __DIR__ . '/snells_function.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
	</style>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
	<div class="air">
		<img src="pictures/sky.jpg" height="400" width="1000">
		<a class="textAir">Воздух</a>
	</div>
	<div class="water">
		<img src="pictures/water.jpg" height="400" width="1000">
		<a class="textWater">Вода</a>
	</div>
	<div class="axies"></div>
	<svg class="beam" xmlns="http://www.w3.org/2000/svg" width="1000" height="800">
		<path class="airBeam" d="M250 200 L500 400" fill="transparent" stroke-width="5" stroke="#e5f716"></path>
		<path class="waterBeam" d="M500 400 L<?= snells(250,200)[0] ?> <?= snells(250,200)[1] ?>" fill="transparent" stroke-width="5" stroke="#e5f716"></path>
	</svg>
</div>
</body>
</html>
