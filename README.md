# oneDrive-PHP-API-Using-CURL
OneDrive REST API using CURL. Using this API you can upload, download, rename and  create directory.


System Requirements:

PHP 5 or Above (I tested with 5.5.9)
CURL extension for PHP
SSL CA Bundle


How to install project and setup oneDrive:
- Clone project
- Edit "src/functions.inc.php" and include your Live Client ID, Secret Key and oAuth callback URL in relevant places.
- Require "src/functions.inc.php", create ondrive object and start calling functions!!!


How to run project:
- Deploy to your web server or localhost
- Make sure  "tokens" file has read+write permission.
- Edit "functions.inc.php" and include your Live Client ID, Secret Key and oAuth callback URL in relevant places.
- run "index.php" like http://example.com/index.php 

Uses of all files 

-- createfolder.php - For creating new directory 
-- download.php - For downlod file
-- upload.php - For upload new file
-- properties.php - For check any file size & file properties

Questions???
- E-Mail me pinal@pinalzal.me

