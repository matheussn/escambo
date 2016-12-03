<?php
function chk_array ( $array, $key ) {

	if ( isset( $array[ $key ] ) && ! empty( $array[ $key ] ) ) {
		return $array[ $key ];
	}	
	return null;
}

function __autoload($class_name) {
	$file = (escambo_route()->classes . 'class-' . $class_name . '.php');
	
	if ( ! file_exists( $file ) ) {
		require_once(escambo_route()->include . '404.php');
		return;
	}
    require_once $file;
} 
