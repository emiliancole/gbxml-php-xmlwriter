<?php
// === The Campus Element ===
// The Campus element should be used as the base for all physical objects. 
// On a campus, place one or more buildings.
// Parent: gbXML.
// Children: Name Description Location Building Surface YearModeled DaylightSavings 
// Life AltEnergySource ShellGeometry Vegetation Transportation MeterId ExtEquipId 
// Lighting LightControlId
trait Campus {

public function startCampus($id='campus-01') {
$this->startElement('Capus');
$this->writeAttribute('id',$id);
	}
public function endCampus() {
$this->endElement();
	}   
}
//=== END OF TRAIT ===

?>


