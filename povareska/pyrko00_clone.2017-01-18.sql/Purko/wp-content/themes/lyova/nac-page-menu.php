<?php
/*
Template Name: nacional 
*/
?>
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
	<!-- Begin #bottomMenu -->
		<nav id="fdw">
			<?php
              wp_nav_menu(
                  array(
                    'theme_location'=>'Nacional',
                    'menu_class'=>'nav container-inner group',
                    'container'=>'',
                    'menu_id' => '',
                    'fallback_cb'=> is_multisite() ? '' : 'hu_page_menu'
                  )
              );
            ?>
		</nav>
	<!-- Конец #bottomMenu -->


<?php endwhile; ?>

		<p>Извините, но Вы ищете то чего здесь нет.</p>

	<?php endif; ?>

</article><!-- Конец .синглконтент -->
		
</div>			
		<!-- Конец #colLeft -->

<?php get_sidebar(); ?>	
<?php get_footer(); ?>
