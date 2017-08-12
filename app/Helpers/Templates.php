<?php

namespace App\Helpers;
use App\Config;
use Twig_Loader_Filesystem;
use Twig_Environment;

class Templates {
	private static $instance;
	public $layout = "layout";
	public $items = array();
	public $twig;

	public static function getInstance() {
		if(self::$instance === null) {
			self::$instance = new Templates();
		}
		return self::$instance;
	}

	public function __construct() {
		$loader = new Twig_Loader_Filesystem('../templates');
		$this->twig = new Twig_Environment($loader, array(
			'cache' => '../cache/twig',
		));
	}

	public function setLayout($layout) {
		$this->layout = $layout;
	}

	public function loadView($view, $data = array()) {
		$layout = $this;
		$view = $view.'.php';

		echo $this->twig->render($view, $data);
	}

	public function seperate($item) {
		echo $this->items[$item];
	}

	public function fill($item, $content) {
		$this->items[$item] = $content;
	}

	public function baseDir() {
		$config = new Config;
		if($config->app('is_in_root')) {
			return "/".$config->app('root')."/public";
		} else {
			return "/".$config->app('root');
		}
		
	}
}

?>