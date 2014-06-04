<?php 
class Showcase {
	private $_dir;
	private $_json;
	private $_html;
	private $_count;
	private $_depth;
	
	// Private constructure to ensure that all objects are created through create() method
	private function __construct($dir) {
		$this->_dir = $dir;
	}
	
	// Object Factory method to be called ont he object to create objects
	public static function create($path) {
		/* Check if tihs is a valid directory */
		if ($dir=dir($path)) {
			if (!Showcase::_isShowcase($dir)) return null;		// return false if this is not a showcase	
		}
			
		else return null;		//Invalid directory
		
		// Create Object
		return new Showcase($dir); 
	}
	
	/* Method to check if this directory is a Showcase */
	private static function _isShowcase($dir) {
		if (file_exists($dir . '/showcase.json') || file_exists($dir . '/showcase.html')) {
			return false;
		}
	}
	
	/* Function to establish what to render */
	public function render($depth=0) {
		
		
	}
	
	/* Method to create a list of resources to be show within the showcase */
	private function _listDir() {
		
		
		
	}

	
	
}
?>