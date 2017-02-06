<aside id="colRight">

<form  method="get" action="<?php bloginfo('url'); ?>" target="_blank">
<input name="s" id="form-query" value="" placeholder="Поиск по сайту"> 
<input id="form-querysub" type=submit value="">
</form>

<!---
	<div class="sharenew">

		<?php if(get_option('alltuts_google_link')!=""){ ?>
		<a class="icon-Google" href="<?php echo get_option('alltuts_google_link'); ?>" title="Я в Google+" target="_blank"></a>
		<?php }?>

		<?php if(get_option('alltuts_twitter_user')!=""){ ?>
		<a class="icon-twitter" href="http://twitter.com/<?php echo get_option('alltuts_twitter_user'); ?>" title="Следить в Twitter!" target="_blank"></a>
		<?php }?>

		<?php if(get_option('alltuts_vk_link')!=""){ ?>
		<a class="icon-vk" href="<?php echo get_option('alltuts_vk_link'); ?>" title="Я вКонтакте" target="_blank"></a>
		<?php }?>

		<?php if(get_option('alltuts_rss_link')!=""){ ?>
		<a class="icon-rss" href="<?php echo get_option('alltuts_rss_link'); ?>" title="Подписаться на rss"  target="_blank"></a>
		<?php }?>

		<?php if(get_option('alltuts_facebook_link')!=""){ ?>
		<a class="icon-facebook" href="<?php echo get_option('alltuts_facebook_link'); ?>" title="Я на facebook" target="_blank"></a>
		<?php }?>
	</div>
-->
<?php /* Widgetized sidebar */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
<div class="rightBoxtumb">

	<h2>Свежие записи</h2>
		<div class="rightBoxtumbline"></div>
		<ul>				
			<?php query_posts('showposts=5'); ?>       
			<?php while (have_posts()) : the_post(); ?>
				<li>
					<div class="rightBoxshadowleft"></div>
					<div class="rightBoxshadowright"></div>  
						<?php the_post_thumbnail('loopThumb'); ?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a><br/>
							<p>
								<?php the_time('j') ?> 
								<?php the_time('M') ?> 
								<?php the_time('Y') ?> / 
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
									Посмотреть
								</a>
							</p>
				</li>
			 <?php endwhile; ?>
		</ul>

</div>


		</aside><!-- конец колрайт -->
