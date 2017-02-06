<?php

/*******************************
 Хлебные крошки
********************************/

function the_breadcrumb() {
	echo '';
	if (!is_front_page()) {
		echo '<h3><a href="';
		echo get_option('home');
		echo '">Главная';
		echo "</a> > ";
		if (is_category() || is_single()) {
			the_category(' > ');
			if (is_single()) {
				echo " </h3> ";
			}
		} elseif (is_page()) {
			echo the_title('');
                        
		}
	}
	else {
		echo 'Home';
	}
}

/*******************************
 Меню
********************************/
if ( function_exists( 'wp_nav_menu' ) ){
	if (function_exists('add_theme_support')) {
		add_theme_support('nav-menus');
		add_action( 'init', 'register_my_menus' );
		function register_my_menus() {
			register_nav_menus(
				array(
					'primary-menu' => __( 'Primary Menu' ),
					
				)
			);
		}
	}
}

/* CallBack functions for menus in case of earlier than 3.0 Wordpress version or if no menu is set yet*/

function primarymenu(){ ?>
			<div class="ddsmoothmenu">
				<ul>
					<?php wp_list_categories('hide_empty=1&exclude=1&title_li='); ?>
				</ul>
			</div>
<?php }

function secondarymenu(){ ?>
			<ul>
				<?php wp_list_pages('&title_li='); ?>
			</ul>
<?php }
/*******************************
 Меню национальностей кухни
********************************/
// Custom menu areas
    register_nav_menus( array(
      'Nacional' => 'Nacional',
    ) );

/* CallBack functions for menus in case of earlier than 3.0 Wordpress version or if no menu is set yet*/

function Nacional(){ ?>
			<div class="ddsmoothmenu">
				<ul>
					<?php wp_list_categories('hide_empty=1&exclude=1&title_li='); ?>
				</ul>
			</div>
<?php }



/*******************************
 Миниатюры
********************************/

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 500, 300, true );

add_image_size('post-thumbnails', 850, 400, true);
add_image_size('relatedThumb', 250, 180, true);
add_image_size('loopThumb', 80, 80, true);

/*******************************
 Колличество символов в пост бокс
********************************/

function new_excerpt_length($length) {
	return 15; }
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($post) {
	return '...'; }
add_filter('excerpt_more', 'new_excerpt_more');

/*******************************
 Виджеты
********************************/

if ( function_exists('register_sidebar') )
register_sidebar(array(
	'name' => 'sidebar',
	'before_widget' => '<div class="rightBox">
			
			<div class="rightBoxMid">',
	'after_widget' => '</div>	
			
		</div>',
	'before_title' => '<h2> ',
	'after_title' => '</h2><div class="rightBoxtumbline"></div>',
));
	
/*******************************
 Навигация
********************************
 * Retrieve or display pagination code.
 *
 * The defaults for overwriting are:
 * 'page' - Default is null (int). The current page. This function will
 *      automatically determine the value.
 * 'pages' - Default is null (int). The total number of pages. This function will
 *      automatically determine the value.
 * 'range' - Default is 3 (int). The number of page links to show before and after
 *      the current page.
 * 'gap' - Default is 3 (int). The minimum number of pages before a gap is 
 *      replaced with ellipses (...).
 * 'anchor' - Default is 1 (int). The number of links to always show at begining
 *      and end of pagination
 * 'before' - Default is '<div class="emm-paginate">' (string). The html or text 
 *      to add before the pagination links.
 * 'after' - Default is '</div>' (string). The html or text to add after the
 *      pagination links.
 * 'title' - Default is '__('Pages:')' (string). The text to display before the
 *      pagination links.
 * 'next_page' - Default is '__('&raquo;')' (string). The text to use for the 
 *      next page link.
 * 'previous_page' - Default is '__('&laquo')' (string). The text to use for the 
 *      previous page link.
 * 'echo' - Default is 1 (int). To return the code instead of echo'ing, set this
 *      to 0 (zero).
 *
 * @author Eric Martin <eric@ericmmartin.com>
 * @copyright Copyright (c) 2009, Eric Martin
 * @version 1.0
 *
 * @param array|string $args Optional. Override default arguments.
 * @return string HTML content, if not displaying.
 */
 
