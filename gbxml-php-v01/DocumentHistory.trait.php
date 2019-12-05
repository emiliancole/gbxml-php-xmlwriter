<?php
// === The DocumentHistory Element ===
// DocumentHistory contains details about people and programs that created and modified this file.  
// Parent: gbXML.
// Children: CreatedBy, ProgramInfo, PersonInfo, ModifiedBy.
trait DocumentHistory {

public function startDocumentHistory(){
  $this->startElement('DocumentHistory');   
    }
public function endDocumentHistory() {
$this->endElement();
	}

//CreatedBy denotes the time this file has been created, 
//as well as the person and program used to create this file.
//Children: CADModelId.
public function writeCreatedBy($personId='perid-001', $programId='progid-001', 
	$date='2019-11-18') {
$this->startElement('CreatedBy');
$this->writeAttribute('personId', $personId);
$this->writeAttribute('programId', $programId);
$this->writeAttribute('date', $date);
$this->endElement();
	}

//ProgramInfo contains information about programs that created and modified this file.
//Children: CompanyName, ProductName, Version, Platform, ProjectEntity.
public function writeProgramInfo($id='proginfo') {
$this->startElement('ProgramInfo');
$this->writeAttribute('id', $id);
$this->endElement();
	}
    
//PersonInfo contains information about people that created and modified this file.
//Children: FirstName LastName MiddleName Address1 Address2 City State ZipCode Country 
//PhoneNumber Email1Address WebPage CompanyName.
public function writePersonInfo($id='persinfoId') {
$this->startElement('PersonInfo');
$this->writeAttribute('id', $id);
$this->endElement();
	}
    
//ModifiedBy denotes the time this file has been modified, as well as the person 
//and program used to modify this file.
public function writeModifiedBy($personId='perid-001', $programId='progid-001', 
	$date='2019-11-18') {
$this->startElement('ModifiedBy');
$this->writeAttribute('personId', $personId);
$this->writeAttribute('programId', $programId);
$this->writeAttribute('date', $date);
$this->endElement();
	}
    
// === End of DocumentHistory Element ===

} //END OF TRAIT

?>
