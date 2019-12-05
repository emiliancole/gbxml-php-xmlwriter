<?php
include("../Gbxml.class.v01.php");

$xw= new Gbxml();
$xw->openURI('Material.txt');
$xw->startDocument('1.0');
$xw->setIndent(4);

$xw->startGbxml();
$xw->startMaterial();
$xw->writeName();
$xw->writeDescription();
$xw->writeAbsorptance();
$xw->writeRoughness();
$xw->writeAlbedo();
$xw->writeReflectance();
$xw->writeTransmittance();
$xw->writeEmittance();
$xw->writeImageTexture();
$xw->writeRvalue();
$xw->writeThickness();
$xw->writeConductivity();
$xw->writeDensity();
$xw->writeSpecificHeat();
$xw->writePermeance();
$xw->writePorosity();
$xw->startFire();
$xw->writeThickness('0.20');
$xw->writeConductivity('0.500');
$xw->endFire();
$xw->startCost();
$xw->writeCostValue('20.00');
$xw->writeReference('cost ref.');
$xw->endCost();
$xw->startIndoorAirQuality();
$xw->writeEmissionRate();
$xw->writeSinkRate();
$xw->writeHighLimit();
$xw->endIndoorAirQuality();
$xw->writeCADMaterialId();
$xw->writeReference('material ref.');
$xw->endMaterial();
$xw->endGbxml();

$xw->endDocument();
$xw->flush();

readfile("Material.txt");

?>