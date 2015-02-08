<?php
	// Include Utility Files
	require_once 'include/config.php';

	// Load the application page template
	require_once PRESENTATION_DIR . 'application.php';

	// Load Smarty Template File
	$application = new Application();

	// Display the Page
	$application->display('store_front.tpl');

?>