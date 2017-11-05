<?php
/*
* One Hotel Header
*/
?>
<!DOCTYPE HTML>

<!--[if IE 6]>
<html id="ie6" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />    
<title><?php           
    /*            
    * Print the <title> tag based on what is being viewed.            
    */        
    global $page, $paged;                   
    wp_title( '|', true, 'right' );                   
    // Add the blog name.           
    bloginfo( 'name' );                   
    // Add the blog description for the home/front page.            
    $site_description = get_bloginfo( 'description' );            
    if ( $site_description && ( is_home() || is_front_page() ) )              
      echo " | $site_description";                    
    // Add a page number if necessary:  
    
    if ( $paged >= 2 || $page >= 2 )              
      echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );         
  ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','www.google-analytics.com/analytics.html','ga');

  ga('create', 'UA-50960990-1', 'slashdown.nl');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- Top header -->
<div id="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <div class="th-text pull-left">
          <div class="th-item"> <a href="#"><i class="fa fa-phone"></i>+8809613-665544</a> </div>
          <div class="th-item"> <a href="#"><i class="fa fa-envelope"></i>info@theolivesbd.com   </a></div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="th-text pull-right">
          <div class="th-item">
            <div class="btn-group">
			               <button class="btn btn-default btn-xs dropdown-toggle js-activated txt-white" type="button" data-toggle="dropdown"> English <span class="caret"></span> </button>
              <ul class="dropdown-menu txt-white">
                <li> <a href="#">English</a> </li>
                <li> <a href="#">Bangla</a> </li>
              </ul>
            </div>
          </div>
          <div class="th-item">
            <div class="social-icons"> 
				<a href="https://www.facebook.com/theolivesbd"><i class="fa fa-facebook"></i></a><a href="gplus.html"><i class="fa fa-google-plus"></i></a><a href="www.youtube.html"><i class="fa fa-youtube-play"></i></a><a href="www.instagram.html"><i class="fa fa-instagram"></i></a>			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Header -->
<header>
  <!-- Navigation -->
  <div class="navbar yamm navbar-default" id="sticky">
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="index.html" class="navbar-brand">         
        <!-- Logo -->
         <div id="logo"> 
         <img id="default-logo" src="<?= get_option('theme_logo'); ?>" alt="Olives" style="height:44px;"> 
         <img id="retina-logo" src="<?= get_option('theme_logo'); ?>" alt="Olives" style="height:44px;"> </div>
        </a> </div>
 

<div id="navbar-collapse-grid" class="navbar-collapse collapse"><ul id="menu-main-menu" class="nav navbar-nav"><li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267"><a title="About Us" href="about-us.html">About Us</a></li>
<li id="menu-item-313" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-313 dropdown"><a title="Rooms" href="#" data-toggle="dropdown" class="dropdown-toggle js-activated" aria-haspopup="true">Rooms <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292"><a title="Rooms and Suites" href="rooms-and-suites.html">Rooms and Suites</a></li>
	<li id="menu-item-314" class="menu-item menu-item-type-post_type menu-item-object-rooms menu-item-314"><a title="Deluxe Suite" href="rooms/deluxe-suite.html">Deluxe Suite</a></li>
	<li id="menu-item-315" class="menu-item menu-item-type-post_type menu-item-object-rooms menu-item-315"><a title="Executive Suite" href="rooms/executive-suite.html">Executive Suite</a></li>
	<li id="menu-item-316" class="menu-item menu-item-type-post_type menu-item-object-rooms menu-item-316"><a title="Premium Suite" href="rooms/premium-suite.html">Premium Suite</a></li>
	<li id="menu-item-318" class="menu-item menu-item-type-post_type menu-item-object-rooms menu-item-318"><a title="Royal Suite" href="rooms/royal-suite.html">Royal Suite</a></li>
	<li id="menu-item-317" class="menu-item menu-item-type-post_type menu-item-object-rooms menu-item-317"><a title="Presidential Suite" href="rooms/presidential-suite.html">Presidential Suite</a></li>
