=== Tag Pages ===
Contributors: BjornW
Tags: tags, pages, tag pages
Requires at least: 3.0
Tested up to: 3.5-alpha-21157
Stable tag:trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add tags to Pages, just as you would do with Posts 

== Description ==
This plugin adds the 'post_tag' taxonomy to the Page post type. This enables
the tags metabox in the new or edit Page interface and allows you to add tags
to a Page just as you would do with a Post. To show tagged Pages on a tags 
archive page it uses the 'pre_get_posts' hook to change the post_type query 
parameter to 'any'. 

The plugin has no settings, does not alter the database and only uses hooks to 
achieve it's goal. It also should work perfectly fine with Multisite installations.

== Installation ==
1. Upload the `tag-pages` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!
