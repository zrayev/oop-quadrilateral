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

$rhombus = new FigureRhombus();
$rhombus->getName();
echo "<br>";

$square = new FigureSquare();
$square->getName();
echo "<br>";

$trapezium = new FigureTrapezium();
$trapezium->getName();
echo "<br>";
