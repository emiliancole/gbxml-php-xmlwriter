<?php
include("../Gbxml.class.v01.php");

$xw= new Gbxml();
$xw->openURI('Surface.txt');
$xw->startDocument('1.0');
$xw->setIndent(4);
$xw->startGbxml();

$xw->startSurface();
$xw->writeName('Name of the Surface');
$xw->writeDescription('Description of the Surface');

$xw->startRectangularGeometry();
$xw->writeAzimuth();
$xw->writeTilt();
$xw->writeWidth();
$xw->writeHeight();
$xw->writeCpoint();
$xw->endRectangularGeometry();

$xw->startPlanarGeometry();
$xw->startPolyLoop();
$xw->writeCpoint();
$xw->writeCpoint();
$xw->writeCpoint();
$xw->writeCpoint();
$xw->endPolyLoop();
$xw->endPlanarGeometry();

$xw->writeAdjacentSpaceId();
$xw->writeAdjacentSpaceId();
$xw->endSurface();
$xw->endGbxml();
$xw->endDocument();
$xw->flush();

readfile("Surface.txt");

?>