</ul>
</li>
<li id="menu-item-334" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-334"><a title="Facilities" href="facilities.html">Facilities</a></li>
<li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-346"><a title="Dining" href="dining.html">Dining</a></li>
<li id="menu-item-514" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-514"><a title="Spa and Salon" href="spa-and-salon.html">Spa and Salon</a></li>
<li id="menu-item-359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359"><a title="Meeting" href="meeting.html">Meeting</a></li>
<li id="menu-item-365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-365"><a title="Booking" href="booking.html">Booking</a></li>
<li id="menu-item-368" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-368"><a title="Gallery" href="gallery.html">Gallery</a></li>
<li id="menu-item-416" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-416"><a title="Contact Us" href="contact-us.html">Contact Us</a></li>
<li id="menu-item-447" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-447"><a title="My Booking" href="my-booking.html">My Booking</a></li>
</ul></div> 
     
    </div>
  </div>
</header>
<!-- Revolution Slider -->
<section class="revolution-slider">
  <div class="bannercontainer">
    <div class="banner">
      <ul>
        <!-- Slide 1 -->
				
        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" > 
          <!-- Main Image --> 
          <img src="wp-content/uploads/2015/04/slide-bg1.jpg" style="opacity:0;" alt="slidebg1"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat"> 
          <!-- Layers -->           
          <!-- Layer 1 -->
          <div class="caption sft revolution-starhotel bigtext"  
          				data-x="205" 
                        data-y="30" 
                        data-speed="700" 
                        data-start="1700" 
                        data-easing="easeOutBack"> 
						<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span>A New Dimension of Luxury<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span></div>
          <!-- Layer 2 -->
         <!-- <div class="caption sft revolution-starhotel smalltext"  
          				data-x="405" 
                        data-y="105" 
                        data-speed="800" 
                        data-start="1700" 
                        data-easing="easeOutBack">
						<span>And we like to keep it that way!</span></div>
        <!-- Layer 3 -->-->
                  <div class="caption sft"  
          				data-x="575" 
                        data-y="100" 
                        data-speed="1000" 
                        data-start="1900" 
                        data-easing="easeOutBack">
						<a href="rooms-and-suites.html" class="button btn btn-olive btn-lg">Visit Our Suites</a> 
                  </div>
        </li>
				
        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" > 
          <!-- Main Image --> 
          <img src="wp-content/uploads/2015/04/bg-facility2.jpg" style="opacity:0;" alt="slidebg1"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat"> 
          <!-- Layers -->           
          <!-- Layer 1 -->
          <div class="caption sft revolution-starhotel bigtext"  
          				data-x="205" 
                        data-y="30" 
                        data-speed="700" 
                        data-start="1700" 
                        data-easing="easeOutBack"> 
						<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span>The Olives Residents+Suites<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span></div>
          <!-- Layer 2 -->
         <!-- <div class="caption sft revolution-starhotel smalltext"  
          				data-x="405" 
                        data-y="105" 
                        data-speed="800" 
                        data-start="1700" 
                        data-easing="easeOutBack">
						<span>And we like to keep it that way!</span></div>
        <!-- Layer 3 -->-->
                  <div class="caption sft"  
          				data-x="575" 
                        data-y="100" 
                        data-speed="1000" 
                        data-start="1900" 
                        data-easing="easeOutBack">
						<a href="#" class="button btn btn-olive btn-lg">Welcome to the world of Luxury!</a> 
                  </div>
        </li>
				
        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" > 
          <!-- Main Image --> 
          <img src="wp-content/uploads/2015/04/slide-bg-02.jpg" style="opacity:0;" alt="slidebg1"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat"> 
          <!-- Layers -->           
          <!-- Layer 1 -->
          <div class="caption sft revolution-starhotel bigtext"  
          				data-x="205" 
                        data-y="30" 
                        data-speed="700" 
                        data-start="1700" 
                        data-easing="easeOutBack"> 
						<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span>Express Check in Facility<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span></div>
          <!-- Layer 2 -->
         <!-- <div class="caption sft revolution-starhotel smalltext"  
          				data-x="405" 
                        data-y="105" 
                        data-speed="800" 
                        data-start="1700" 
                        data-easing="easeOutBack">
						<span>And we like to keep it that way!</span></div>
        <!-- Layer 3 -->-->
                  <div class="caption sft"  
          				data-x="575" 
                        data-y="100" 
                        data-speed="1000" 
                        data-start="1900" 
                        data-easing="easeOutBack">
						<a href="booking.html" class="button btn btn-olive btn-lg">Book Your Room</a> 
                  </div>
        </li>
				
        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" > 
          <!-- Main Image --> 
          <img src="wp-content/uploads/2015/04/bg-premium.jpg" style="opacity:0;" alt="slidebg1"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat"> 
          <!-- Layers -->           
          <!-- Layer 1 -->
          <div class="caption sft revolution-starhotel bigtext"  
          				data-x="205" 
                        data-y="30" 
                        data-speed="700" 
                        data-start="1700" 
                        data-easing="easeOutBack"> 
						<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span>Quality and Satisfaction<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span></div>
          <!-- Layer 2 -->
         <!-- <div class="caption sft revolution-starhotel smalltext"  
          				data-x="405" 
                        data-y="105" 
                        data-speed="800" 
                        data-start="1700" 
                        data-easing="easeOutBack">
						<span>And we like to keep it that way!</span></div>
        <!-- Layer 3 -->-->
                  <div class="caption sft"  
          				data-x="575" 
                        data-y="100" 
                        data-speed="1000" 
                        data-start="1900" 
                        data-easing="easeOutBack">
						<a href="#" class="button btn btn-olive btn-lg">The Olives rooms</a> 
                  </div>
        </li>
				<!-- Slide 2 -->
      </ul>
    </div>
  </div>
