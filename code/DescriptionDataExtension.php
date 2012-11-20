<?php
class DescriptionDataExtension extends DataExtension {

	public function getCMSFields() {
 		$fields = parent::getCMSFields();
		$this->extend('updateCMSFields', $fields);
	    return $fields;
	}

	public function updateCMSFields(FieldList $fields) {
 		$owner = $this->owner;
 		if ( isset($owner::$db_descriptions)) foreach ($owner::$db_descriptions as $field => $description) {
	    	$fields->dataFieldByName($field)->setDescription($description);
 		}
	}
}