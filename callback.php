<?php
// callback.php

// This is the page that Windows Live redirects to after a successful login.
// The page needs to call "onedrive_auth::get_oauth_token" with the code returned in the querystring.
// Then this example page calls "onedrive_tokenstore::save_tokens_to_store" to save the tokens to a file (although you can handle them how you want).

require_once "src/functions.inc.php";
$response = onedrive_auth::get_oauth_token($_GET['code']);
if (onedrive_tokenstore::save_tokens_to_store($response)) {
	header("Location: index.php");
} else {
	echo "error";
}
?>