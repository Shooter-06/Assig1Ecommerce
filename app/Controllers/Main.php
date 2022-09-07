<?php
namespace app\Controllers;

class Main extends \app\core\controller{
	public function emails(){
		if(isset($_POST['action'])){
			$food = new \app\models\email();
			$food->name = $_POST['new_email'];
			$food->insert();
		}
	}
}