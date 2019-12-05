<?php
// === The Layer Element ===
// Layer is a description of a material in a composite construction.  
// Its id attribute is referenced in the Contstruction element's LayerId
// Children: Name, Description, Cost, InsideAirFilmResistance, MaterialId, HOutside.
trait Layer {

public function startLayer($id="lay-001"){
  $this->startElement('Layer');
  $this->writeAttribute('id',$id);         
    }
public function endLayer() {
$this->endElement();
	}

//MaterialId is a reference to the materials that makes up the layer.
public function writeMaterialId($materialIdRef='mat-001') {
$this->startElement('MaterialId');
$this->writeAttribute('materialIdRef', $materialIdRef);
$this->endElement();
	}

//InsideAirFilmResistance is the thermal resistance of the internal air film in a layer.
public function writeInsideAirFilmResistance($text='0.00', $unit='SquareMeterKPerW') {
$this->startElement('InsideAirFilmResistance');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}
    
// === End of Material Element ===

} //END OF TRAIT

?>
