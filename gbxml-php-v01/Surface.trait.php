<?php
//Surface delimits two spaces.
//Parent: Campus. 
//Children: Name Description FamilyName AdjacentSpaceId RectangularGeometry 
//PlanarGeometry Opening CADObjectId
trait Surface {
public function startSurface($id='srf-001', $surfaceType='InteriorWall', 
	$constructionIdRef='constructionIdRef-001') {
$this->startElement('Surface');
$this->writeAttribute('id', $id);
$this->writeAttribute('surfaceType', $surfaceType);
$this->writeAttribute('constructionIdRef', $constructionIdRef);
	}
public function endSurface() {
$this->endElement();
	}
    
//Opening is a window or a door.
//Children: Name Description ShadeControl U-value ShadingCoeff SolarHeatGainCoeff 
//Transmittance Reflectance GlazeConductivity Emittance Setback NaturalVentHiTemp 
//NaturalVentLoTemp NaturalVentOccDep RectangularGeometry PlanarGeometry CADObjectId
public function startOpening($id='opening01', $windowTypeIdRef='win01', 
	$openingType="FixedWindow") {
$this->startElement('Opening');
$this->writeAttribute('id',$id);
$this->writeAttribute('windowTypeIdRef',$windowTypeIdRef);
$this->writeAttribute('openingType',$openingType);
	}
public function endOpening() {
$this->endElement();
	}
    
//PlanarGeometry is a list of points defining a loop. 
//There are no repeated points in the list. All data are global, 
//with the assumption that positive Z is up, 
//and if CADModelAzimuth is undefined or zero, positive X is East and positive Y is North. 
//Children: PolyLoop.
public function startPlanarGeometry() {
$this->startElement('PlanarGeometry');
	}
public function endPlanarGeometry() {
$this->endElement();
	}
    
}
    
//=== END OF TRAIT ===

?>
