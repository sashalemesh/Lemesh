<?php get_header(); ?>

<!-- Начало врапер -->
<section id="wrapper">
<div id="middle">
<div id="content">
<div id="colLeft">

   	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<!-- Начало .singlecont -->

<article id="singlecont">
				
<h1><?php the_title(); ?></h1>

<div class="cont">
<?php the_content(); ?>
</div>
				
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</article><!-- Конец .синглконтент -->

</div>
<!-- Конец colleft -->
	
<?php get_sidebar(); ?>	

<?php get_footer(); ?>

