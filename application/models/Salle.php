<?php
abstract class Application_Model_Salle extends Application_Model_Tablesalle
{
protected $_designation;
    public function getDesignation() { return $this->_designation; }
    public function setDesignation($value) { $this->_designation = $value; }
	}
?>