function emm_paginate($args = null) {
	$defaults = array(
		'page' => null, 'pages' => null, 
		'range' => 3, 'gap' => 3, 'anchor' => 1,
		'before' => '<div class="emm-paginate">', 'after' => '</div>',
		'title' => __('Страниц:'),
		'nextpage' => __('&raquo;'), 'previouspage' => __('&laquo'),
		'echo' => 1
	);

	$r = wp_parse_args($args, $defaults);
	extract($r, EXTR_SKIP);

	if (!$page && !$pages) {
		global $wp_query;

		$page = get_query_var('paged');
		$page = !empty($page) ? intval($page) : 1;

		$posts_per_page = intval(get_query_var('posts_per_page'));
		$pages = intval(ceil($wp_query->found_posts / $posts_per_page));
	}
	
	$output = "";
	if ($pages > 1) {	
		$output .= "$before<span class='emm-title'>$title</span>";
		$ellipsis = "<span class='emm-gap'>...</span>";

		if ($page > 1 && !empty($previouspage)) {
			$output .= "<a href='" . get_pagenum_link($page - 1) . "' class='emm-prev'>$previouspage</a>";
		}
		
		$min_links = $range * 2 + 1;
		$block_min = min($page - $range, $pages - $min_links);
		$block_high = max($page + $range, $min_links);
		$left_gap = (($block_min - $anchor - $gap) > 0) ? true : false;
		$right_gap = (($block_high + $anchor + $gap) < $pages) ? true : false;

		if ($left_gap && !$right_gap) {
			$output .= sprintf('', 
				emm_paginate_loop(1, $anchor), 
				$ellipsis, 
				emm_paginate_loop($block_min, $pages, $page)
			);
		}
		else if ($left_gap && $right_gap) {
			$output .= sprintf('', 
				emm_paginate_loop(1, $anchor), 
				$ellipsis, 
				emm_paginate_loop($block_min, $block_high, $page), 
				$ellipsis, 
				emm_paginate_loop(($pages - $anchor + 1), $pages)
			);
		}
		else if ($right_gap && !$left_gap) {
			$output .= sprintf('', 
				emm_paginate_loop(1, $block_high, $page),
				$ellipsis,
				emm_paginate_loop(($pages - $anchor + 1), $pages)
			);
		}
		else {
			$output .= emm_paginate_loop(1, $pages, $page);
		}

		if ($page < $pages && !empty($nextpage)) {
			$output .= "<a href='" . get_pagenum_link($page + 1) . "' class='emm-next'>$nextpage</a>";
		}

		$output .= $after;
	}

	if ($echo) {
		echo $output;
	}

	return $output;
}

/**
 * Helper function for pagination which builds the page links.
 *
 * @access private
 *
 * @author Eric Martin <eric@ericmmartin.com>
 * @copyright Copyright (c) 2009, Eric Martin
 * @version 1.0
 *
 * @param int $start The first link page.
 * @param int $max The last link page.
 * @return int $page Optional, default is 0. The current page.
 */
function emm_paginate_loop($start, $max, $page = 0) {
	$output = "";
	for ($i = $start; $i <= $max; $i++) {
		$output .= ($page === intval($i)) 
			? "<span class='emm-page emm-current'>$i</span>" 
			: "<a href='" . get_pagenum_link($i) . "' class='emm-page'>$i</a>";
	}
	return $output;
}

/*******************************
 Комментарии
********************************/

function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
	 <?php echo get_avatar($comment,$size='60',$default='http://www.gravatar.com/avatar/61a58ec1c1fba116f8424035089b7c71?s=32&d=&r=G' ); ?>
     <div id="comment-<?php comment_ID(); ?>">
	  <div class="comment-meta commentmetadata clearfix">
	    <?php printf(__('%s'), get_comment_author_link()) ?><?php edit_comment_link(__('(Edit)'),'  ','') ?> <span><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?>
	  </span>
	  </div>
	  
      <div class="text">
		  <?php comment_text() ?>
	  </div>
	  
	  <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php }

/*******************************
 Страница с настройками шаблона
********************************/

