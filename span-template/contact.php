<?php include_once"layouts/header.phtml"; ?>
<?php include_once"layouts/topBar.phtml"; ?>
<?php include_once"layouts/nav.phtml"; ?>
      <!-- Start Page Banner -->
      <div class="page-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h2>Contacts Us</h2>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="breadcrumbs">
                <a href="#">Home</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-right"></i></span>
                <span>Contact</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Banner -->

      <!-- Start Contact Us Section -->
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="title1 upper">
                <i class="fa fa-envelope-o"></i>
                Get On Touch
              </h2>
              <!-- Form -->
              <!-- Start Contact Form -->
              <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <button type="submit" id="submit" class="btn btn-effect"></i> Send Message</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>

              </form>
              <!-- End Contact Form -->
            </div>
            <div class="col-md-5 col-md-offset-1">
              <h2 class="title1 upper">
                <i class="fa fa-pencil"></i>
                Contact Information
              </h2>
              <div class="information">
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-map-marker icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Address</h3>
                    <span class="detail">Main Office: NO.22-23 Street Name- City,Country</span>
                    <span class="datail">Customer Center: NO.130-45 Streen Name- City, Country</span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-phone icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Phone Numbers</h3>
                    <span class="detail">Main Office: +880 123 456 789</span>
                    <span class="datail">Customer Supprort: +880 123 456 789 </span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-location-arrow icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Email Address</h3>
                    <span class="detail">Customer
                    Support: info@mail.com</span>
                    <span class="datail">Technical Support: support@mail.com</span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-pencil icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Other Datails</h3>
                    <span class="detail">Site Name: <a href="http://graygrids.com/">Graygrids.com</a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Us Section  -->

      <!-- Start Map Section -->
      <section id="map">
        <div class="title-banner">
            <h2 class="upper text-center">Our Location </h2>
        </div>
      </section>
      <!-- Conatct Section -->
      <div id="google-map"></div>
      <!-- End Map Section -->

      <!-- Start Footer Section -->
      <footer>
        <div class="container">
          <div class="row footer-widgets">
            <!-- Start Contact Widget -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-widget contact-widget">
                <h4>
                  <img src="assets/img/footer-logo.png" class="img-responsive" alt="Footer Logo" />
                </h4>
                <p>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                </p>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident blanditiis praesentium</p>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Contact Widget -->
            <!-- Start Recent Posts Widget -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-widget recent-posts-widget">
                <h4>
                  Recent posts
                  <span class="head-line">
                  </span>
                </h4>
                <ul class="recent-post">
                  <li class="post">
                    <a href="assets/img/portfolio/img-7.jpg" class="lightbox">
                    <img alt="" src="assets/img/portfolio/img-7.jpg">
                    </a>
                    <p class="text">Fusce gravida tortor felis, ac dictum risus sagittis <br><span>January 3,2015</span></p>
                  </li>
                  <li class="post">
                    <a href="assets/img/portfolio/img-8.jpg" class="lightbox">
                    <img alt="" src="assets/img/portfolio/img-8.jpg">
                    </a>
                    <p class="text">Fusce gravida tortor felis, ac dictum risus sagittis <br><span>January 3,2015</span></p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Recent posts Widget -->
            <!-- Start Tags Widget -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-widget tags-widget">
                <h4>
                  Tags
                  <span class="head-line">
                  </span>
                </h4>
                <ul class="tags">
                  <li>
                    <a href="#">
                    awesome
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    photography
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    web design
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    infographic
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    guitar
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    theme
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    website
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    artist design
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    graygrids
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    music
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Twitter Widget -->
            <!-- Start Flickr Widget -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-widget flickr-widget">
                <h4>
                  Flicker widget
                  <span class="head-line">
                  </span>
                </h4>
                <ul class="flickr-list">
                  <li>
                    <a href="assets/img/portfolio/img-1.jpg" class="lightbox">
                    <img alt="" src="assets/img/portfolio/img-1.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="assets/img/portfolio/img-2.jpg" class="lightbox">
                    <img alt="" src="assets/img/portfolio/img-2.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="assets/img/portfolio/img-3.jpg" class="lightbox">
                    <img alt="" src="assets/img/portfolio/img-3.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="assets/img/portfolio/img-4.jpg" class="lightbox">
                    <img alt="" src="assets/img/portfolio/img-4.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="assets/img/portfolio/img-5.jpg" class="lightbox">
                    <img alt="" src="assets/img/portfolio/img-5.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="assets/img/portfolio/img-6.jpg" class="lightbox">
                    <img alt="" src="assets/img/portfolio/img-6.jpg">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Flickr Widget -->
          </div>
          <!-- .row -->
        </div>
      </footer>
      <!-- End Footer Section -->
      <!-- Start Copyright -->
      <div class="copyright-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>
                Copyright &copy; 2015 Span - Designed & Developed by
                <a href="http://graygrids.com">
                GrayGrids
                </a>
              </p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-sm-6">
              <ul class="footer-nav">
                <li>
                  <a href="#">
                  Home /
                  </a>
                </li>
                <li>
                  <a href="#">
                  About Us /
                  </a>
                </li>
                <li>
                  <a href="#">
                  Privacy Police /
                  </a>
                </li>
                <li>
                  <a href="#">
                  Terms & Conditions /
                  </a>
                </li>
                <li>
                  <a href="#">
                  Support
                  </a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
      </div>
      <!-- End Copyright -->
    </div>
    <!-- End Full Body Container -->
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
    <i class="fa fa-angle-up">
    </i>
    </a>
    <!-- Span JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="assets/js/modernizrr.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/count-to.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <!-- Revelosition slider js -->
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/jquery.themepunch.tools.min.js"></script>
    <!-- Contact Form Scripts -->
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.expsensor=false">
    </script>
    <!-- Google Maps JS Only for Contact Pages -->
    <script type="text/javascript">
    var map;
    var plain = new google.maps.LatLng(-33.885429, 151.210081);
    var mapCoordinates = new google.maps.LatLng(-33.885429, 151.210081);


    var markers = [];
    var image = new google.maps.MarkerImage(
      'assets/img/map-marker.png',
      new google.maps.Size(84, 70),
      new google.maps.Point(0, 0),
      new google.maps.Point(60, 60)
    );

    function addMarker() {
      markers.push(new google.maps.Marker({
        position: plain,
        raiseOnDrag: false,
        icon: image,
        map: map,
        draggable: false
      }
                                         ));

    }

    function initialize() {
      var mapOptions = {
        backgroundColor: "#ffffff",
        zoom: 15,
        disableDefaultUI: true,
        center: mapCoordinates,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
          "featureType": "landscape.natural",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffffff"
          }
                     ]
        }
                 , {
                   "featureType": "landscape.man_made",
                   "stylers": [{
                     "color": "#ffffff"
                   }
                               , {
                                 "visibility": "off"
                               }
                              ]
                 }
                 , {
                   "featureType": "water",
                   "stylers": [{
                     "color": "#80C8E5"
                   }
                               , {
                                 "saturation": 0
                               }
                              ]
                 }
                 , {
                   "featureType": "road.arterial",
                   "elementType": "geometry",
                   "stylers": [{
                     "color": "#999999"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text.stroke",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#333333"
                   }
                              ]
                 }

                 , {
                   "featureType": "road.local",
                   "stylers": [{
                     "color": "#dedede"
                   }
                              ]
                 }
                 , {
                   "featureType": "road.local",
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#666666"
                   }
                              ]
                 }
                 , {
                   "featureType": "transit.station.bus",
                   "stylers": [{
                     "saturation": -57
                   }
                              ]
                 }
                 , {
                   "featureType": "road.highway",
                   "elementType": "labels.icon",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "featureType": "poi",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }

                ]

      }
          ;
      map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
      addMarker();

    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  </body>
</html>
