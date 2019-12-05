<?php

//Space represents a volume enclosed by surfaces.
//Parent: Building.
//Children: Name Description Lighting LightingControl InfiltrationFlow PeopleNumber 
//PeopleHeatGain LightPowerPerArea EquipPowerPerArea AirChangesPerHour Area Temperature 
//Volume PlanarGeometry ShellGeometry AirLoopId HydronicLoopId 
//MeterId IntEquipId AirLoopEquipmentId HydronicLoopEquipmentId CADObjectId TypeCode SpaceBoundary
trait Space {

public function startSpace($id='sp001', $zoneIdRef='zone01', $conditionType='HeatedAndCooled', 
	$buildingStoreyIdRef="group01") {
$this->startElement('Space');
$this->writeAttribute('id', $id);
$this->writeAttribute('zoneIdRef', $zoneIdRef);
$this->writeAttribute('conditionType', $conditionType);
$this->writeAttribute('buildingStoreyIdRef', $buildingStoreyIdRef);
	}
public function endSpace() {
$this->endElement();
	}

//Specifies the volume of the space. This value should be equal to the volume 
//enclosed by the actual physical boundaries of the space, 
//as defined by the volumetric model's interior surfaces bounding that space.
//Parent: Space.
public function writeVolume($text='0.00', $unit='CubicMeters') {
$this->startElement('Volume');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}

//Area specifies the area of the space or building. This value should be equal to the area 
//enclosed by the physical boundaries of the space, as defined by the intersection 
//of the horizontal plane at the highest floor height and the volumetric model's vertical 
//interior surface planes. 
//Building area should be the sum of space areas whose PeopleNumber element values 
//are greater than zero.
//Parent: Building, Space.
public function writeArea($text='0.00', $unit='SquareMeters') {
$this->startElement('Area');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
//NumberOfPeople is the occupancy of the space. 
//Parent: Space.
public function writePeopleNumber($text='10', $unit='NumberOfPeople') {
$this->startElement('PeopleNumber');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}

//ShellGeometry is used to define a union of closed shells, 
//where there is no intersection of any two of the given shells.
//Children: Name Description ClosedShell.
//Parent: AirLoopEquipment Building Campus ExtEquip HydronicLoopEquipment IntEquip 
//Lighting LightingControl LightingSystem Space Transportation Vegetation
public function startShellGeometry($id='shellgeo-001', $unit='Meters') {
$this->startElement('ShellGeometry');
$this->writeAttribute('id', $id);
$this->writeAttribute('unit', $unit);
	}
public function endShellGeometry() {
$this->endElement();
	}
    
//ClosedShell is an element from ifcXML that describes a collection of faces 
//that make up a closed shell.
public function startClosedShell() {
$this->startElement('ClosedShell');
	}
public function endClosedShell() {
$this->endElement();
	}
    
}
//=== END OF TRAIT ===

?>