add_action('admin_menu', 'alltuts_theme_page');
function alltuts_theme_page ()
{
	if ( count($_POST) > 0 && isset($_POST['alltuts_settings']) )
	{
		$options = array ('logo_img', 'logo_alt','ads','advertise','contact_email','contact_text','cufon','linkedin_link','twitter_user','latest_tweet','number_tweets','facebook_link','rss_link','google_link','vk_link','keywords','description','analytics','popular_posts', 'copyright','show','strup','showsticky','qvote');
		
		foreach ( $options as $opt )
		{
			delete_option ( 'alltuts_'.$opt, $_POST[$opt] );
			add_option ( 'alltuts_'.$opt, $_POST[$opt] );	
		}			
		 
	}
	add_menu_page(__('Опции шаблона'), __('Опции шаблона'), 'edit_themes', basename(__FILE__), 'alltuts_settings');
	add_submenu_page(__('Alltuts Options'), __('Alltuts Options'), 'edit_themes', basename(__FILE__), 'alltuts_settings');
}
function alltuts_settings()
{?>
<div class="wrap">
	<h2>Опции шаблона</h2>
	
<form method="post" action="">
	<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Настройки логотипа</strong></legend>
	<table class="form-table">
		<!-- General settings -->
		
		<tr valign="top">
			<th scope="row"><label for="logo_img">Установить логотип (Должна быть прямая ссылка на изображение. Не выше 38 пикселей!)</label></th>
			<td>
				<input name="logo_img" type="text" id="logo_img" value="<?php echo get_option('alltuts_logo_img'); ?>" class="regular-text" /><br />
				<em>Текущий логотип:</em> <br /> <img src="<?php echo get_option('alltuts_logo_img'); ?>" alt="<?php echo get_option('alltuts_logo_alt'); ?>" />
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="logo_alt">ALT текст для логотипа (Желательно задать)</label></th>
			<td>
				<input name="logo_alt" type="text" id="logo_alt" value="<?php echo get_option('alltuts_logo_alt'); ?>" class="regular-text" />
			</td>
		</tr>
        
		</table>
	</fieldset>

<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Сохранить" />
		<input type="hidden" name="alltuts_settings" value="save" style="display:none;" />
		</p>
<!-- *######################################* -->

<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Настройки постов</strong></legend>
	<table class="form-table">
		<!-- General settings -->
		
		<tr valign="top">
			<th scope="row"><label for="show">Показывать ссылки на следующий и предыдуший пост?</label></th>
			<td>
				<select name="show" id="show">		
					<option value="no" <?php if(get_option('alltuts_show') == 'no'){?>selected="selected"<?php }?>>Нет</option>
                    <option value="yes" <?php if(get_option('alltuts_show') == 'yes'){?>selected="selected"<?php }?>>Да</option>
				</select> <br />
                <em>По умолчанию ссылки НЕ показываются</em>
			</td>
		</tr>

<tr valign="top">
			<th scope="row"><label for="strup">Показывать стрелку наверх?</label></th>
			<td>
				<select name="strup" id="strup">		
					<option value="no" <?php if(get_option('alltuts_strup') == 'no'){?>selected="selected"<?php }?>>Нет</option>
                    <option value="yes" <?php if(get_option('alltuts_strup') == 'yes'){?>selected="selected"<?php }?>>Да</option>
				</select> <br />
                <em>По умолчанию НЕ отображается. Отображается на всех страницах</em>
			</td>
		</tr>
        
		</table>
	</fieldset>

<!-- *######################################* -->

<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px;color:#2481C6; text-transform:uppercase;"><strong>Настройки главной</strong></legend>
	<table class="form-table">
		<!-- General settings -->
		
		<tr valign="top">
			<th scope="row"><label for="showsticky">Показывать прилеплённую запись на главной странице?</label></th>
			<td>
				<select name="showsticky" id="showsticky">		
					<option value="no" <?php if(get_option('alltuts_showsticky') == 'no'){?>selected="selected"<?php }?>>Нет</option>
                    <option value="yes" <?php if(get_option('alltuts_showsticky') == 'yes'){?>selected="selected"<?php }?>>Да</option>
				</select> <br />
                <em>По умолчанию запись НЕ показывается</em><br>
                <em>*Для того чтобы прилеплённая запись отображалась корректно, Вы должны прилепить хотябы одну запись в свойствах записи. Иначе выберите "Нет", чтобы шаблон работал правильно.</em>
			</td>
		</tr>

<tr valign="top">
			<th scope="row"><label for="qvote">Показывать цытату на главной странице?</label></th>
			<td>
				<select name="qvote" id="qvote">		
					<option value="no" <?php if(get_option('alltuts_qvote') == 'no'){?>selected="selected"<?php }?>>Нет</option>
                    <option value="yes" <?php if(get_option('alltuts_qvote') == 'yes'){?>selected="selected"<?php }?>>Да</option>
				</select> <br />
                <em>По умолчанию цитата НЕ показывается</em><br>
                
			</td>
		</tr>

 <tr>
			<th><label for="copyright">Содержание цитаты</label></th>
			<td>
				<textarea name="copyright" id="copyright" rows="4" cols="70" style="font-size:11px;"><?php echo stripslashes(get_option('alltuts_copyright')); ?></textarea><br />
				<em>* Вы можете использовать HTML для ссылок. Желательно используйте не слишком длинный текст</em>
			</td>
		</tr>
        
		</table>
	</fieldset>

<!-- *######################################* -->
	
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Сохранить" />
		<input type="hidden" name="alltuts_settings" value="save" style="display:none;" />
		</p>
	
	<fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px; color:#2481C6;text-transform:uppercase;"><strong>Ссылки на социальные сети</strong></legend>
		<table class="form-table">
		<tr valign="top">
			<th scope="row"><label for="twitter_user">Имя пользователя в Twitter</label></th>
			<td>
				<input name="twitter_user" type="text" id="twitter_user" value="<?php echo get_option('alltuts_twitter_user'); ?>" class="regular-text" />
			</td>
		</tr>
		
		
        <tr valign="top">
			<th scope="row"><label for="facebook_link">Ссылка на страницу в Facebook</label></th>
			<td>
				<input name="facebook_link" type="text" id="facebook_link" value="<?php echo get_option('alltuts_facebook_link'); ?>" class="regular-text" />
			</td>
		</tr>

<tr valign="top">
			<th scope="row"><label for="rss_link">Ссылка на rss новости (Желательно ссылка на feedburner)</label></th>
			<td>
				<input name="rss_link" type="text" id="rss_link" value="<?php echo get_option('alltuts_rss_link'); ?>" class="regular-text" />
			</td>
		</tr>

<tr valign="top">
			<th scope="row"><label for="vk_link">Ссылка на страницу во вКонтакте</label></th>
			<td>
				<input name="vk_link" type="text" id="vk_link" value="<?php echo get_option('alltuts_vk_link'); ?>" class="regular-text" />
			</td>
		</tr>

<tr valign="top">
			<th scope="row"><label for="google_link">Ссылка на страницу в Google+</label></th>
			<td>
				<input name="google_link" type="text" id="google_link" value="<?php echo get_option('alltuts_google_link'); ?>" class="regular-text" />
			</td>
		</tr>
        
        </table>
        </fieldset>
		<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Сохранить" />
		<input type="hidden" name="alltuts_settings" value="save" style="display:none;" />
		</p>
        
     <fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px; color:#2481C6;text-transform:uppercase;"><strong>Настройки страницы контактов</strong></legend>
		<table class="form-table">	
        <tr>
        	<td colspan="2"></td>
        </tr>
         <tr valign="top">
			<th scope="row"><label for="contact_text">Текст для страницы контактов</label></th>

			<td>

				<textarea name="contact_text" id="contact_text" rows="7" cols="70" style="font-size:11px;"><?php echo stripslashes(get_option('alltuts_contact_text')); ?></textarea>
<br><em>* Чтобы страница контактов работала, Вам нужно задать её в "Атрибутах страницы"</em>
			</td>

		</tr>
        <tr valign="top">
			<th scope="row"><label for="contact_email">Адрес Email на которые будут приходить сообщения</label></th>

			<td><em>* Обязательно</em><br>
				<input name="contact_email" type="text" id="contact_email" value="<?php echo get_option('alltuts_contact_email'); ?>" class="regular-text" />

			</td>
		</tr>
        </table>
     </fieldset>
	 <p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Сохранить" />
		<input type="hidden" name="alltuts_settings" value="save" style="display:none;" />
	</p>
        
      <fieldset style="border:1px solid #ddd; padding-bottom:20px; margin-top:20px;">
	<legend style="margin-left:5px; padding:0 5px; color:#2481C6;text-transform:uppercase;"><strong>SEO</strong></legend>
		<table class="form-table">
        <tr>
			<th><label for="keywords">Ключевые слова</label></th>
			<td>
				<textarea name="keywords" id="keywords" rows="7" cols="70" style="font-size:11px;"><?php echo get_option('alltuts_keywords'); ?></textarea><br />
                <em>Слова должны разделяться запятой</em>
			</td>
		</tr>
        <tr>
			<th><label for="description">Описание сайта (Description)</label></th>
			<td>
				<textarea name="description" id="description" rows="7" cols="70" style="font-size:11px;"><?php echo get_option('alltuts_description'); ?></textarea>
			</td>
		</tr>
		<tr>
			<th><label for="ads">Код от Google Analytics</label></th>
			<td>
				<textarea name="analytics" id="analytics" rows="7" cols="70" style="font-size:11px;"><?php echo stripslashes(get_option('alltuts_analytics')); ?></textarea>
			</td>
		</tr>
		
	</table>
	</fieldset>
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="Сохранить" />
		<input type="hidden" name="alltuts_settings" value="save" style="display:none;" />
	</p>
</form>
</div>
<?php }?>
