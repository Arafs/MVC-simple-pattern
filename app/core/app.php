<?php

class App {
	protected $controller = 'home';
	protected $methods = 'index';
	protected $params = [];
	
	public function __construct () {
	
		$url = $this->parseUrl();
		if (file_exists('..app\controllers\\'. $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
		}
		require_once '..\app\controllers\\'.$this->controller . '.php';
		$this->controller = new $this->controller;
		
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->methods = $url[1];
				unset($url[1]);

			}
		}
		call_user_func([$this->controller, $this->methods]);
	}
	
	public function parseUrl() {
		if (!empty($_GET['url'])) { 
			 return $url = explode('/', 
			 (rtrim($_GET['url']. '/'), FILTER_SANITIZE_URL));
		}
	}
}
 