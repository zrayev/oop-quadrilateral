<?php

require_once 'vendor/autoload.php';

use Quadrilateral\FigureParallelogram;
use Quadrilateral\FigureRectangle;
use Quadrilateral\FigureRhombus;
use Quadrilateral\FigureSquare;
use Quadrilateral\FigureTrapezium;

$parallelogram = new FigureParallelogram();
$parallelogram->getName();
echo "<br>";

$rectangle = new FigureRectangle();
$rectangle->getName();
echo "<br>";

$rectangle = new FigureRhombus();
$rectangle->getName();
echo "<br>";

$rectangle = new FigureSquare();
$rectangle->getName();
echo "<br>";

$rectangle = new FigureTrapezium();
$rectangle->getName();
echo "<br>";
