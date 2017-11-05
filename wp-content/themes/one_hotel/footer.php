<?php 
/*
* Code House Footer
*/
?>

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