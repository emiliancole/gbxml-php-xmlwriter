<?php
include("../Gbxml.class.v01.php");

$xw= new Gbxml();
$xw->openURI('Construction.txt');
$xw->startDocument('1.0');
$xw->setIndent(4);
$xw->startGbxml();

$xw->startConstruction();
$xw->writeName('R0 3m CMU Wall');
$xw->writeDescription('ASHRAE 90.1 compliant R0 concrete or block wall');
$xw->writeUvalue();
$xw->writeRoughness();
$xw->writeAlbedo();
$xw->writeReflectance();
$xw->writeTransmittance();
$xw->writeEmittance();
$xw->startCost();
$xw->writeCostValue('20.00');
$xw->writeReference('cost ref.');
$xw->endCost();
$xw->writePercentExisting();
$xw->writeLayerId();
$xw->writeExtEquipId();

$xw->startLoadCalcInputParameters();
$xw->writeCLTDParameters();
$xw->writeManualJ8Parameters();
$xw->writeFloorSlabHeatLossCoefficient();
$xw->endLoadCalcInputParameters();

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

$xw->startIndoorAirQuality();
$xw->writeEmissionRate();
$xw->writeSinkRate();
$xw->writeHighLimit();
$xw->endIndoorAirQuality();

$xw->writeCADMaterialId();
$xw->writeReference('material ref.');
$xw->endConstruction();
$xw->endGbxml();
$xw->endDocument();
$xw->flush();

readfile("Construction.txt");
?>
