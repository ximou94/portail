<?php include_once"layouts/header.phtml"; ?>
<?php include_once"layouts/topBar.phtml"; ?>
<?php include_once"layouts/nav.phtml"; ?>
      <!-- Start Page Banner -->
      <div class="page-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <h2>Contactez-nous</h2>
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

              </h2>
              <!-- Form -->
              <!-- Start Contact Form -->
              <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="name" class="form-control" placeholder="Nom" required data-error="Veuillez renseigner votre nom">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Veuillez renseigner votre email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="msg_subject" class="form-control" placeholder="Sujet" required data-error="Veuillez renseigner un sujet">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <textarea id="message" rows="7" placeholder="Message" class="form-control" required data-error="Veuillez renseigner un message"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <button type="submit" id="submit" class="btn btn-effect"></i> Envoyer</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>

              </form>
              <!-- End Contact Form -->
            </div>
            <div class="col-md-5 col-md-offset-1">
              <h2 class="title1 upper">
                <i class="fa fa-pencil"></i>
                Informations
              </h2>
              <div class="information">
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-map-marker icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Adresse</h3>
                    <span class="detail">109 avenue Aristide Briand – CS 90042 – 92541 Montrouge cedex</span>
                  </div>
                </div>

                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-phone icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Téléphone</h3>
                    <span class="detail">01.41.17.73.90</span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-fax icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Fax</h3>
                    <span class="detail">+33(0)1.41.17.73.90</span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-location-arrow icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>adresse mail</h3>
                    <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#45;&#101;&#100;&#112;&#115;&#64;&#101;&#100;&#112;&#115;&#97;&#110;&#116;&#101;&#46;&#102;&#114;">&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#45;&#101;&#100;&#112;&#115;&#64;&#101;&#100;&#112;&#115;&#97;&#110;&#116;&#101;&#46;&#102;&#114;</a>
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
            <h2 class="upper text-center">Notre localisation</h2>
        </div>
      </section>
      <!-- Conatct Section -->
      <div id="google-map"></div>
      <!-- End Map Section -->

<?php include_once ROOT.DS."layouts".DS."footer.phtml" ?>
      <!-- Contact Form Scripts -->
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.expsensor=false">
    </script>
    <!-- Google Maps JS Only for Contact Pages -->
    <script type="text/javascript">
    var map;
    var plain = new google.maps.LatLng(48.812799, 2.326252);
    var mapCoordinates = new google.maps.LatLng(48.812799, 2.326252);


    var markers = [];
    var image = new google.maps.MarkerImage(
      'assets/img/map-marker.png',
      new google.maps.Size(64, 64),
      new google.maps.Point(0, 0),
      new google.maps.Point(32, 64)
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
        zoomControl: true,
        scaleControl: false,
        scrollwheel: true,
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
