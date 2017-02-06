<?php
/*
Template Name: news
*/
?>
<?php get_header(); ?>

<!-- Начало врапер -->
<section id="wrapper">
<div id="middle">
<div id="content">
<div id="colLeft">

<?php if(get_option('alltuts_showsticky') == 'yes'){?>
<!--########## Начало большого блока! ##########-->
   	<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('post_type=goods'.'&paged='.$paged);
?>
<?php if ((is_front_page()) and (!is_paged())) { ?>

<div class="polosa">

<h2> Прилеплённый пост</h2>

<div class="iconrss"><a href="<?php bloginfo('rdf_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/iconrss.png" /></a></div>
</div>

<?php
query_posts(array('post__in'=>get_option('sticky_posts')));
?>
   	<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('post_type=goods'.'&paged='.$paged);
?>
<?php while (have_posts()) : the_post(); ?>

<article class="postBoxbig">

<div class="postThumbbig"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumbnails'); ?></a></div>

<div class="infobig"> 
Опубликовано в <?php the_category(' / '); ?> <div class="razd">/</div> <div class="data"><?php the_time('j') ?> <?php the_time('M') ?> <?php the_time('Y') ?></div> <div class="commentar"><?php comments_popup_link('Комментариев 0', '1 комментарий', 'Комментариев %'); ?></div>
</div>

<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<div class="textPreviewbig">
<?php //the_excerpt(); ?>
</div>

</article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!--########## Конец большого блока! ########## -->
<?php }?>
<!--########## Начало последних постов  ############-->

<div class="polosalastposts">

<h2> Последние посты</h2>

<div class="iconrss"><a href="<?php bloginfo('rdf_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/iconrss.png" /></a></div>
</div>

<?php
query_posts(array('post__not_in'=>get_option('sticky_posts'),
'paged' => get_query_var('paged')));
?>

<?php if (have_posts()) : ?>
<?php $first = true; ?>
   	<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('post_type=goods'.'&paged='.$paged);
?>
<?php while (have_posts()) : the_post(); ?>

<!-- Начало .postBox -->

<article class="postBox <?php if($first == true) echo "first" ?>" id="postBox-<?php the_ID(); ?>">

<div class="postThumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail();//the_field('foto1');?></a></div>

<div class="info"> 
<div class="data"><?php the_field('vremia_prigotovlenia');?></div>
<div class="commentar"><?php comments_popup_link('Комментариев 0', '1 комментарий', 'Комментариев %'); ?></div>

</div>

<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<div class="textPreview">
<?php the_excerpt(); ?>


</div>
<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
</article>

<!-- Конец .postBox -->

<div class="nodisp"><?php $first = !$first; if ($first) echo '<br clear=all>'; ?></div>

<?php endwhile; ?>

<?php wp_reset_query(); ?>
<!--########## Конец последних постов  ############-->
<!--########## Начало популярных постов  ############-->

<div class="poppolosa">

<h2>Популярное</h2>

<div class="iconrss"><a href="<?php bloginfo('rdf_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/iconrss.png" /></a></div>
</div>

<div class="boxleft">
<div class="popposts">

<ul>
<?php
$pc = new WP_Query('orderby=comment_count&posts_per_page=10'); ?>
<?php while ($pc->have_posts()) : $pc->the_post(); ?>
<li>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('loopThumb'); ?></a>
<div class="commentarpop"><?php comments_popup_link('Комментариев 0', '1 комментарий', 'Комментариев %'); ?></div><br>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

</li>
<?php endwhile; ?>
</ul>

</div>
</div>
<!--########## Конец популярных постов ############-->



<?php else : ?>

<h1>А здесь нет ничего :( 404 </h1>
                
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