</section>
<!-- Reservation form -->
<section id="reservation-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">         
        <form class="form-inline reservation-horizontal clearfix" role="form" method="post" action="http://theolivesbd.com/booking/" name="reservationform" id="reservationform">
        <!-- Error message -->
		<div id="message_reser" style="color:red"></div>
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label for="email" accesskey="E">E-mail</label>
                <input name="remail" type="email" id="email" value="" class="form-control" placeholder="Please enter your E-mail"/>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label for="room">Room Type</label>
                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                <select class="form-control" name="rroom" id="room">
                 <option selected="selected" disabled="disabled">Select a room</option>
                                 <option value="299">Deluxe Suite</option>
                                 <option value="285">Executive Suite</option>
                                 <option value="294">Premium Suite</option>
                                 <option value="303">Royal Suite</option>
                                 <option value="307">Presidential Suite</option>
                                </select>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label for="checkin">Check-in</label>
                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                <i class="fa fa-calendar infield"></i>
                <input name="rcheckin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label for="checkout">Check-out</label>
                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                <i class="fa fa-calendar infield"></i>
                <input name="rcheckout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
              </div>
            </div>
            <div class="col-sm-1">
              <div class="form-group">
                <div class="guests-select">
                  <label>Guests</label>
                  <i class="fa fa-user infield"></i>
                  <div class="total form-control" id="test">1</div>
                  <div class="guests">
                    <div class="form-group adults">
                      <label for="adults">Adults</label>
                      <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                      <select name="radults" id="adults" class="form-control">
                        <option value="1">1 adult</option>
                        <option value="2">2 adults</option>
                        <option value="3">3 adults</option>
                      </select>
                    </div>
                    <div class="form-group children">
                      <label for="children">Children</label>
                      <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                      <select name="rchildren" id="children" class="form-control">
                        <option value="0">0 children</option>
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
            <div class="col-sm-2">
              <button name="reservationSubmit" type="submit" class="btn btn-primary btn-block">Book Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<div class="container">
    <div class="row">
         <div class="col-sm-12"> 
            
		<div class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
			<span class="trail-browse">Browse:</span> <span class="trail-end">Home</span>
		</div>        </div>       
     </div>
 </div>








