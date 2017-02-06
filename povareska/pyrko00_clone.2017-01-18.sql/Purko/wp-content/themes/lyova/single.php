<?php get_header();?>

<!-- Начало врапер -->
<section id="wrapper">
<div id="middle">
<div id="content">
<div id="colLeft">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Begin .postBox -->

<article id="singlecont">

<div class="breadcrumb">

<?php
          the_breadcrumb();
?>

</div>
				
<h1><?php the_title(); ?></h1>
<div class="share">
			<!-- AddThis Button BEGIN --
			<span class='st_facebook_hcount' displayText='Facebook'></span>
			<span class='st_twitter_hcount' displayText='Tweet'></span>
			<span class='st_googleplus_hcount' displayText='Google +'></span>
			<span class='st_pinterest_hcount' displayText='Pinterest'></span>
			<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			<script type="text/javascript">stLight.options({publisher: "00fa5650-86c7-427f-b3c6-dfae37250d99", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
			<!-- AddThis Button END -->
			<script type="text/javascript">(function() {
			if (window.pluso) {return};
			   var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
			   s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
			   s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://x.pluso.ru/pluso-x.js';
			   var h=d[g]('body')[0];
			   h.appendChild(s);
			})();
		</script>
		<div class="pluso-engine" pluso-sharer={"buttons":"vkontakte,odnoklassniki,facebook,twitter,google,pinterest,moimir,blogger,more","style":{"size":"big","shape":"round","theme":"theme03","css":"background:transparent"},"orientation":"horizontal","multiline":false} ></div> 
		<img src="http://api.qrserver.com/v1/create-qr-code/?size=100x100&data=<?php the_permalink(); ?>" alt="QR:  <?php the_title(); ?>"/>
		</div>

<!----
<div class="infobig"> 
Опубликовано в <?php the_category(' / '); ?> <div class="razd">/</div> <div class="data"><?php the_time('j') ?> <?php the_time('M') ?> <?php the_time('Y') ?></div> <div class="commentar"><?php comments_popup_link('Комментариев 0', '1 комментарий', 'Комментариев %'); ?></div>
</div>
--->
<div>
	<?php the_post_thumbnail('post-thumbnails'); ?>
</div>

<div class="cont">
	<div class="ingridient">
		<h4>Ингредиенты :</h4>
		<ul>
			<li><?php the_field('ingredients1');?></li>
			<li><?php the_field('ingredients2');?></li>
			<li>Морковь — 100 г</li>
			<li>Сельдерей стеблевой — 50 г</li>
			<li>Перец черный горошком — 5 шт.</li>
			<li>Лавровый лист — 2 шт.</li>
			<li>Растительное масло — 20 мл</li>
			<li>Солёные огурцы — 300 г</li>
			<li>Томатное пюре — 200 г</li>
			<li>Буженина в/к — 200 г</li>
			<li>Окорок в/к — 200 г</li>
			<li>Колбаса вареная — 200 г</li>
			<li>Колбаса сырокопченая — 50 г</li>
			<li>Каперсы — 30 г</li>
			<li>Маслины с косточкой — 50 г</li>
			<li>Лимоны — 1 шт.</li>
			<li>Петрушка — 20 г</li>
		</ul>
	</div>
	<div class="cont">
			<?php the_content(); ?>
	</div>
</div>

<?php if(get_option('alltuts_show') == 'yes'){?>
<div class="nextpostlink"><?php next_post_link('%link',''); ?></div>
<div class="prepostlink"><?php previous_post_link('%link',''); ?></div>
<?php }?>

<div class="postTags"><?php the_tags($before, '', $sep, $after); ?></div>

<!-- Похожие посты-->
<div class="relatedPosts">
                                                       
							
                                                        <?php 
							$backup = $post;
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
								$tag_ids = array();
								foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
							
								$args=array(
									'tag__in' => $tag_ids,
									'post__not_in' => array($post->ID),
									'showposts'=>3, // Number of related posts that will be shown.
									'caller_get_posts'=>1
								);
								$my_query = new wp_query($args);
								if( $my_query->have_posts() ) {
									echo '<ul><h2>Посты по теме</h2>';
									while ($my_query->have_posts()) {
										$my_query->the_post();
									?>
										<li><?php the_post_thumbnail('relatedThumb'); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Перейти к записи <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<br><p><?php the_time('j') ?> <?php the_time('M') ?> <?php the_time('Y') ?></p>
</li>
									<?php
									}
									echo '</ul>';
								}
							}
							$post = $backup;
							wp_reset_query();
							 ?>
				</div>			
                             <!--Конец Похожие посты-->

<?php comments_template(); ?>		
	
</div>

<?php endwhile; else: ?>

		<p>Извините, но Вы ищете то чего здесь нет.</p>

	<?php endif; ?>

</article><!-- Конец .синглконтент -->
		
			
		<!-- Конец #colLeft -->

<?php get_sidebar(); ?>	
<?php get_footer(); ?>
