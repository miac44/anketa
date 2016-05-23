<?php
namespace App;
use \App\Exceptions;

class AdminRouter extends \App\Router 
{
	use \App\Singleton;

	public static function startPageController()
	{
		return '\\App\\Controllers\\Admin';
	}

}