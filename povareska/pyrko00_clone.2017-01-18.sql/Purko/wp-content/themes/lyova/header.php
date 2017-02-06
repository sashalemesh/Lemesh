<!doctype html>

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<html lang=ru>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="<?php echo get_option('alltuts_keywords'); ?>" />
<meta name="description" content="<?php echo get_option('alltuts_description'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
<link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.form.js"></script>
<?php if(get_option('alltuts_strup') == 'yes'){?><script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/arrow-up.js"></script><?php }?>

<!-- Begin #bottomMenu -->

<!--  javaScript -->
<script>  
<!--  // Стрим меню для мобильных устройств -->
$(function(){
	// Добавляем элемент select 
	$('<select />').appendTo('#fdw');

	//Добавляем опции в элемент select
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Нажмите, чтобы выбрать рубрику...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// Событие onclicking при нажатии на ссылку
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// Выводим и скрываем подменю
$(function(){
	$('#fdw ul li').hover(
		function () {
			// Выводим подменю
			$('ul', this).slideDown(150);
		}, 
		function () {
			// Скрываем подменю
			$('ul', this).slideUp(150);			
		}
	);
});

</script>

 <script>
$(function () {
    $.scrollUp({
        scrollName: 'scrollUp', //  ID элемента
        topDistance: '300', // расстояние после которого появится кнопка (px)
        topSpeed: 300, // скорость переноса (миллисекунды)
        animation: 'fade', // вид анимации: fade, slide, none
        animationInSpeed: 200, // скорость разгона анимации (миллисекунды)
        animationOutSpeed: 200, // скорость торможения анимации (миллисекунды)
        scrollText: '', // текст
        activeOverlay: false, // задать CSS цвет активной точке scrollUp, например: '#00FFFF'
    });
});
</script>

<?php wp_head(); ?>

</head>
<body>

	<header id="headerInner">
		<!-- Начало логотипа -->
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo get_option('alltuts_logo_img'); ?>" alt="<?php echo get_option('alltuts_logo_alt'); ?>"/>
				</a>
			</div>
		<!-- Конец логотипа -->
		<!-- Begin #bottomMenu -->
			<nav id="fdw">
				<?php wp_nav_menu(); ?>
			</nav>
		<!-- Конец #bottomMenu -->
			<?php if(get_option('alltuts_qvote') == 'yes'){?>
				<div id="qv">
					<div id="qvimg"></div>
					<p>
						<?php if (get_option('alltuts_copyright') <> ""){
							echo stripslashes(stripslashes(get_option('alltuts_copyright')));
						}else{
							echo 'Этот текст Вы сможете изменить в настройках шаблона?';
						}?>
					</p>
				</div>
			<?php }?>
			<div id="stol-cat">
				<div class="stol-cat-poz">
					<a href="/category/recepty-pervyx-blyud/" title="Рецепты первых блюд" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/soup-hand-drawn-hot-food-bowl.png">
					</a>
				</div>
				<div class="stol-cat-poz">
					<a href="/category/recepty-vtoryx-blyud/" title="Рецепты вторых блюд" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/food.png">
						
					</a>
				</div>
				<div class="stol-cat-poz">
					<a href="/category/recepty-zagotovok/" title="Рецепты вторых блюд" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/preserves.png">
					</a>
				</div>
				<div class="stol-cat-poz">
					<a href="/category/recepty-zakusok/" title="Рецепты заготовок" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/take-away-tacos.png">
					</a>
				</div><div class="stol-cat-poz">
					<a href="/category/recepty-izdelij-iz-testa/" title="Рецепты изделий из теста" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/plunger-dough.png">
					</a>
				</div>
				<div class="stol-cat-poz">
					<a href="/category/recepty-marinada/" title="Рецепты маринада" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/sauce.png">
					</a>
				</div>
				<div class="stol-cat-poz">
					<a href="/category/recepty-napitkov/" title="Рецепты напитков" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/glass-with-beverage-ice-cubes-and-straw.png">
					</a>
				</div>
				<div class="stol-cat-poz">
					<a href="/category/recepty-priprav/" title="Рецепты приправ" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/spices.png">
					</a>
				</div>
				<div class="stol-cat-poz">
					<a href="/category/recepty-sladostej/" title="Рецепты сладостей" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/cake.png">
					</a>
				</div><div class="stol-cat-poz">
					<a href="/category/recepty-sousov/" title="Рецепты соусов" class="podskazka">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/block-menu/gravy-boat.png">
					</a>
				</div>
			</div>
	</header>

<!-- Конец хидер -->
