<?php
/**
 * Plugin Name: Fancy Edit Link
 * Plugin URI:
 * Description:
 * Version: 0.1.0
 * Author: Hans Czajkowski Jørgensen
 * Author URI:
 * License: GPL2
 */
/*  Copyright 2014  Hans Czajkowski Jørgensen  (email : hans.c.jorgensen@gmail.comg )

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
add_action('init','fancy_edit_link_init');

function fancy_edit_link_init() {
    wp_enqueue_script( 'fancy-edit-link-js', plugins_url( '/js/fancy_edit_link_.js', __FILE__ ),array('jquery'));
}