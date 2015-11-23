<?php
class Home extends Controller {
	
	public function __construct () {
		require_once "..\app\models\\" . get_class($this) . ".php";
		$model = new Model(); // Constructor for our controller where the application begins. 
					//Creating an instance of our Model class, which will lead to our views
	}
	
	public function index () {
		///app for the index page
	}
	 
}
