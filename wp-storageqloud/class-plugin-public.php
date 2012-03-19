<?php
class StorageQloudPluginPublic {
    var $options;
    var $storageqloud;
	var $meta;

	function StorageQloudPluginPublic() {
		$this->options = array();
		if (file_exists(dirname(__FILE__).'/config.php')) {
			require_once(dirname(__FILE__).'/config.php');
			if ($StorageQloudWordPressConfig) $this->options = $StorageQloudWordPressConfig;
		}
		add_action('plugins_loaded', array(&$this, 'addhooks'));
	}
    function addhooks() {
		add_filter('wp_get_attachment_url', array(&$this, 'wp_get_attachment_url'), 9, 2);
	}
	function wp_get_attachment_url($url, $postID) {
        if (!$this->options) $this->options = get_option('StorageQloud_wordpress');
        
        if ($this->options['wp-uploads'] && ($storageqloud = get_post_meta($postID, 'storageqloud_info', true))) {
            $accessDomain = $this->options['virtual-host'] ? $storageqloud['bucket'] : $storageqloud['bucket'].'.s.greenqloud.com';
            return 'http://'.$accessDomain.'/'.$storageqloud['key'];
        } else {
            return $url;
        }
    }
}
?>