<?php

namespace App;

class Config {
	public static function app($option) {
		require __DIR__.'/../config/app.php';
		return $app[$option];
	}
}

?>