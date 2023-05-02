<?php

class autoLoader {

	public function __construct() {

		spl_autoload_register(array($this,'autoload'));
		
	}

	public function autoload( $class_name ) {

		$file = $this->convert_class_to_file($class_name);
		if(is_file($file) && file_exists($file) && is_readable($file)){
			include ($file);
		}
	}

	public function convert_class_to_file( $class_name ) {

		$class = strtolower($class_name);
		$class_file_name = "class-".$class.".php";
		$class_path = THEME_PATH.DIRECTORY_SEPARATOR.THEME_CLASSES_PATH.DIRECTORY_SEPARATOR.$class_file_name;

		return $class_path;

	}

}

new autoLoader();

?>