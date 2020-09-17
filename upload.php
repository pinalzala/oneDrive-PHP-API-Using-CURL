<?php
require_once "src/functions.inc.php";

$token = onedrive_tokenstore::acquire_token(); // Call this function to grab a current access_token, or false if none is available.

if (!$token) { 
// If no token, prompt to login. Call onedrive_auth::build_oauth_url() to get the redirect URL.
	echo "<div>";
	echo "<img src='statics/key-icon.png' width='32px' style='vertical-align: middle;'>&nbsp";
	echo "<span style='vertical-align: middle;'><a href='".onedrive_auth::build_oauth_url()."'>Login with Onedrive</a></span>";
	echo "</div>";
	
} else {

	$sd = new onedrive($token);
	try {
		$response = $sd->put_file($_GET['folderid'], '/file/to/put');
		// File was uploaded, return metadata.
		print_r($response);
	} catch (Exception $e) {
		// An error occured, print HTTP status code and description.
		echo "Error: ".$e->getMessage();
		exit;
	}

}
?>