<!-- Rooms -->

<section class="rooms mt50">

  <div class="container">

    <div class="row">

      <div class="col-sm-12">

        <h2 class="lined-heading"><span>Check our comfortable Suites</span></h2>

      </div>

      <!-- Room -->
        <div id="owl_roomsItem" class="owl-carousel">
	  
      <div class="col-sm-4 item">

        <div class="room-thumb"> 


<img width="354" height="228" src="wp-content/uploads/2015/04/delux.jpg" class="attachment-post-thumbnail" alt="delux" />


		comfortablesuites

          <div class="mask">

            <div class="main">

              <h5>Deluxe Suite</h5>

              <div class="price"> &#36; 225.00<span>a night</span></div>

            </div>

            <div class="content">

              <span>A modern hotel room in The Olives Bd</span>Our Deluxe Suites were designed to keep you productive and well-rested during your stay. From the moment you arrive, you'll feel right at home. All Deluxe Suites consist...
              <div class="row">

                  <div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i>Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Private balcony</li><li><i class="fa fa-check-circle"></i> Lake view</li></ul></div><div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i> Free Wi-Fi</li><li><i class="fa fa-check-circle"></i> Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Bathroom</li></ul></div>
              </div>

              <a href="rooms/deluxe-suite.html" class="btn btn-primary btn-block">Read More</a>

            </div>

          </div>

        </div>

      </div>

	  

	  
      <div class="col-sm-4 item">

        <div class="room-thumb"> 


<img width="354" height="228" src="wp-content/uploads/2015/04/executive1.jpg" class="attachment-post-thumbnail" alt="executive" />


		comfortablesuites

          <div class="mask">

            <div class="main">

              <h5>Executive Suite</h5>

              <div class="price"> &#36; 275.00<span>a night</span></div>

            </div>

            <div class="content">

              <span>A modern hotel room in The Olives Bd</span>Executive Suites are situated comparatively upper view that of Deluxe Suites. All Executive Suites consist of a bed room with a queen size bed, living, study, dining space...
              <div class="row">

                  <div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i>Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Private balcony</li><li><i class="fa fa-check-circle"></i> Lake view</li></ul></div><div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i> Free Wi-Fi</li><li><i class="fa fa-check-circle"></i> Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Bathroom</li></ul></div>
              </div>

              <a href="rooms/executive-suite.html" class="btn btn-primary btn-block">Read More</a>

            </div>

          </div>

        </div>

      </div>

	  

	  
      <div class="col-sm-4 item">

        <div class="room-thumb"> 


<img width="354" height="228" src="wp-content/uploads/2015/04/premium.jpg" class="attachment-post-thumbnail" alt="premium" />


		comfortablesuites

          <div class="mask">

            <div class="main">

              <h5>Premium Suite</h5>

              <div class="price"> &#36; 325.00<span>a night</span></div>

            </div>

            <div class="content">

              <span>A modern hotel room in The Olives Bd</span>Spacious and versatile, our Premium Suits blends peaceful comfort with contemporary design, creating the perfect retreat for families or guests seeking a little extra space.Modern furnishings in warm...
              <div class="row">

                  <div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i>Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Private balcony</li><li><i class="fa fa-check-circle"></i> Lake view</li></ul></div><div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i> Free Wi-Fi</li><li><i class="fa fa-check-circle"></i> Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Bathroom</li></ul></div>
              </div>

              <a href="rooms/premium-suite.html" class="btn btn-primary btn-block">Read More</a>

            </div>

          </div>

        </div>

      </div>

	  

	  
      <div class="col-sm-4 item">

        <div class="room-thumb"> 


