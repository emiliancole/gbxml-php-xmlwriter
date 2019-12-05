<?php
include('Campus.trait.php');
include('Construction.trait.php');
include('Layer.trait.php');
include('Material.trait.php');
include('Schedule.trait.php');
include('Zone.trait.php');
include('DocumentHistory.trait.php');
include('Location.trait.php');
include('Building.trait.php');
include('Surface.trait.php');
include('Space.trait.php');
include('AdjacentSpaceId.trait.php');
include('RectangularGeometry.trait.php');
include('PolyLoop.trait.php');

// === The gbXML Element ===
// gbXML is the root element in Green Building XML.
// Children: aecXML Campus LightingSystem LightingControl Construction Layer Material 
// WindowType Schedule WeekSchedule DaySchedule Zone AirLoop HydronicLoop IntEquip 
// ExtEquip Weather Meter Results DocumentHistory SimulationParameters
class Gbxml extends XMLWriter {
use Campus, Construction, Layer, Material, Schedule, Zone, DocumentHistory;
use Location;
use Building;
use Surface;
use Space;
use AdjacentSpaceId;
use RectangularGeometry;
use PolyLoop;

public function startGbxml($id="gbxml-001", $engine="analysis-eng-001",
      $temperatureUnit="C", $lengthUnit="Meters", $areaUnit="SquareMeters",
      $volumeUnit="CubicMeters", $useSIUnitsForResults="true", $version="0.37") {
  $this->startElement('gbXML');
  $this->writeAttribute('id',$id);   
  $this->writeAttribute('engine',$engine);
  $this->writeAttribute('temperatureUnit',$temperatureUnit);
  $this->writeAttribute('lengthUnit',$lengthUnit);
  $this->writeAttribute('areaUnit',$areaUnit);
  $this->writeAttribute('volumeUnit',$volumeUnit);
  $this->writeAttribute('useSIUnitsForResults',$useSIUnitsForResults);
  $this->writeAttribute('version',$version);
    }
public function endGbxml() {
$this->endElement();
	}
    
}
//=== END OF CLASS ===

?>


