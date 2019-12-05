<?php

// Parent: Campus.
// Children: StationId Name Description ZipcodeOrPostalCode Longitude Latitude 
// Elevation CADModelAzimuth.
trait Location {

public function writeLocation($zipcode='65100', $name='Pescara', $lat='42.455', 
	$long='14.168', $cadmodaz='0.000') {
$this->startElement('Location');
$this->writeElement('ZipcodeOrPostalCode', $zipcode);
$this->writeElement('Name', $name);
$this->writeElement('Latitude', $lat);
$this->writeElement('Longitude', $long);
$this->writeElement('CADModelAzimuth', $cadmodaz);
$this->endElement();
	}
    
}

?>