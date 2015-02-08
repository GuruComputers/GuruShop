<?php
	// Include Utility Files
	require_once 'include/config.php';
	require_once BUSINESS_DIR . 'error_handler.php';

	// Set the error handler
	ErrorHandler::SetHandler();

	// Load the application page template
	require_once PRESENTATION_DIR . 'application.php';

	// Load Smarty Template File
	$application = new Application();

	// Display the Page
	$application->display('store_front.tpl');

?>