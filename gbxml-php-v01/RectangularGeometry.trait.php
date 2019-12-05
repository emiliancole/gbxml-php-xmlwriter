<?php
/**
// gbxml-php-xmlwriter
// RectangularGeometry class extends the PolyLoop class for gbXml Green Building XML.
// startTagName open the gbXml tag element and set its attibutes.
// endTagName close the gbXml tag element.
// writeTagName open the tag element, set its attributes, set content, and close it.
*/

//include("PolyLoop.class.php");

trait RectangularGeometry {

// <RectangularGeometry>: a child of <Surface> or <Opening>
public function startRectangularGeometry() {
$this->startElement('RectangularGeometry');
	}
public function endRectangularGeometry() {
$this->endElement();
	}

// <Azimuth>: a child of <RectangularGeometry>
public function writeAzimuth($val='0') {
$this->writeElement('Azimuth', $val);
	}

// <Height>: a child of <RectangularGeometry>
public function writeHeight($val='0') {
$this->writeElement('Height', $val);
	}

// <Tilt>: a child of <RectangularGeometry>
public function writeTilt($val='0') {
$this->writeElement('Tilt', $val);
	}

// <Width>: a child of <RectangularGeometry>
public function writeWidth($val='0') {
$this->writeElement('Width', $val);
	}
    
// === End of RectangularGeometry Element ===

} //END OF TRAIT

?>
