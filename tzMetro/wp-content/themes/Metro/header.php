<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Metro</title>
<!--<link rel="stylesheet" href="css/main.css" type="text/css"/>
<link rel="stylesheet" href="css/font/font.css" type="text/css"/>-->
<!--[if IE ]><!--<link rel="stylesheet" href="css/css-ie.css" media="screen">--><![endif]-->

<script type='text/javascript' src='js/jquery-1.7.1.min.js'></script>

<!--<script type="text/javascript" src="js/cufon-yui.js" ></script>
<script type="text/javascript" src="js/Robust_ICG_400.font.js" ></script>
<script type="text/javascript" src="js/cufon.js" ></script>

<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/custom-form-elements.js"></script>

<script type="text/javascript" src="js/slides.min.jquery.js"></script>-->
<script type='text/javascript'>
    jQuery(function(){
        jQuery('#slides').slides({
                play: 5000,
                pause: 5000,
                hoverPause: true
            });
        });

</script>

<script type="text/javascript" src="js/jquery.infieldlabel.min.js"></script>
<!--<script type="text/javascript" src="js/functions.js"></script>

<link rel="stylesheet" type="text/css" media="all" href="css/calendar-brown.css" />
<script type="text/javascript" src="js/calendar_stripped.js"></script>
<script type="text/javascript" src="js/calendar-en.js"></script>
<script type="text/javascript" src="js/calendar-setup_stripped.js"></script>-->
    <?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="header">
            <a id="logo" href="#">Metro</a>
            <ul class="nav">
                <li><a href="#">HOME</a></li>
                <li class="item-level"><a href="#">MENU</a>
                    <div class="nav-in">
                        <ul>
                            <li><a href="#">Food</a></li>
                            <li class="item-level"><a href="#">Drinks</a>
                                <div class="nav-in">
                                    <ul>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Drinks</a></li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Kids</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">FUNCTIIONS</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            <div id="slides">
				<div class="slides_container">
					<div class="slide">
						<a href="#"><img src="images/img-slider.jpg" alt="" /></a>
                    </div>
                    <div class="slide">
						<a href="#"><img src="images/img-slider.jpg" alt="" /></a>
                    </div>
                    <div class="slide">
						<a href="#"><img src="images/img-slider.jpg" alt="" /></a>
                    </div>
                    <div class="slide">
						<a href="#"><img src="images/img-slider.jpg" alt="" /></a>
                    </div>
                    <div class="slide">
						<a href="#"><img src="images/img-slider.jpg" alt="" /></a>
                    </div>
                    <div class="slide">
						<a href="#"><img src="images/img-slider.jpg" alt="" /></a>
                    </div>
				</div>
				<a href="#" class="prev"></a>
				<a href="#" class="next"></a>
			</div>
		</div>