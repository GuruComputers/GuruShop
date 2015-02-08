<?php
	// Application Directories
	define('SITE_ROOT', dirname(dirname(__FILE__)));
	define('PRESENTATION_DIR', SITE_ROOT . '/presentation/');
	define('BUSINESS_DIR', SITE_ROOT . '/business/');

	//Smarty Template Engine Settings
	define('SMARTY_DIR', SITE_ROOT . '/libs/smarty/');
	define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
	define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
	define('CONFIG_DIR', SITE_ROOT . '/include/configs');
?>