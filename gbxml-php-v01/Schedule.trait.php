<?php
// === The Schedule Element ===
// Schedule is a list of year schedules that make up an entire calendar year. 
// Parent: gbXML.
// Children: Name, Description, YearSchedule.
trait Schedule {

public function startSchedule($id="sch-001", $type='Temp'){
  $this->startElement('Schedule');
  $this->writeAttribute('id',$id); 
  $this->writeAttribute('type',$type);
    }
public function endSchedule() {
$this->endElement();
	}
    
public function startYearSchedule($id="ysch-001"){
  $this->startElement('YearSchedule');
  $this->writeAttribute('id',$id); 
    }
public function endYearSchedule() {
$this->endElement();
	}

//BeginDate is the month and day year schedule begins.
public function writeBeginDate($text='2019-11-16') {
$this->writeElement('BeginDate', $text);
	}

//EndDate is the month and day year schedule ends.
public function writeEndDate($text='2020-11-16') {
$this->writeElement('EndDate', $text);
	}
    
//WeekScheduledId is the id reference to the scheduled week.
public function writeWeekScheduledId($weekScheduleIdRef='weeksch-001') {
$this->startElement('WeekScheduledId');
$this->writeAttribute('weekScheduleIdRef',$weekScheduleIdRef); 
$this->endElement();
	}
    
// === End of Schedule Element ===

} //END OF TRAIT

?>