<img width="354" height="228" src="wp-content/uploads/2015/04/royal.jpg" class="attachment-post-thumbnail" alt="royal" />


		comfortablesuites

          <div class="mask">

            <div class="main">

              <h5>Royal Suite</h5>

              <div class="price"> &#36; 375.00<span>a night</span></div>

            </div>

            <div class="content">

              <span>A modern hotel room in  The Olives Bd</span>Our Royal Suites blend peaceful comfort with contemporary design, creating the perfect retreat for families or guests seeking a little extra space. All Royal Suite consist of...
              <div class="row">

                  <div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i>Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Private balcony</li><li><i class="fa fa-check-circle"></i> Lake view</li></ul></div><div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i> Free Wi-Fi</li><li><i class="fa fa-check-circle"></i> Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Bathroom</li></ul></div>
              </div>

              <a href="rooms/royal-suite.html" class="btn btn-primary btn-block">Read More</a>

            </div>

          </div>

        </div>

      </div>

	  

	  
      <div class="col-sm-4 item">

        <div class="room-thumb"> 


<img width="354" height="228" src="wp-content/uploads/2015/04/presidential.jpg" class="attachment-post-thumbnail" alt="presidential" />


		comfortablesuites

          <div class="mask">

            <div class="main">

              <h5>Presidential Suite</h5>

              <div class="price"> &#36; 475.00<span>a night</span></div>

            </div>

            <div class="content">

              <span>A modern hotel room in The Olives Bd</span>Guests of our exclusive, 2500 square-foot Duplex Presidential Suite will get you back to your best self while you enjoy time with family, friends or colleagues. Be enchanted...
              <div class="row">

                  <div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i>Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Private balcony</li><li><i class="fa fa-check-circle"></i> Lake view</li></ul></div><div class="col-xs-6"><ul class="list-unstyled"><li><i class="fa fa-check-circle"></i> Free Wi-Fi</li><li><i class="fa fa-check-circle"></i> Incl. breakfast</li><li><i class="fa fa-check-circle"></i> Bathroom</li></ul></div>
              </div>

              <a href="rooms/presidential-suite.html" class="btn btn-primary btn-block">Read More</a>

            </div>

          </div>

        </div>

      </div>

	  

	  
            </div>

    </div>

  </div>

</section>
<!-- Olive Features -->

<!-- USP's -->
<section class="usp mt100">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="lined-heading"><span>The Olives Features </span></h2>
      </div>

      <div class="col-sm-3 bounceIn appear" data-start="0">
      <div class="box-icon">
        <div class="circle"><i class="fa fa-medkit fa-lg"></i></div>
        <h3>Use of Health Club!</h3>
        <p>Our modern Health Club features up-to-date fitness equipment. Instructors are always ready to hear from you and resolve your problem as well. We are open 07:00 to 22:00, 7 days a week.</p>
        <a href="index5bba.html?post_type=post&amp;p=227">Read more<i class="fa fa-angle-right"></i></a> </div>
      </div>
      <div class="col-sm-3 bounceIn appear" data-start="400">
      <div class="box-icon">
        <div class="circle"><i class="fa fa-cutlery fa-lg"></i></div>
        <h3>24 Hour Restaurant</h3>
        <p>THE OLIVES RESTAURANT Taste of continental cuisine. We are proud to generate such as test &#038; true hospitality with the atmosphere to enjoy delicious food at THE OLIVES Restaurant.</p>
        <a href="index573c.html?post_type=post&amp;p=225">Read more<i class="fa fa-angle-right"></i></a> </div>
      </div>
      <div class="col-sm-3 bounceIn appear" data-start="800">
      <div class="box-icon">
        <div class="circle"><i class="fa fa-wifi fa-lg"></i></div>
        <h3>High Speed Internet</h3>
        <p>We provide our guests with the best technology have to offer, High-speed Wi-Fi Internet, webcams and sophisticated audiovisual equipment. An attendance will always to assist you and your business.</p>
        <a href="index87d9.html?post_type=post&amp;p=219">Read more<i class="fa fa-angle-right"></i></a> </div>
      </div>
      <div class="col-sm-3 bounceIn appear" data-start="1200">
      <div class="box-icon">
        <div class="circle"><i class="fa fa-credit-card fa-lg"></i></div>
        <h3>Stay First, Pay After!</h3>
        <p>We believe our guest will feel like home. Our guest can enjoy panoramic views of Gulshan Lake. Our hotel offers everything a business traveler demands and everything a vacation visitor desires. </p>
        <a href="index3878.html?post_type=post&amp;p=223">Read more<i class="fa fa-angle-right"></i></a> </div>
      </div>

    </div>
  </div>
