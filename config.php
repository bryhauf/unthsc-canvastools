<?php
	// Display any php errors (for development purposes)
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	/***************************/
	/* TEMPLATE WIZARD CONFIG  */
	/***************************/
	// The URL for where the "wizard" folder is located

	$_SESSION['template_wizard_url'] = 'https://canvastools.unthsc.edu/global/custom_tools/wizard';
	require_once __DIR__.'/wizard/resources/blti.php';
	require_once __DIR__.'/wizard/resources/cryptastic.php';
	require_once __DIR__.'/wizard/resources/meekrodb2.2.class.php';
	
	// Database connection information for Template Wizard
	DB::$host ='localhost';
	DB::$port = '22';
	DB::$user = 'canvasadmin';
	DB::$password = 'Dlc@041109@SPR05';
	DB::$dbName = 'templateWizard';

	// Strings to help encrypt/decrypt user OAuth tokens
	$pass = 'xyz123';
	$salt = '123xyz';

	// Your Canvas OAuth2 Developer information. Used for getting OAuth tokens from users
	$client_id = '16980000000000001';
	$clientSecret = 'avcKMwVL9hCjR1npt8vQQaw3OvgS3v8nihLQC0x3ZYG7orLpMryAU5ovq86k3d68';
	
	// The Shared Secret you use when setting up the Template Wizard LTI tool
	$lti_secret = "customtools041109";

	// Message to display if the OAuth token request fails
	$oauth_error_message = 'There is a problem, contact someone to fix it';

	// TEMPLATE ARRAY (templateName, minWidth,minHeight, ratioX,ratioY) 
	// This array is for customizing banner images for template themes
	$templates = array (
		array('kl_fp_horizontal_nav_2', 1050,312, 215,64),
		array('kl_fp_panel_nav_2', 	1050,312,  215,64),
		array('kl_fp_squares_1x1', 320,320,  1,1),
		array('kl_fp_circles_1x1', 320,320,  1,1)
	);
	// RATIO ARRAY (ratioX, ratioY)
	$ratios = array (
		array (1,1),
		array(4,3),
		array(5,4),
		array(7,5),
		array(3,2),
		array(16,9)
	);

	/***************************/
	/* TOOLS API CONFIG  */
	/***************************/

	// These variables for the Content Tools to make API calls
	$canvasDomain = 'https://unthsc.instructure.com';
	// This OAuth token needs to make GET API calls for any course in your institution
	$apiToken = "1698~b3JZxAXN2XzOP1fKGFieE8ZomI4VI0nvjpb8Oor2fZpIqECySa3YBPo1IxFlXfHt";
?>