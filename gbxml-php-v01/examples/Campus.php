<?php
include("../Gbxml.class.v01.php");

$gb=new Gbxml();
$gb->openURI('Campus.txt');
$gb->startDocument('1.0');
$gb->setIndent(4);
$gb->startGbxml();

$gb->startCampus();
$gb->writeLocation();

$gb->startBuilding();
$gb->writeSpace();
$gb->endBuilding();

$gb->startSurface();
$gb->writeAdjacentSpaceId();
$gb->startRectangularGeometry();
$gb->writeAzimuth();
$gb->writeTilt();
$gb->writeHeight();
$gb->writeCpoint(10,20,30);
$gb->writeCpoint();
$gb->writeCpoint();
$gb->writeCpoint();
$gb->endRectangularGeometry();
$gb->endSurface();

$gb->endCampus();

$gb->endGbxml();
$gb->endDocument();
$gb->flush();
readfile("Campus.txt");

?>