=== Tag Pages ===
Contributors: BjornW
Tags: tags, pages, tag pages
Requires at least: 3.0
Tested up to: 6.0.0
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

If this plugin meets your expectations and you use it commercially
please consider a donation to one of these organisations or your country's equivalents: 

  - <a href='https://www.msf.org/'>Medicines Sans Frontiers</a> 
  - <a href='https://fsfe.org'>Free Software Foundation Europe</a>
  - <a href='https://https://www.bitsoffreedom.nl/english/'>Bits of Freedom</a>
  - <a href='https://edri.org/'>European Digital Rights (EDRi)</a> 
  - <a href='https://fsf.org'>Free Software Foundation</a>
  - <a href='https://eff.org'>Electronic Frontier Foundation</a>


== Screenshots ==

1. A screenshot of the (older) WordPress backend Pages section with the Tags metabox marked red.
2. A screenshot of the WordPress backend Pages section using the Gutenberg block editor with the Tags (document properties) marked red

== Installation ==
1. Upload the `tag-pages` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!

== Frequently Asked Questions ==
= Tags are not displayed? =
If you don't see the tags of tagged Pages, make sure your theme supports displaying tags for Pages. 
This plugin does nothing to make tags appear on your website. Tag Pages makes it possible to add tags to your Pages in the WordPress database.  
It is your theme's responsibility to display tags (if any) on your website. Make sure the theme you are using supports displaying tags on Pages.

= Is Gutenberg supported? = 
Yes, <a href='https://wordpress.org/gutenberg/'>the Gutenberg block editor</a> is supported from version 1.0.2 and upwards. 
NB: The <a href='https://wordpress.org/plugins/classic-editor/'>Classic Editor</a> plugin is also supported.

= Is this plugin actively being developed? =
Yes and no. Let me explain: 
I consider this plugin to be feature complete and unless bugs are found there will be no development on this plugin. In other words this plugin is in maintenance mode and will be maintained for the foreseeable future. 
Due to other obligations I'm not always able to keep up with WordPress version's and updating this readme's 'Tested up to' version number. 
However, unless WordPress significantly changes the way taxonomies work (and breaking backwards compatibility in the process) this plugin should continue to work fine even though the 'Tested up to' might be of a lower version number. 
As always, when in doubt, test it :) (and when it does give you issues, feel free to leave a comment). 


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

#### 1.0.2 - feb 4, 2020 
- No changes in the code (so the version is the same), just added a clarification on the status of this plugin in the readme.

#### 1.0.2 - Feb 2, 2019

**Fixes**

- Gutenberg does not show tags on page create/edit screen 

#### 1.0.1 - June 21, 2016

**Fixes**

- Unable to save bulk edit of tag filtered posts in wp-admin.
