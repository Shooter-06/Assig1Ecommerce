<?php
function __autoload($className) {
    $filename = $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}


/*
<?php
//this is 75% of a PSR-4 autoloader
spl_autoload_register(
	function($class_name){
		require_once ($class_name . ".php");
	}
);
*/
