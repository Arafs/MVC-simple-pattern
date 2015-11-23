<?php
class Home extends Controller {
	
	public function __construct () {
		require_once "..\app\models\\" . get_class($this) . ".php";
		$model = new Model();
	}
	
	public function index () {
		
	}
	 
}