<?php
/*
	Plugin Name: Post from Flickr
	Plugin URI: http://daniellopez.es
	Version: 0.1
	Description: Publish each public photo from Flickr as a post with featured image. 
	Author: Daniel López
	Author URI: http://daniellopez.es
	License: GPL2

	Copyright 2013  Daniel López  (email : soy@daniellopez.es)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

    function postflickr_admin() {
    	include('post-from-flickr-admin.php');
    }

    function postflickr_admin_actions() {
    	add_options_page('Post from Flickr','Post from Flickr',1,'Post_from_Flickr','postflickr_admin');
    }

    add_action('admin_menu','postflickr_admin_actions');
?>