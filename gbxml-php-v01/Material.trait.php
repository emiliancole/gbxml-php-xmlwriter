<?php
// === The Material Element ===
//Material is used to reference objects in the DOE2 library. 
//Parent: gbXML.
//Children: Name, Description, Absorptance, Roughness, Albedo, Reflectance, Transmittance, 
//Emittance, ImageTexture, R-value, Thickness, Conductivity, Density, SpecificHeat, 
//Permeance, Porosity, RecycledContent, Fire, Cost, IndoorAirQuality, CADMaterialId, and Reference.
trait Material {

public function startMaterial($id="mat-001"){
  $this->startElement('Material');
  $this->writeAttribute('id',$id);         
    }
public function endMaterial() {
$this->endElement();
	}

//Name is the Name of this Material.
public function writeName($name='material name') {
$this->writeElement('Name', $name);
}

////Description is Description of this Material.
public function writeDescription($description='material description') {
$this->writeElement('Description', $description);
}

//Absorptance of the surface of a material is its effectiveness in absorbing radiant energy. 
public function writeAbsorptance($text='0.500', $unit='Percent', $type='IntIR') {
$this->startElement('Absorptance');
$this->writeAttribute('unit', $unit);
$this->writeAttribute('type', $type);
$this->text($text);
$this->endElement();
}

//Roughness is a component of surface texture. 
public function writeRoughness($value='Rough') {
$this->startElement('Roughness');
$this->writeAttribute('value', $value);
$this->endElement();
}

//Albedo is the measure of the diffuse reflection of solar radiation 
//out of the total solar radiation received by an astronomical body (e.g. the Earth).
public function writeAlbedo($text='0.55', $unit='Percent') {
$this->startElement('Albedo');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//Reflectance of the surface of a material is its effectiveness in reflecting radiant energy.
public function writeReflectance($text='20', $unit='Percent', $type='IntIR', $surfaceType='1') {
$this->startElement('Reflectance');
$this->writeAttribute('unit', $unit);
$this->writeAttribute('type', $type);
$this->writeAttribute('surfaceType', $surfaceType);
$this->text($text);
$this->endElement();
}

//Transmittance of shading surface.
public function writeTransmittance($text='10', $unit='Percent', $type='Solar', $surfaceType='1') {
$this->startElement('Transmittance');
$this->writeAttribute('unit', $unit);
$this->writeAttribute('type', $type);
$this->writeAttribute('surfaceType', $surfaceType);
$this->text($text);
$this->endElement();
}

//Infra-red emissivity.
public function writeEmittance($text='0.90', $unit='Percent', $type='IntIR', $surfaceType='Both') {
$this->startElement('Emittance');
$this->writeAttribute('unit', $unit);
$this->writeAttribute('type', $type);
$this->writeAttribute('surfaceType', $surfaceType);
$this->text($text);
$this->endElement();
}

//ImageTexture is an X3D element to map a texture to this material. 
public function writeImageTexture($url='http://example.com/image.png', $repeatS='true', $repeatT='true') {
$this->startElement('ImageTexture');
$this->writeAttribute('url', $url);
$this->writeAttribute('repeatS', $repeatS);
$this->writeAttribute('repeatT', $repeatT);
$this->endElement();
}

//Resistance of material.
public function writeRvalue($text='2.38', $unit='SquareMeterKPerW') {
$this->startElement('R-value');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//Thickness of material.
public function writeThickness($text='0.30', $unit='Meters') {
$this->startElement('Thickness');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//Conductivity of material.
public function writeConductivity($text='0.725', $unit='WPerMeterK') {
$this->startElement('Conductivity');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//Density of material.
public function writeDensity($text='1810.260', $unit='KgPerCubicM') {
$this->startElement('Density');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//Specific Heat of material.
public function writeSpecificHeat($text='837.360', $unit='JPerKgK') {
$this->startElement('SpecificHeat');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//Permeance is the rate water vapor allowed through a surface.
public function writePermeance($text='1.000', $unit='PermSI') {
$this->startElement('Permeance');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//Porosity is the ratio of the total amount of void space in a material 
//to the bulk volume occupied by the material. 
public function writePorosity($text='5.0', $unit='Percent') {
$this->startElement('Porosity');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//RecycledContent refers to the portion of materials used in a product 
//that have been diverted from the solid waste stream.
public function writeRecycledContent($text='20.0', $unit='Percent') {
$this->startElement('RecycledContent');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
}

//Fire refers to the properties of a material under fire conditions.
//Its children are: Thickness, Conductivity, Density, and SpecificHeat.
public function startFire(){
  $this->startElement('Fire');       
    }
public function endFire() {
$this->endElement();
	} 

//Cost refers to the cost of a material.
//Its children are: CostValue and Reference.
public function startCost($costType='PurchaseCost'){
  $this->startElement('Cost');  
  $this->writeAttribute('costType',$costType);
    }
public function endCost() {
$this->endElement();
	}  

//CostValue refers to the amount of currency of a material.
public function writeCostValue($text='100.00', $currency='Euros') {
$this->startElement('CostValue');
$this->writeAttribute('currency', $currency);
$this->text($text);
$this->endElement();
}

//Reference refers to a reference about the parent (e.g. Cost).
public function writeReference($text='the reference') {
$this->startElement('Reference');
$this->text($text);
$this->endElement();
}

//IndoorAirQuality refers to the Indoor Air Quality of a material.
//Its children are: EmissionRate, SinkRate, and HighLimit.
public function startIndoorAirQuality($id='iaq-001'){
  $this->startElement('IndoorAirQuality');  
  $this->writeAttribute('id',$id);
    }
public function endIndoorAirQuality() {
$this->endElement();
	}  

//EmissionRate is the Emission Rate of the parent IndoorAirQuality.
public function writeEmissionRate($text='0.00', $unit='GramsPerHour') {
$this->startElement('EmissionRate');
$this->writeAttribute('unit',$unit);
$this->text($text);
$this->endElement();
}

//SinkRate is the Sink Rate of the parent IndoorAirQuality.
public function writeSinkRate($text='0.00', $unit='GramsPerHour') {
$this->startElement('SinkRate');
$this->writeAttribute('unit',$unit);
$this->text($text);
$this->endElement();
}

//HighLimit is the High Limit of the parent IndoorAirQuality.
public function writeHighLimit($text='10.00', $unit='Percent') {
$this->startElement('HighLimit');
$this->writeAttribute('unit',$unit);
$this->text($text);
$this->endElement();
}

//CADMaterialId is an ID used by a CAD/BIM program to reference its internal materials library.
public function writeCADMaterialId($CADMaterialIdRef='cadmatid-001') {
$this->startElement('CADMaterialId');
$this->writeAttribute('CADMaterialIdRef',$CADMaterialIdRef);
$this->endElement();
}

// === End of Material Element ===

} //END OF TRAIT

?>
