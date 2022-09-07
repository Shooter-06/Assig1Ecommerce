<?php
namespace app\core;

class App{
	private $controller = 'Main';
	private $method = 'index';

	private function __construct(){
		$url = self::parse_url();

		if(isset($url[0])){
			if(file_exists('app/controllers' . $url[0] . '.php')){
				$this->controller = $url[0];
			}
			unset($url[0]);
		}
		$this->controller ='app\\controllers\\' .$this->controller;
		$this->controller= new $this->controller;

		if(isset($ur[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
			}
			unset($url[1]);
		}

		$params = $url ? array_values($url) : [];
		call_user_func_array([$this->controller, $this->method], $params);
	}

	public static function parse_url(){
		if(isset($_GET['url'])){
			return explode('/', filter_var(  //DO WE NEED TO SEPARATE THE PARTS WITH THE /
				rtrim($_GET['url'], '/')), 
			FILTER_SANITIZE_URL);
		}
	}
}