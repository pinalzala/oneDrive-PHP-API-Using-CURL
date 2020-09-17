<?php
require_once "functions.inc.php";
// Calls "destroy_tokens_in_store" to destroy the tokens in the token store, forcing a re-login next time.

if (onedrive_tokenstore::destroy_tokens_in_store()) {
	header("Location: index.php");
} else {
	echo "Error";
}
?>