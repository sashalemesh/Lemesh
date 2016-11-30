
<!--подключаем header-->
<?php get_header(); ?>

		<div class="wrapper">
			<div class="wrapper-in">
                <div class="content">
                    <div class="block-new">
                       <a href="#"><img src="images/img-new.jpg" alt="" /></a>
                       <div class="block-new-info">
                            <h3><a href="#">Acoustic Music @ The Metropolitan Hotel</a></h3>
                            <p>June 11: Saturday, June 16 at 9:00pm at Metropolitan Hotel North Melbourne</p>
                       </div>
                    </div>
                    <div class="block-new">
                       <a href="#"><img src="images/img-new.jpg" alt="" /></a>
                       <div class="block-new-info">
                            <h3><a href="#">New menu</a></h3>
                            <p>June 11: New Menu.... New Management and a New Feel, come re-visit or visit the Metro..</p>
                       </div>
                    </div>
                    <div class="block-new">
                       <a href="#"><img src="images/img-new.jpg" alt="" /></a>
                       <div class="block-new-info">
                            <h3><a href="#">New Winter Menu</a></h3>
                            <p>June 1: New Winter Menu has now landed, come in and try our superb offerings... why not try our Oxtail and Mushroom Pudding or our Celeriac Parfait</p>
                       </div>
                    </div>
                    <div class="block-new">
                       <a href="#"><img src="images/img-new.jpg" alt="" /></a>
                       <div class="block-new-info">
                            <h3><a href="#">Hunters feast</a></h3>
                            <p>May 1: Hunter's Feast Coming Soon to the Metropolitan Hotel - 2nd June - watch this space...</p>
                       </div>
                    </div>
                    <div class="block-new block-new-last">
                       <a href="#"><img src="images/img-new.jpg" alt="" /></a>
                       <div class="block-new-info">
                            <h3><a href="#">Mother day lunch</a></h3>
                            <p>May 1: Don’t forget to book in early for mothers day!</p>
                       </div>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="block-sid">
                        <div class="box-icons">
                            <a href="#"><img src="images/icon-facebook.png" alt="" /></a>
                            <a href="#"><img src="images/icon-twitter.png" alt="" /></a>
                            <a href="#"><img src="images/icon-urbanspoon.png" alt="" /></a>
                        </div>
                        <div class="title-follow_us">Follow us</div>
                    </div>
                    <div class="block-sid">
                        <div class="title-make_a_reservation">Make a reservation</div>
                        <div class="title-make_a_reservation_2">Make a reservation</div>
                        <form class="form-sid" action="" method="post">
            				<div class="box-line">
                                <p class="label"><label for="name">name</label><input id="name" type="text" value=""/></p>
                                <p class="label"><label style="left: 28px;" for="date">date</label><input id="date" type="text" value=""/></p>

                                <script type="text/javascript">
									jQuery(document).ready(function(){
										Calendar.setup
										({
											ifFormat    : "%d-%m-%Y",
											inputField  : "date", // ID of the input field
											button      : "date"      // ID of the button,
										});
									})
								</script>

                            </div>
                            <div class="box-line">
                                <p class="label"><label for="phone">phone</label><input id="phone" type="text" value=""/></p>
                                <p class="label"><label style="left: 28px;" for="time">time</label><input id="time" type="text" value=""/></p>
                            </div>
                            <div class="box-line">
                                <p class="label"><label for="email">email</label><input id="email" type="text" value=""/></p>
                            </div>
                            <div class="box-line">
                                <p class="label"><label for="mes">Number of people and special<br /> requirements...</label><textarea id="mes" cols="10" rows="10"></textarea></p>
                            </div>
                            <label class="sub"><input type="submit" value="" /></label>
            			</form>
                    </div>
                    <div class="block-sid">
                        <div class="box-icons">
                            <a href="#"><img src="images/icon-pdf.png" alt="" /></a>
                        </div>
                        <div class="title-functions_package">Functions package</div>
                    </div>
                </div>
            </div>
		</div>
<?=get_footer(); ?>

