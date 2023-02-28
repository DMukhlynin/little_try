<?php

function snells(int $x1, int $y1)
{
	$alfa = angleValue(400 - $y1,sqrt((500 - $x1)**2 + (400 - $y1)**2));
	$theta = asin(sin($alfa)*1.0003/1.333);
	$lineLength = 300;
	$ySide = $lineLength * cos($theta);
	$xSide = $lineLength * sin($theta);
	return array(500 + $xSide, 400 + $ySide);
}

function angleValue(float $side1, float $side2)
{
	$cosalfa = $side1/$side2;
	return acos($cosalfa);
}
