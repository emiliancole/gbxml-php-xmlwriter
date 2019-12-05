<?php

//Parent: ClosedShell, PlanarGeometry, RectangularGeometry.
//Children: CartesianPoint.
trait PolyLoop {

public function startPolyLoop() {
$this->startElement('PolyLoop');
	}
public function endPolyLoop() {
$this->endElement();
	}

// <CartesianPoint>: a child of <PolyLoop> or <RectangularGeometry>
public function writeCpoint($x='0', $y='0', $z='0') {
$this->startElement('CartesianPoint');
$this->writeElement('Coordinate', $x);
$this->writeElement('Coordinate', $y);
$this->writeElement('Coordinate', $z);
$this->endElement();
	}
    
// === End of PolyLoop Element ===

} //END OF TRAIT

?>