</section>


<!-- Parallax Effect -->


<section class="mt100">
      <div id="parallax-image" style="background-image: url(wp-content/uploads/2015/04/home2.jpg);">
    <div class="color-overlay height-contents-350 fadeIn appear  padding-top" data-start="600">
      <div class="container">
        <div class="content">
          <h3 class="text-center txt-white font_30"><i class="fa fa fa-star-o"></i> The Olives </h3>
          <p class="text-center"><span class="txt-white font_24">An Exceptional Hotel in Bangladesh! </span>
		  <br>
		  <a href="facilities-2.html" class="btn btn-default btn-lg mt30">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>
    </section>

<!-- Gallery -->

<section class="gallery-slider mt100">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="lined-heading"><span>Gallery</span></h2>
      </div>
    </div>
  </div>
  <div id="owl-gallery" class="owl-carousel">
                 
    <div class="item"><a href="wp-content/uploads/2015/04/34.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/34.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/28.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/28.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/1.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/1.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/17.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/17.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/9.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/9.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/45.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/45.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/s7.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/s7.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/10.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/10.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/room-slider-12.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/room-slider-12.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/33.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/33.jpg" alt=""><i class="fa fa-search"></i></a></div>
                 
    <div class="item"><a href="wp-content/uploads/2015/04/141.jpg" data-rel="prettyPhoto[gallery1]"><img src="wp-content/uploads/2015/04/141.jpg" alt=""><i class="fa fa-search"></i></a></div>
  </div>
</section>
      

<div class="container">
    <div class="row">
        <!-- Testimonials -->
        
        <section class="testimonials mt100">
            <div class="col-md-6">
                <h2 class="lined-heading bounceInLeft appear" data-start="0"><span>What Other Visitors Experienced</span></h2>
                <div id="owl-reviews" class="owl-carousel">
                                                                    <div class="item">
                                                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
                                <img src="wp-content/uploads/2015/04/review-01.jpg" alt="Review 1" class="img-circle" />
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12">
                                <div class="text-balloon">Searched the internet and i found, booked and visited this hotel that i like to call utopia... <span>Kim Jones, Single Room</span> </div>
                            </div>
                        </div>
                                                                                                   <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
                                <img src="wp-content/uploads/2015/04/review-02.jpg" alt="Review 1" class="img-circle" />
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12">
                                <div class="text-balloon">I give it a 5 out of 5! Great hotel, friendly staff, clean, relaxing... Yep i'm coming back! ;-) <span>Sandra Donnathan, Double Room</span> </div>
                            </div>
                        </div>
                                                </div>
                                                                                           <div class="item">
                                                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
                                <img src="wp-content/uploads/2015/04/review-03.jpg" alt="Review 1" class="img-circle" />
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12">
                                <div class="text-balloon">Such a nice place... Next time i will book a 3 weeks stay at this place. <span>Rosanne O'Donald, Single Room</span> </div>
                            </div>
                        </div>
                                                                                                   <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
                                <img src="wp-content/uploads/2015/04/review-04.jpg" alt="Review 1" class="img-circle" />
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12">
                                <div class="text-balloon">By far the best hotel in the city! Location is nice and the service is great! <span>Carl Adams, Single Room</span> </div>
                            </div>
                        </div>
                                                </div>
                                                           </div>
            </div>
        </section>
        <!-- About -->
                <section class="about mt100">
            <div class="col-md-6">
                <h2 class="lined-heading bounceInRight appear" data-start="800"><span>Overview</span></h2>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                                        <li  class="active" ><a href="#hotel" data-toggle="tab">The Olives</a></li>
                                        <li ><a href="#events" data-toggle="tab">Food and Beverage</a></li>
                                        <li ><a href="#kids" data-toggle="tab">Business Center</a></li>
                                    </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                                         <div class="tab-pane fade in active" id="hotel">
                       <p>THE OLIVES ( residence+suite) blends sophistication, elegance, and classic southern hospitality with the unique surroundings in the heart of Dhaka City. With the advent of modernism in contemporary design, THE OLIVES have set the benchmark for premium quality style, comfort, and outstanding service.  </p>
