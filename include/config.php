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

	// These should be true whilst in development mode
	define('IS_WARNING_FATAL', true);
	define('DEBUGGING', true);

	// The error types to be reported
	define('ERROR_TYPES', E_ALL);

	// Mail the error messages to Guru Computers Staff
	define('SEND_ERROR_MAIL', false);
	define('ADMIN_ERROR_MAIL', 'admin@gurucomputers.co.uk');
	define('SENDMAIL_FROM', 'errors@gurucomputers.co.uk');
	ini_set('sendmail_from', SENDMAIL_FROM);

	// By Default we don't log errors to a file
	define('LOG_ERRORS', false);
	define('LOG_ERRORS_FILE', '/var/log/shoperror.log');
	// Generic Error Message instead of debug info
	define('SITE_GENERIC_ERROR_MESSAGE', '<h1>Oops, something went wrong!</h1?');
?>