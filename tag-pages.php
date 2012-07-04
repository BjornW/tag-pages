<?php
/******************************************************************************
Plugin Name: Tag Pages
Plugin URI: http://burobjorn.nl
Description: Add tags to Pages, just as you would do with Posts
Version: 1.0
Author: Bjorn Wijers <burobjorn at burobjorn dot nl>
Author URI: http://burobjorn.nl
License: GPLv2 or later
******************************************************************************/

/*  Copyright 2012
Tag Pages is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

Tag Pages is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/**
 * Add the 'post_tag' taxonomy, which is the name of the existing taxonomy
 * used for tags to the Post type page. Normally in WordPress Pages cannot
 * be tagged, but this let's WordPress treat Pages just like Posts
 * and enables the tags metabox so you can add tags to a Page.
 * NB: This uses the register_taxonomy_for_object_type() function which is only
 * in WordPress 3 and higher!
 */
if( ! function_exists('tagpages_register_taxonomy') ){
    function tagpages_register_taxonomy()
    {
        register_taxonomy_for_object_type('post_tag', 'page');
    }
    add_action('admin_init', 'tagpages_register_taxonomy');
}

/**
 * Display all post_types on the tags archive page. This forces WordPress to
 * show tagged Pages together with tagged Posts. Thanks to Page Tagger by
 * Ramesh Nair: http://wordpress.org/extend/plugins/page-tagger/
 */
if( ! function_exists('tagpages_display_tagged_pages_archive') ){
    function tagpages_display_tagged_pages_archive(&$query)
    {
        if ( $query->is_archive && $query->is_tag ) {
            $q = &$query->query_vars;
            $q['post_type'] = 'any';
        }
    }
    add_action('pre_get_posts', 'tagpages_display_tagged_pages_archive');
}
?>
