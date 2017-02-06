</div><!-- Конец контент -->
</div><!-- Конец мидл -->
</section><!-- Конец врапер -->
	
<!-- Начало футер -->

<footer id="footer">

<div id="footerInner">

<div class="logofooter">
<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('alltuts_logo_img'); ?>" alt="<?php echo get_option('alltuts_logo_alt'); ?>"/></a>
</div>

<div class="sharenewfooter">



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

</div>
<script src="<?php bloginfo('stylesheet_directory'); ?>/quickbox/qb/js/qb.js"></script>
</footer>
<!-- Конец футер -->
<?php wp_footer(); ?>

<?php if (get_option('alltuts_analytics') <> "") { 
		echo stripslashes(stripslashes(get_option('alltuts_analytics'))); 
	} ?>

</body>
</html>
