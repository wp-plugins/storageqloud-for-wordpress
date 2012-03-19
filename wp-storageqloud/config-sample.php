<?php
/*
*/

// rename this file to "config.php" to use the settings below, instead of settings saved in the database through the dashboard admin
// this can be used to automatically configure the plugin in a WordPress MU environment, or if you have automated scripts to deploy WordPress installs
$StorageQloudWordPressConfig = array(
	'key' => '', // Access Key ID
	'secret' => '', // Secret Key
	'bucket' => '', // Bucket
	'virtual-host' => false, // Bucket is configured for virtual hosting
	'wp-uploads' => true, // mirror all WordPress uploads into StorageQloud bucket
	'permissions' => 'public', // set to "public" to have the plugin force all files in the specified bucket to "public" (sometimes third party upload utilities don't do this)
	'hideStorageQloudUploadTab' => false, // hide the StorageQloud tab in the WordPress upload widget
	'expires' => 315360000, // set http expires header 10 years into the future
	);
?>