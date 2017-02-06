<?php 

/* Goods post type*/

function post_type_goods() {
register_post_type(
                    'goods', 
                    array( 'public' => true,
					 		'publicly_queryable' => true,
							'has_archive' => true, 
							'hierarchical' => false,
							'menu_icon' => get_stylesheet_directory_uri() . '/images/rightBoxmark.png',
                    		'labels'=>array(
    									'name' => _x('Новости', 'post type general name'),
    									'singular_name' => _x('Новости', 'post type singular name'),
    									'add_new' => _x('Добавить Новости', 'Goods'),
    									'add_new_item' => __('Добавить Новости'),
    									'edit_item' => __('Изменить Новости'),
    									'new_item' => __('Новые Новости'),
    									'view_item' => __('Просмотр Новостей'),
    									'search_items' => __('Поиск Новости'),
    									'not_found' =>  __('Новости не найдено'),
    									'not_found_in_trash' => __('No Goods found in Trash'), 
    									'parent_item_colon' => ''
  										),							 
                            'show_ui' => true,
							'menu_position'=>5,
							'query_var' => true,
							'rewrite' => true,
							'rewrite' => array( 'slug' => 'item', 'with_front' => FALSE,),
							'register_meta_box_cb' => 'mytheme_add_box',
							'supports' => array(
							 			'title',
										'thumbnail',
										'custom-fields',
										'comments',
										'editor'
										)
							) 
					);
				} 
add_action('init', 'post_type_goods');

/* Goods post type*/

function post_type_istoriya() {
register_post_type(
                    'istoriya', 
                    array( 'public' => true,
					 		'publicly_queryable' => true,
							'has_archive' => true, 
							'hierarchical' => false,
							'menu_icon' => get_stylesheet_directory_uri() . '/images/rightBoxmark.png',
                    		'labels'=>array(
    									'name' => _x('История блюд', 'post type general name'),
    									'singular_name' => _x('История блюд', 'post type singular name'),
    									'add_new' => _x('Добавить историю', 'Goods'),
    									'add_new_item' => __('Добавить историю'),
    									'edit_item' => __('Изменить историю'),
    									'new_item' => __('Новые истории'),
    									'view_item' => __('Просмотр истории'),
    									'search_items' => __('Поиск истории'),
    									'not_found' =>  __('истории не найдено'),
    									'not_found_in_trash' => __('No Goods found in Trash'), 
    									'parent_item_colon' => ''
  										),							 
                            'show_ui' => true,
							'menu_position'=>5,
							'query_var' => true,
							'rewrite' => true,
							'rewrite' => array( 'slug' => 'item', 'with_front' => FALSE,),
							'register_meta_box_cb' => 'mytheme_add_box',
							'supports' => array(
							 			'title',
										'thumbnail',
										'custom-fields',
										'comments',
										'editor'
										)
							) 
					);
				} 
add_action('init', 'post_type_istoriya');

/* ADD FEATURED TERM */

function add_product_term_featured() {
if(!is_term('Featured', 'product')){
  wp_insert_term('Featured', 'product');
}
}
add_action( 'init', 'add_product_term_featured' );

?>