<?php
/*
Template Name: sitearchives
*/
?>

<?php get_header(); ?>

<!-- Начало врапер -->
<section id="wrapper">
<div id="middle">
<div id="content">
<div id="colLeft">
   	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<!-- Начало .singlecont -->

<article id="singlecont">

<h1 class="home"><?php the_title(); ?></h1> 

<div class="cont">

<?php       
$counter = 0;
$ref_month = '';
$monthly = new WP_Query(array('posts_per_page' => -1));
if( $monthly->have_posts() ) : while( $monthly->have_posts() ) : $monthly->the_post();

    if( get_the_date('mY') != $ref_month ) { 
        if( $ref_month ) echo "\n".'</ul>';
        echo "\n".'<h3>'.get_the_date('F. Y').'</h3>';
        echo "\n".'<ul>';
        $ref_month = get_the_date('mY');
        $counter = 0;
    }

if( $counter++ < 100 ) echo "\n".'   <li><a href='.get_permalink($post->ID).'>'.get_the_title($post->ID).'</a></li>';

endwhile; 
echo "\n".'</ul>';
endif; 
?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div class="hrdown"></div>
</article><!-- Конец .синглконтент -->

</div>
<!-- Конец colleft -->
	
<?php get_sidebar(); ?>	

<?php get_footer(); ?>
