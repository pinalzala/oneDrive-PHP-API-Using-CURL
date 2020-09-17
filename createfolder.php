<?php
require_once "../src/functions.inc.php";

$token = onedrive_tokenstore::acquire_token(); // Call this function to grab a current access_token, or false if none is available.

if (!$token) { // If no token, prompt to login. Call onedrive_auth::build_oauth_url() to get the redirect URL.
	echo "<div>";
	echo "<img src='statics/key-icon.png' width='32px' style='vertical-align: middle;'>&nbsp";
	echo "<span style='vertical-align: middle;'><a href='".build_oauth_url()."'>Login with oneDrive</a></span>";
	echo "</div>";
	
} else {

	if (empty($_POST['foldername'])) {
		echo 'Error - no new folder name specified';
	} else {
		$sd = new onedrive($token);
		try {
			if (empty($_POST['currentfolderid'])) {
				$response = $sd->create_folder(null, $_POST['foldername'], 'Description');
			} else {
				$response = $sd->create_folder($_POST['currentfolderid'], $_POST['foldername'], 'Description');				
			}
			// Folder was created, return metadata.
			print_r($response);
		} catch (Exception $e) {
			// An error occured, print HTTP status code and description.
			echo "Error: ".$e->getMessage();
			exit;
		}		
	}


}
?>