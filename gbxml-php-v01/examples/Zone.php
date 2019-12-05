<?php
include("../Gbxml.class.v01.php");

$xw= new Gbxml();
$xw->openURI('Zone.txt');
$xw->startDocument('1.0');
$xw->setIndent(4);
$xw->startGbxml();

$xw->startZone();

$xw->writeName('Name of the Zone');
$xw->writeDescription('Description of the Zone');
$xw->writeAirChangesPerHour('3.00');
$xw->writeOAFlowPerArea('2.00');
$xw->writeOAFlowPerPerson('1.00');
$xw->writeDesignHeatT('10.00');
$xw->writeDesignCoolT('20.00');
$xw->writeCADObjectId('378297');

$xw->endZone();
$xw->endGbxml();
$xw->endDocument();
$xw->flush();

readfile("Zone.txt");

?>