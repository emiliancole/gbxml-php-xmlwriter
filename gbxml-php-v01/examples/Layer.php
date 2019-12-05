<?php
include("../Gbxml.class.v01.php");

$xw= new Gbxml();
$xw->openURI('Layer.txt');
$xw->startDocument('1.0');
$xw->setIndent(4);
$xw->startGbxml();

$xw->startLayer();
$xw->writeName('Name of the Layer');
$xw->writeDescription('Description of the Layer');

$xw->writeMaterialId('mat-244');
$xw->writeMaterialId('mat-354');
$xw->writeMaterialId('mat-452');

$xw->startCost();
$xw->writeCostValue();
$xw->writeReference();
$xw->endCost();

$xw->writeHOutside();
$xw->endLayer();
$xw->endGbxml();
$xw->endDocument();
$xw->flush();

readfile("Layer.txt");

?>