<p>The Luxury Hotel is situated in the diplomatic zone of Gulshan area, which is the center point of the entire major corporation. The hotel is only ten kilometers away from Hazrat Shahjalal International Airport. </p>
<p>We are the pioneer in Bangladesh of this kind of hotel where  we are providing long staying opportunity with biggest room size consist of a Heavenly bed ,a living, a dining, a study, balcony and  fully equipped kitchen. 
We</p>                    </div>
                                        <div class="tab-pane fade in " id="events">
                        <p>We are proud to generate such as test & true hospitality with the atmosphere to enjoy delicious food at THE OLIVES Restaurant. The continental cuisine at our restaurant will inspire anyone to slow down and savor a mouthwatering breakfast, lunch or dinner. Stay energized and route to your next meeting with a sandwich or a cup of coffee. Offering great selection of Steak, Salad, Sea food, pastas, appetizers, main courses and desserts suited to all taste. </p>
<p>Western,  Continental,  Thai,  Japanese  and  Indian  dishes  with  regular buffets  and  ala-Carte  dishes  are  available.  Enjoy a fabulous dining experience with personalized service, and you will get value for money for quality of food. Open for Breakfast 6.30am-10.30am lunch 12.30pm-15.00pm, Dinner 19.00-23.00, 7 days a week.  </p>
<p><strong><em>24 hour Room Service:</em></strong> whenever you wish select from our in room menu the food you prefer.</p>                    </div>
                                        <div class="tab-pane fade in " id="kids">
                       <p>We provide our guests with the best technology have to offer, High-speed Wi-Fi Internet, webcams and sophisticated audiovisual equipment. </p>
<p>We also provide tactful, customized technical assistance. Our IT Solutions Manager makes sure that you have the best tools for supporting the operation of the computer and audiovisual equipment used at your meetings. </p>
<p>An attendance will always be there to assist you and your business.</p>                    </div>
                                    </div>
            </div>
        </section>
    </div>
</div>

<!-- Call To Action -->

<section id="call-to-action" class="mt100">

  <div class="container">

    <div class="row">

	
      <div class="col-md-8 col-sm-8 col-xs-12">

        <h2><em style="">The Olives - A New Dimension of Luxury</em></h2>

      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">

        <a href="facilities.html" target="_blank" class="btn btn-default btn-lg pull-right">Features of the Olives</a>

      </div>

    </div>

  </div>

</section>



<!-- Footer -->

<footer>

<div class="container">

  <div class="row">

	<div class="col-md-3 col-sm-3"><h4>About Olives</h4><p>A Home Away From Home...
