=== Tag Pages ===
Contributors: BjornW
Tags: tags, pages, tag pages
Requires at least: 3.0
Tested up to: 4.8
Stable tag:trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add tags to Pages, just as you would do with Posts 

== Description ==
Add tags to a Page just as you would do with a Post. 

This plugin adds the 'post_tag' taxonomy to the Page post type. 
This enables the tags metabox in the New or Edit Page interface. To show tagged 
Pages on a tags archive page or in a feed, it uses the 'pre_get_posts' hook
to change the post_type query parameter to 'any'. 

The plugin has no settings, does not alter the database and only uses hooks to 
achieve it's goal. It also should work perfectly fine with Multisite installations.

== Screenshots ==

1. A screenshot of the WordPress backend Pages section with the Tags metabox marked red.

== Installation ==
1. Upload the `tag-pages` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!

== Frequently Asked Questions ==
= Tags are not displayed? =
If you don't see the tags of tagged Pages, make sure your theme supports displaying tags for Pages. 
This plugin does nothing to make tags appear on your website. Tag Pages makes it possible to add tags to your Pages in the WordPress database.  
It is your theme's responsibility to display tags (if any) on your website. Make sure the theme you are using supports displaying tags on Pages.



== Notes == 

Credits: 

Tag icon used in the WordPress plugin repository and found in /assets/icon*
From the series ['Flat Shadows'](http://www.toicon.com/series/flat-shadows) By [Shannon E Thomas](http://www.toicon.com/authors/1)

Thanks Shannon E Thomas and to[icon] for sharing your work!


WordPress repository header image found in /assets: 
['Crew Baggage Tag'](http://www.flickr.com/photos/sdasmarchives/7467520412/)

From the Leslie Grimes Moser Photo set. Moser was a flight attendant for Capitol Airlines.
Repository: San Diego Air and Space Museum Archive

Thanks San Diego Air and Space Museum Archive & Flickr Commons - flickr.com/commons

== Changelog ==

#### 1.0.1 - June 21, 2016

**Fixes**

- Unable to save bulk edit of tag filtered posts in wp-admin.
