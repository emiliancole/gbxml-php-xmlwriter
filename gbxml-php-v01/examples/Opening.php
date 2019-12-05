<?php
include("../Gbxml.class.v01.php");

$xw= new Gbxml();
$xw->openURI('Opening.txt');
$xw->startDocument('1.0');
$xw->setIndent(4);
$xw->startGbxml();

$xw->startOpening();
$xw->writeName('Name of the Opening');
$xw->writeDescription('Description of the Opening');
$xw->startRectangularGeometry();
$xw->writeAzimuth();
$xw->writeTilt();
$xw->writeWidth();
$xw->writeHeight();
$xw->writeCpoint();
$xw->endRectangularGeometry();
$xw->startPlanarGeometry();
$xw->startPolyLoop();
$xw->writeCpoint('50.0', 20.35, 1.8);
$xw->writeCpoint(50.0, 19.65, 1.8);
$xw->writeCpoint(50.0, 19.65, '0.0');
$xw->writeCpoint(50.0, 20.35, 0.0);
$xw->endPolyLoop();
$xw->endPlanarGeometry();
$xw->endOpening();
$xw->endGbxml();
$xw->endDocument();
$xw->flush();

readfile("Opening.txt");

?>