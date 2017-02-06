<?php get_header(); ?>

<!-- Начало врапер -->
<section id="wrapper">
<div id="middle">
<div id="content">
<div id="colLeft">

<div class="polosalastposts">
<h2>Результаты поиска для "<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<strong>'); echo $key; _e('</strong>'); wp_reset_query(); ?>"</h2>
<div class="iconrss"><a href="<?php bloginfo('rdf_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/iconrss.png" /></a></div>
</div>

<?php if (have_posts()) : ?>
<?php $first = true; ?>
<?php while (have_posts()) : the_post(); ?>

<!-- Начало .postBox -->

<article class="postBox <?php if($first == true) echo "first" ?>" id="postBox-<?php the_ID(); ?>">

<div class="postThumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>

<div class="info"> 
<div class="data"><?php the_time('j') ?> <?php the_time('M') ?> <?php the_time('Y') ?></div> <div class="commentar"><?php comments_popup_link('Комментариев 0', '1 комментарий', 'Комментариев %'); ?></div>
</div>

<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<div class="textPreview">
<?php the_excerpt(); ?>
</div>

</article>

<!-- Конец .postBox -->

<?php $first = !$first; if ($first) echo '<br clear=all>'; ?>
<?php endwhile; ?>

<?php else : ?>

<p>К сожалению, по Вашему запросу ничего не найдено. Пожалуйста, попробуйте ещё раз - использовать другие ключевые слова для поиска.</p>
	
<?php endif; ?>

<!--<div class="navigation">
						<div class="alignleft"><?php next_posts_link() ?></div>
						<div class="alignright"><?php previous_posts_link() ?></div>
			</div>-->
			<?php if (function_exists("emm_paginate")) {
				emm_paginate();
			} ?>

		</div>
		<!-- Конец #colLeft -->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>
