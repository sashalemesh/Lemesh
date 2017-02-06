<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<!-- Начало врапер -->
<section id="wrapper">
<div id="middle">
<div id="content">
<div id="colLeft">

 <script type="text/javascript">
		 $(document).ready(function(){
			  $('#contact').ajaxForm(function(data) {
				 if (data==1){
					 $('#success').fadeIn("slow");
					 $('#bademail').fadeOut("slow");
					 $('#badserver').fadeOut("slow");
					 $('#contact').resetForm();
					 }
				 else if (data==2){
						 $('#badserver').fadeIn("slow");
					  }
				 else if (data==3)
					{
					 $('#bademail').fadeIn("slow");
					}
					});
				 });
		</script>

   	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<!-- Начало .singlecont -->

<article id="singlecont">

<h1><?php the_title(); ?></h1> 

<div class="cont">

<p><?php echo get_option('alltuts_contact_text')?></p>
			
			<p id="success" class="successmsg" style="display:none;">Ваше сообщение успешно отправлено! Спасибо!</p>

			<p id="bademail" class="errormsg" style="display:none;">Пожалуйста введите ваше имя, сообщение и адрес электронной почты.</p>
			<p id="badserver" class="errormsg" style="display:none;">К сожалению Ваше сообщение не удалось отправить. Попробуйте позже.</p>

			<form id="contact" action="<?php bloginfo('template_url'); ?>/sendmail.php" method="post">
			<label for="name">Ваше имя: *</label>
				<input type="text" id="nameinput" name="name" value=""/>
			<label for="email">Ваш email: *</label>

				<input type="text" id="emailinput" name="email" value=""/>
			<label for="comment">Ваше сообщение: *</label>
				<textarea cols="20" rows="7" id="commentinput" name="comment"></textarea><br />
			<input type="submit" id="submitinput" name="submit" class="submit" value="Отправить"/>
			<input type="hidden" id="receiver" name="receiver" value="<?php echo get_option('alltuts_contact_email')?>"/>
			</form>
				
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</article><!-- Конец .синглконтент -->
</div>
<!-- Конец colleft -->

<?php get_sidebar(); ?>	
<?php get_footer(); ?>
