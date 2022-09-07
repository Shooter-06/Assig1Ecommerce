<?php
namespace app\Models;

class email{
private static $file = 'app/Resources/log.txt';
public $name; 

	public function insertEmail(){
		//insert a new email

		$fh = fopen(self::$file, 'a');
		flock($fh, LOCK_EX);
		fwrite($fh, $this->name . "\n");
		flock($fh, LOCK_UN);
		fclose($fh);
	}

	public function __toString(){
		return $this->name; 
	}
}