<?php
namespace \app\core;

class controller{
	protected function ($name, $data=[]){
		include('app\\views\\' .$name . '.php');
	}
}
