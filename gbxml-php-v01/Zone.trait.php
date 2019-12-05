<?php
// === The Zone Element ===
// Zone is a description of a heating/cooling zone delimited by surfaces.  
// Parent: gbXML.
// Children: Name Description Flow SecondaryFlow AirChangesPerHour FlowPerArea 
// FlowPerPerson OAFlowPerArea OAFlowPerPerson OAFlowPerZone MaxOAFlowPerZone 
// MinOAFlowPerZone MinimumOutdoorAirControlType DesignHeatT DesignCoolT IndoorAirQuality 
// HydronicLoopId AirLoopId CADObjectId TypeCode CoolingSizingFactor HeatingSizingFactor 
// BaseboardHeatingType BaseboardHeatingCapacity
trait Zone {

public function startZone($id="lay-001"){
  $this->startElement('Zone');
  $this->writeAttribute('id',$id);         
    }
public function endZone() {
$this->endElement();
	}

//Flow ...
public function writeFlow($text='0.00', $unit='CubicMPerHr') {
$this->startElement('Flow');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}

//SecondaryFlow ...
public function writeSecondaryFlow($text='0.00', $unit='CubicMPerHr') {
$this->startElement('SecondaryFlow');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
//AirChangesPerHour ...
public function writeAirChangesPerHour($text='0.00') {
$this->writeElement('AirChangesPerHour', $text);
	}
    
//FlowPerArea ...
public function writeFlowPerArea($text='0.00', $unit='CubicMPerHourPerSquareM') {
$this->startElement('FlowPerArea');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
//FlowPerPerson ...
public function writeFlowPerPerson($text='0.00', $unit='CubicMPerHr') {
$this->startElement('FlowPerPerson');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
//OAFlowPerArea ...
public function writeOAFlowPerArea($text='0.00', $unit='CubicMPerHourPerSquareM') {
$this->startElement('OAFlowPerArea');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
//OAFlowPerPerson ...
public function writeOAFlowPerPerson($text='0.00', $unit='CubicMPerHr') {
$this->startElement('OAFlowPerPerson');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
//DesignHeatT ...
public function writeDesignHeatT($text='0.00', $unit='C') {
$this->startElement('DesignHeatT');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
//DesignCoolT ...
public function writeDesignCoolT($text='0.00', $unit='C') {
$this->startElement('DesignCoolT');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
//CADObjectId ...
public function writeCADObjectId($text='123456') {
$this->writeElement('CADObjectId', $text);
	}
    
// === End of Zone Element ===

} //END OF TRAIT

?>
