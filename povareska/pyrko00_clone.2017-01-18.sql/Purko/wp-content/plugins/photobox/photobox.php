<?php 
/*
Plugin Name: PhotoBOX
Plugin URI: http://pyrko.com.ua/modul-photobox
Description: Плагин предназначен для просмотра фото
Author: Piurko.A.I
Version: 1.4
Author URI: http://site.kharkov.ua
*/
/*  Copyright 2017  Piurko.A.I.  (email: andreypyrko45@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define('PHOTOBOX_DIR', plugin_dir_path(__FILE__));
define('PHOTOBOX_URL', plugin_dir_url(__FILE__));

register_activation_hook(__FILE__, 'photobox_activation');
register_deactivation_hook(__FILE__, 'photobox_deactivation');

// ** Setup the style and script
	// ===================
	add_action( 'init', 'wp_add_photobox_style' );
	add_action( 'init', 'wp_add_photobox_script' );
	 
		
	function wp_add_photobox_style(){
		wp_register_style('jquery.fancybox-1.3.4.css', plugins_url(photobox) . '/fancybox/jquery.fancybox-1.3.4.css');
		wp_enqueue_style('jquery.fancybox-1.3.4.css');
		
		wp_register_style('simplelightbox.min.css', plugins_url(photobox) . '/dist/simplelightbox.min.css');
		wp_enqueue_style('simplelightbox.min.css');
	}
	
		
	function wp_add_photobox_script(){
		wp_register_script( 'jquery.min.js', plugins_url(photobox) . '/jquery.min.js');
		wp_enqueue_script( 'jquery.min.js' );
		
		wp_register_script( 'simple-lightbox.js', plugins_url(photobox) . '/dist/simple-lightbox.js');
		wp_enqueue_script( 'simple-lightbox.js' );
		
		wp_register_script( 'scriptus.js', plugins_url(photobox) . '/scriptus.js');
		wp_enqueue_script( 'scriptus.js' );

	}
	/**
	* Prism Syntax Highlither class.
	*
	* @package PrismSyntaxHighlither
	* @author Dmitriy Belyaev <admin@codemotion.ru>
	*/
	class PrismSyntaxHighlither{
		/**
		* Plugin version, used for cache-busting of style and script file references.
		*
		* @since 1.4.0
		*
		* @var string
		*/
		protected $version = "1.4";
		protected $plugin_slug = "photobox";
	}
function photobox_activation() {

	// действие при активации
			// регистрируем действие при удалении
			register_uninstall_hook(__FILE__, 'photobox_uninstall');
				
				
}

function photobox_deactivation() {
	// при деактивации
	
}

?>