<?php

function arrayObject($array, $class="stdClass"){
	$object = new $class;
	if(empty($array)){
		return false;
	}
	foreach ($array as $key => $value) {
		if(strlen($key)){
			if(is_array($value)){
				$object->{$key} = arrayObject($value, $class);
			}else{
				$object->{$key} = $value;
			}
		}
	}
	return $object;
}

function escambo_route(){
	$root = str_replace("\\", "/", dirname(dirname(__FILE__)));
	$defaults = array(
        'www' => "$root/",
       	'function' => "$root/functions/",
       	'controller' => "$root/controllers/",
       	'view' => "$root/views/",
        'model' => "$root/models/",
       	'include' => "$root/includes/", 
        'libs' => "$root/libraries/",
        'classes' => "$root/classes/",
        'actions' => "$root/actions/",
        'locale' => "$root/locale/",
        'sys' => "$root/system/",
        'configs' => "$root/configurations/",
        'themes' => "$root/themes/",
        'pages' => "$root/pages/",
        'com' => "$root/components/",
        'admin' => "$root/admin/",
        'forms' => "$root/forms/",
        'upgrade' => "$root/upgrade/",
        'cache' => "{$root}/cache/",
        'js' => "$root/javascripts/",
		'system' => "$root/system/",
		'component' => "$root/components/",
    );
    return arrayObject($defaults);
}