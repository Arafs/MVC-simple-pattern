<?php
class Home extends Controller {
	
	public function __construct () {
		require_once "..\app\models\\" . get_class($this) . ".php";
		$model = new Model(); // Constructor for our controller where the application begins. 
		$views = new Views();			//Creating an instance of our Model class.
	}
	
	public function index () {
		///app for the index page
	}
	 
}
