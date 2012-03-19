=== Plugin Name ===
Contributors: greenqloud
Tags: uploads, greenqloud, storage qloud, storageqloud, cloud, amazon, s3, mirror, admin, media, green, scale
Requires at least: 2.3
Tested up to: 3.3.1
Stable tag: 0.3.4

Allows you to mirror your WordPress media uploads over to GreenQloud's Truly Green™ StorageQloud for storage and delivery making your site's resources automatically sustainable and scalable. Read more on http://greenqloud.com

== Description ==

This WordPress plugin allows you to use GreenQloud's StorageQloud service to host your media for your WordPress site. It was built on the open source (GPL) plugin for Amazon S3 (http://tantannoodles.com/toolkit/wordpress-s3/).

StorageQloud is a cheap, carbon neutral and cost effective way to scale your site to easily handle large spikes in traffic (such as from Digg) without having to go through the expense of setting up the infrastructure for a content delivery network.

Once setup, this plugin transparently integrates with your WordPress blog. File uploads are automatically saved into your StorageQloud bucket without any extra steps. Once saved, these files will be delivered by StorageQloud, instead of your web host. Any image thumbnails that get created are saved to StorageQloud too. You'll also find a "StorageQloud" tab next to your regular "Upload" tab, which allows you to easily browse and manage files that were not upload via WordPress.

The plugin requires the program "curl" to be installed.

== Installation ==

1. Upload `wp-storageqloud` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Configure the plugin in the 'Options' (or 'Settings') screen by following the onscreen prompts.

## Documentation
If you need more help installing and configuring the plugin, [see here for more information](http://www.greenqloud.com). 

== Screenshots ==

1. The settings screen for the plugin
2. Viewing an uploaded file in a StorageQloud bucket
3. Viewing a StorageQloud bucket in GreenQloud's management console