<?php

class assets {

//	public static function __callStatic( $method_name, $args ) {
//		var_dump($method_name, $args);
//	}
	public static function css( $file_name ) {
		$file_url = THEME_URL."/assets/css/".$file_name;
		echo $file_url;
	}

	public static function js(  ) {
		$file_url = THEME_URL."/assets/js/".$file_name;
		echo $file_url;
	}

	public static function image(  ) {
		$file_url = THEME_URL."/assets/images/".$file_name;
		echo $file_url;
	}
}
