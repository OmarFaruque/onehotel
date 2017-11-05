<?php
/*
* default page
*/
get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section id="booking" class="container margin_20_top">
	<div class="row">
		<div class="container">
			<div class="col-sm-12">
				<hr>
				<h2><em class="title-inner"><?php the_title(); ?></em></h2>
				<hr>
			</div>
		</div>
	</div>
</section>
<section id="reservation-form">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Please fill out the form completely. Please note that required fields are indicated with an asterisk (*).</p>
				<form class="form-inline reservation-horizontal clearfix" role="form" method="post" action="" name="reservationformPage" id="reservationform">
					<!-- Error message -->
					<div id="message_reser" style="color:red"></div>
					
					<div class="row">
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="fullName">Full Name</label>
								<input name="fullNamepage" type="text" id="fullName" value="" class="form-control" placeholder="Please enter your Full Name">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="email" accesskey="E">E-mail</label>
								<input name="email" type="email" id="email" value="" class="form-control" placeholder="Please enter your E-mail"></input>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="discountCode">Voucher Code</label>
								<input type="text" id="discountCode" name="discountCode" placeholder="Voucer Code" class="form-control" value="">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="room">Room Type</label>
								<div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
								<select class="form-control" name="room" id="room">
									<option selected="selected" disabled="disabled">Select a room</option>
									<option value="299" selected="selected">Deluxe Suite</option>
									<option value="285">Executive Suite</option>
									<option value="294">Premium Suite</option>
									<option value="303">Royal Suite</option>
									<option value="307">Presidential Suite</option>
									
									<!--<option value=""></option>-->
									
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="checkin">Check-in</label>
								<div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00" data-original-title="" title=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
								<i class="fa fa-calendar infield"></i>
								<input name="checkin" type="text" id="checkin" value="" class="form-control hasDatepicker" placeholder="Check-in">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="checkout">Check-out</label>
								<div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00" data-original-title="" title=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
								<i class="fa fa-calendar infield"></i>
								<input name="checkout" type="text" id="checkout" value="" class="form-control hasDatepicker" placeholder="Check-out">
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<div class="guests-select">
									<label>Guests</label>
									<i class="fa fa-user infield"></i>
									<div class="total form-control" id="test">1</div>
									<div class="guests" style="display: none;">
										<div class="form-group adults">
											<label for="adults">Adults</label>
											<div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years" data-original-title="" title=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
											<select name="adults" id="adults" class="form-control">
												<option value="1">1 adults</option>
												<option value="2">2 adults</option>
												<option value="3">3 adults</option>
											</select>
										</div>
										<div class="form-group children">
											<label for="children">Children</label>
											<div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years" data-original-title="" title=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
											<select name="children" id="children" class="form-control">
												<option value="0">0 child</option>
												<option value="1">1 child</option>
												<option value="2">2 children</option>
												<option value="3">3 children</option>
											</select>
										</div>
										<button type="button" class="btn btn-default button-save btn-block">Save</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group" style="width:20%">
								<label for="discountCode">Nights</label>
								<input readonly="" type="text" id="nights" name="nights" placeholder="nights" class="form-control" value="">
							</div>
							<div class="form-group" style="width:50%">
								<label for="txtRoomQuantity">Reserve Room Quantity</label>
								<input type="text" id="txtRoomQuantity" name="txtRoomQuantity" placeholder="Reserve Room Quantity" class="form-control" value="1">
							</div>
						</div>
						<!--cradit card number-->
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="txtCreditCardType">Credit Card Type</label><br>
								<select id="txtCreditCardType" name="txtCreditCardType" class="form-control">
									<option value="">Select a card</option>
									<option value="VISACARD">VISACARD</option>
									<option value="MASTERCARD">MASTERCARD</option>
									<option value="AMEXCARD">AMEXCARD</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="craditCardNumber">Credit Card Account Numbers</label>
								<input type="text" pattern=".{10,20}" id="craditCardNumber" name="craditCardNumber" placeholder="Your Cradit Card Number" class="form-control" value="">
							</div>
						</div>
						
						<!--Secrect Code-->
						
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="secreatCode">Set Your Secret Pass Code &amp; Save it for Future</label>
								<input type="text" pattern=".{5,10}" id="secreatCode" name="secreatCode" placeholder="Set Your Secreat Code (min:5 digits to max: 10 digits)" class="form-control" value="">
							</div>
						</div>
						<!--cradid card expire date-->
						<div class="col-sm-6 col-md-6 col-xl-6 col-xs-12">
							<div class="form-group">
								<label for="craditCardExpireDate">Credit card expiration date</label>
								<div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-original-title="" title=""> <i class="fa fa-info-circle fa-lg"> </i> </div>
								<i class="fa fa-calendar infield"></i>
								<input type="text" id="craditCardExpireDate" name="craditCardExpireDate" placeholder="Credit card expiration date" class="form-control hasDatepicker" value="">
							</div>
						</div>
						
						
						<div class="col-sm-12 col-md-12 col-xl-12">
							<div class="form-group">
								<label for="mailingAddress">Message</label>
								<textarea id="mailingAddress" class="form-control" rows="3" name="mailingAddress"></textarea>
							</div>
						</div>
						<div class="col-sm-2">
							
							<button name="reservationPage" type="submit" class="btn btn-primary btn-block">Book Now</button>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>