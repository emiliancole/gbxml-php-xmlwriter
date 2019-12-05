<?php
// === The Construction Element ===
// Construction is a combination of layers, such as a wall or a roof.
// Children: Name, Description, U-value, Absorptance, Roughness, Albedo, Reflectance, 
// Transmittance, Emittance, Cost, PercentExisting, FireFace, LayerId, ExtEquipId, 
// LoadCalcInputParameters.
trait Construction {

public function startConstruction($id="con-001"){
  $this->startElement('Construction');
  $this->writeAttribute('id',$id);         
    }
public function endConstruction() {
$this->endElement();
	}

//U-value is the Overall Conductance of the part. 
public function writeUvalue($text='6.452', $unit='WPerSquareMeterK') {
$this->startElement('U-value');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}

//PercentExisting is the percent of original building shell used in renovation.
public function writePercentExisting($text='0.00', $unit='Percent') {
$this->startElement('PercentExisting');
$this->writeAttribute('unit', $unit);
$this->text($text);
$this->endElement();
	}

//FireFace defines properties of a construction under fire conditions.
//Children are: Absorptance, Reflectance, and Emittance.
public function startFireFace() {
$this->startElement('FireFace');
	}
public function endFireFace() {
$this->endElement();
	}
    
//LayerId is an ID to identifying a layer in this construction. 
//Multiple layers in Constructions are in order from outside to inside.
public function writeLayerId($id='lay-001') {
$this->startElement('LayerId');
$this->writeAttribute('id', $id);
$this->endElement();
	}

//ExtEquipId is an ID to external equipments in this construction.
//Parents: Campus, Construction, and WindowType.
public function writeExtEquipId($extEquipIdRef='extequip-001') {
$this->startElement('ExtEquipId');
$this->writeAttribute('extEquipIdRef', $extEquipIdRef);
$this->endElement();
	}

//LoadCalcInputParameters defines all load parameters of this construction.
//Children are: RTSParameters, CLTDParameters, ManualJ8Parameters, FloorSlabHeatLossCoefficient.
public function startLoadCalcInputParameters() {
$this->startElement('LoadCalcInputParameters');
	}
public function endLoadCalcInputParameters() {
$this->endElement();
	}

//RTSParameters are parameters required by RTS load calculation method, 
//as described in pages 29.25 and following of the 2001 ASHRAE Handbook, Fundamentals volume. 
//Ignore this element and all elements under it if you are not planning to use that method.
//Children is: HOutside. 
public function startRTSParameters($roofCTSType='1', $wallCTSType='1') {
$this->startElement('RTSParameters');
$this->writeAttribute('roofCTSType', $roofCTSType);
$this->writeAttribute('wallCTSType', $wallCTSType);
	}
public function endRTSParameters() {
$this->endElement();
	}
    
//HOutside is the combined coefficient of heat transfer by long-wave radiation and convection 
//at outer surface, Btu/h-sf-F. See 2001 HoF Chapter 25 Table 1.
//Parent is: Layer RTSParameters.
public function writeHOutside($text='0.000', $hOutsideUnitTypeEnum ='WattsPerSecondSquareMeterDegreeC') {
$this->startElement('HOutside');
$this->writeAttribute('hOutsideUnitTypeEnum ', $hOutsideUnitTypeEnum );
$this->text($text);
$this->endElement();
	}

//CLTDParameters refers to the parameters required by CLTD load calculation method, 
//as described in the 1989 ASHRAE Handbook, Fundamentals volume, pages 26.32 and following. 
//Ignore this element and all elements under it if you are not planning to use that method.
//Parent is: LocalCalcInputParameters.
public function writeCLTDParameters($roofASHRAENumber='0', $wallASHRAEGroup='A',
	$roofColor='Dark', $roofHasSuspendedCeiling='false', $wallColor='Medium') {
$this->startElement('CLTDParameters');   
$this->writeAttribute('roofASHRAENumber', $roofASHRAENumber);
$this->writeAttribute('wallASHRAEGroup', $wallASHRAEGroup);
$this->writeAttribute('roofColor', $roofColor);
$this->writeAttribute('roofHasSuspendedCeiling', $roofHasSuspendedCeiling);
$this->writeAttribute('wallColor', $wallColor);
$this->endElement();
	} 
    
//ManualJ8Parameters refers to the Parameters required by the ACCA Manual J Eighth Edition 
//load calculation method. 
//Ignore this element and all elements under it if you are not planning to use that method.
//Parent is: LocalCalcInputParameters.
public function writeManualJ8Parameters($wallGroupManualJ='A', $roofCLTDIndex='1',
	$floorIsRadiant ='false', $floorCrawlSpaceWallUValue='0.000', $floorCrawlSpaceIsSealed='true',
    $floorCategory='OverEnclosedCrawlSpaceOrBasement') {
$this->startElement('ManualJ8Parameters');   
$this->writeAttribute('wallGroupManualJ', $wallGroupManualJ);
$this->writeAttribute('roofCLTDIndex', $roofCLTDIndex);
$this->writeAttribute('floorIsRadiant ', $floorIsRadiant );
$this->writeAttribute('floorCrawlSpaceWallUValue', $floorCrawlSpaceWallUValue);
$this->writeAttribute('floorCrawlSpaceIsSealed', $floorCrawlSpaceIsSealed);
$this->writeAttribute('floorCategory', $floorCategory);
$this->endElement();
	} 

//FloorSlabHeatLossCoefficient Specifies the heat loss from a floor 
//in terms of the amount of heat lost per length of exposed perimeter. 
//Used with both commercial and residential load calculation methods.
//Parent is: LocalCalcInputParameters.
public function writeFloorSlabHeatLossCoefficient($text='0.000', 
$floorSlabPerimeterHeatLossCoefficientUnitTypeEnum='wattDegreeCPerLinearMeter') {
$this->startElement('FloorSlabHeatLossCoefficient');
$this->writeAttribute('floorSlabPerimeterHeatLossCoefficientUnitTypeEnum',$floorSlabPerimeterHeatLossCoefficientUnitTypeEnum );
$this->text($text);
$this->endElement();
	}

// === End of Construction Element ===

} //END OF TRAIT

?>
