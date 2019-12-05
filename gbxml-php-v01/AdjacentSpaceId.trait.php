<?php

//AdjacentSpaceId References the ID of a Space that is bounded by this surface. 
//First AdjacentSpaceId entered will determine how the referenced construction layers 
//are ordered with the first construction layer being in contact with the outside 
//or 2nd space listed and the last layer in contact with the first space listed. 
//The outward normal of the surface, as defined by the right hand rule of the coordinates 
//in the planar geometry element, is always pointing away from the first AdjacentSpaceID listed.
//Parent: Surface.
trait AdjacentSpaceId {

public function writeAdjacentSpaceId($spaceIdRef='spaceid01') {
$this->startElement('AdjacentSpaceId');
$this->writeAttribute('spaceIdRef', $spaceIdRef);
$this->endElement();
	}
    
}

    