Located in a little nook in Gulshan 1, away from the hustle and bustle of life. Where you can enjoy a retreat and a session of comfort and pampering.<br /> <br /> THE OLIVES is truly a slice of heaven and tranquility, providing guests with a host of amenities and benefits.</p></div><div class="col-md-3 col-sm-3"><h4>Hotel Features</h4><ul>
<li>Our modern Health Club features up-to-date fitness equipment. Swimming Poll & Gym facilities for in-house guest</li>
<li>24 Hrs. Reception, Housekeeping, Room Service, Maintenance, Concierge Service, Transportation & Security services. </li>
<li>24 hrs Hotel Security system monitor by CCTV camera. </li>
</ul></div><div class="col-md-3 col-sm-3"><h4>Rooms & Suites</h4><ul>                 
                 <li><a href="rooms/deluxe-suite.html">Deluxe Suite</a></li>
                 <li><a href="rooms/executive-suite.html">Executive Suite</a></li>
                 <li><a href="rooms/premium-suite.html">Premium Suite</a></li> 
                 <li><a href="rooms/royal-suite.html">Royal Suite</a></li>                          
                 <li><a href="rooms/presidential-suite.html">Presidential Suite</a></li>
             </ul></div><div class="col-md-3 col-sm-3"><h4>Address</h4><address>
      <strong>The Olives </strong><br>
      House: 3, Road: 126<br>
      Gulshan-1, Dhaka<br>
      Bangladesh<br><br>
      <abbr title="Phone">P:</abbr> <a href="#">+889613-665544 </a><br>
      <abbr title="Email">E:</abbr> <a href="#">info@theolivesbd.com</a><br><br>
      <abbr title="Website">W:</abbr> <a href="#">www.theolivesbd.com</a><br>
      </address></div>
  </div>

</div>




<div class="footer-bottom">

<div class="container">

<div class="row">

<div class="col-xs-6">&copy; 2015 The Olives - Residence + Suite. All Rights Reserved </div>

<div class="col-xs-6 text-right">

<ul>

<li>Powered by <a href="http://www.n2sys.com/"  target="_blank">N2sys Technology</a></li>

</ul>

</div>

</div>

</div>

</div>

</footer>



<!-- Go-top Button -->

<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

<script>$(document).ready(function(){
 $('.trail-end').addClass('color-olive');   
 var bradHref = 'rooms/index.html';
 var currentHref = jQuery('.breadcrumb-trail.breadcrumbs .sep').next('a').attr('href');
 if(bradHref == currentHref){
     jQuery('.breadcrumb-trail.breadcrumbs .sep').next('a').attr('href','rooms-and-suites/index.html');
 }
})</script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.lined-heading').each(function () {
            var lineHeding = jQuery(this).text();
            var chagHeding = '<span>' + lineHeding + '</span>';
            jQuery(this).html(chagHeding);
        });

        jQuery('a.left.carousel-control').html('<div class="owl-prev"><i class="fa fa-angle-left fa-3x"></i></div>');

        jQuery('a.right.carousel-control').html('<div class="owl-next"><i class="fa fa-angle-right fa-3x"></i></div>');       //jQuery("#checkin")

        //      .keyup(function () {

        //          var value = $(this).val();

        //          jQuery("#nights").val(value);

        //      })

        //      .keyup();

        jQuery("#checkout, #checkin").change(function () {
            var endDate = $('#checkout').val().split('index.html');
            var startDate = $('#checkin').val().split('index.html');
            if(endDate != '' && startDate != ''){
                var newendDate = new Date(endDate);
                var newstartDate = new Date(startDate);
                var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
                var diffDays = Math.round(Math.abs((newendDate.getTime() - newstartDate.getTime()) / (oneDay)));
                jQuery("#nights").val(diffDays);
            }
           //  alert(diffDays);
        });
    });

</script>





<?php
wp_footer();
?>
</body>


<!-- Mirrored from theolivesbd.com/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 04 Jan 2016 03:46:07 GMT -->
</html>