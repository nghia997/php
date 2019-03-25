<?php
	/**
	 * Router
	 */
	class Router
	{
		
		 function __construct()
		{
			
		}
		private function getRequestURL(){
			$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
			$url = str_replace('/Framework/public/', '',$url);
			$url = $url === '' || empty($url) ? '/' : $url;
			return $url;
		}
		private function getRequestMethod(){
			$method =  isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
			return $method;
		}
		public function get(){
			
		}
		function run(){
			//$url = $this->getRequestURL();
			$method=$this->getRequestMethod();
			echo $method;
		}
	}
?>