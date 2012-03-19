<?php
/*
Plugin Name: StorageQloud for WordPress
Plugin URI: http://greenqloud.com
Description: Allows you to retrieve objects stored in GreenQloud's StorageQloud and post them in WordPress.
Author: GreenQloud
Version: 0.6
Author URI: http://greenqloud.com

Copyright (C) 2008 Joe Tan
Copyright (C) 2012 GreenQloud

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA


Release Page:
https://github.com/greenqloud/wp-storageqloud

Project Page:
https://github.com/greenqloud/wp-storageqloud

Changelog:
https://github.com/greenqloud/wp-storageqloud

*/
if (class_exists('StorageQloudPlugin')) return;

// storageqloud lib requires php5
if (strpos($_SERVER['REQUEST_URI'], '/wp-admin/') >= 0) { // just load in admin
	$ver = get_bloginfo('version');
    if (version_compare(phpversion(), '5.0', '>=') && version_compare($ver, '2.1', '>=')) {
        require_once(dirname(__FILE__).'/wp-storageqloud/class-plugin.php');
        $StorageQloudPlugin = new StorageQloudPlugin();
	} elseif (ereg('wordpress-mu-', $ver)) {
        require_once(dirname(__FILE__).'/wp-storageqloud/class-plugin.php');
        $StorageQloudPlugin = new StorageQloudPlugin();
    } else {
        class StorageQloudWordPressError {
        function StorageQloudWordPressError() {add_action('admin_menu', array(&$this, 'addhooks'));}
        function addhooks() {add_options_page('StorageQloud', 'StorageQloud', 10, __FILE__, array(&$this, 'admin'));}
        function admin(){include(dirname(__FILE__).'/wp-storageqloud/admin-version-error.html');}
        }
        $error = new StorageQloudWordPressError();
    }
} else {
    require_once(dirname(__FILE__).'/wp-storageqloud/class-plugin-public.php');
    $StorageQloudPlugin = new StorageQloudPluginPublic();
}
?>