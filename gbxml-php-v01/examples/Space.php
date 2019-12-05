<?php
include("../Gbxml.class.v01.php");

$xw= new Gbxml();
$xw->openURI('Space.txt');
$xw->startDocument('1.0');
$xw->setIndent(4);
$xw->startGbxml();

$xw->startSpace();
$xw->writeName('Name of the Space');
$xw->writeDescription('Description of the Space');

$xw->writeVolume();
$xw->writeArea();

$xw->startShellGeometry();
$xw->startClosedShell();
$xw->startPolyLoop();
$xw->writeCpoint();
$xw->writeCpoint();
$xw->writeCpoint();
$xw->writeCpoint();
$xw->endPolyLoop();
$xw->endClosedShell();
$xw->endShellGeometry();

$xw->endSpace();
$xw->endGbxml();
$xw->endDocument();
$xw->flush();

readfile("Space.txt");

?>