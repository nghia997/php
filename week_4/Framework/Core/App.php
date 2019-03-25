<?php
	require_once(dirname(__FILE__).'/Router.php');
	/**
	 * App
	 */
	class App
	{
		private $router;
		
		function __construct()
		{
			$this->router = new Router;
			$this->router -> get('/',function(){

			});
		}
		public function run(){
			$this->router->run();
		}
	}
?>