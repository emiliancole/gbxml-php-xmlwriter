<?php

//Building 
//Parent: Campus.
//Children: Name Description StreetAddress Area Space AverageNumberOfFloors InfiltrationFlow 
//ShellGeometry SpaceBoundary Lighting IntEquipId MeterId PeakDomesticHotWaterFlow BuildingStorey
trait Building {

public function startBuilding($id='building01', $buildingType='Unknown') {
$this->startElement('Building');
$this->writeAttribute('id',$id);
$this->writeAttribute('buildingType',$buildingType);
	}
public function endBuilding() {
$this->endElement();
	}
    
}

