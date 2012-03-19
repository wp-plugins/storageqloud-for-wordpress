=== StorageQloud for WordPress ===
Contributors: greenqloud
Tags: scale, media, auto, uploads, greenqloud, storage cloud, storageqloud, cloud, amazon, s3, mirror, admin, green
Requires at least: 2.3
Tested up to: 3.3.1

Mirrors media uploads on GreenQloud's StorageQloud for storage and delivery. Backed by 100% renewable energy, StorageQloud auto scales on load.

== Description ==

This WordPress plugin allows you to use GreenQloud's Truly Green™ StorageQloud service to host the static media for your WordPress site. It was built on the open source (GPL) plugin [WordPress for S3](http://tantannoodles.com/toolkit/wordpress-s3/).

[WordPress](http://wordpress.org/ "Your favorite software") 

StorageQloud is a cheap, 100% carbon neutral and cost effective way to scale your site to easily handle large spikes in traffic (such as from Reddit) without having to go through the expense of setting up the infrastructure for a content delivery network.

Once setup, this plugin transparently integrates with your WordPress site. File uploads are automatically saved into your StorageQloud bucket without any extra steps. Once saved, these files will be delivered by StorageQloud, instead of your web host. Any image thumbnails that get created are saved to StorageQloud too.

== Installation ==
1. Upload `wp-storageqloud` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Configure the plugin in the 'Options' (or 'Settings') screen by following the onscreen prompts.

The plugin requires the program "curl" to be installed on the host and you will need to register for a free account on [GreenQloud](http://greenqloud.com).

## Documentation
If you need more help installing and configuring the plugin check the blog on  [GreenQloud](http://greenqloud.com).

== Screenshots ==

1. The settings screen for the plugin
2. Viewing an uploaded file in a StorageQloud bucket
3. Viewing a StorageQloud bucket in GreenQloud's management console

== Changelog ==

= 0.6 =
* First stable version of the plugin. No built in registration for a GreenQloud account yet or general bucket browsing.


