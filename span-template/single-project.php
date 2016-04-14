  <?php include_once"layouts/header.phtml"; ?>
  <?php include_once"layouts/topBar.phtml"; ?>
  <?php include_once"layouts/nav.phtml"; ?>
  <?php $issues = new  magazinesController();?>
<?php $url =($_SERVER['REQUEST_URI']); ?>
<?php $pole = $_GET['pole']; $magazine = $_GET['position'] ?>
<?php $page = explode('?', $url); ?>
    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">
          <!-- Start Single Project Slider -->
          <div class="single-gallery col-md-8">
            <div class="touch-slider owl-carousel" data-slider-pagination="true">
                <div class="item">
                  <a class="lightbox" title="This is an image title" href="assets/img/blog/blog1-large.jpg">
                  <img src="assets/img/blog/blog1-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen"></i></div>
                  </a>
                </div>
                <div class="item">
                  <a class="lightbox" title="This is an image title" href="assets/img/blog/blog2-large.jpg"><img src="assets/img/blog/blog2-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen"></i></div>
                  </a>
                </div>
                <div class="item">
                  <a class="lightbox" href="assets/img/blog/blog3-large.jpg"><img src="assets/img/blog/blog3-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen "></i></div>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Single Project Slider -->
            <?php $issue = $issues->getMagazineInfos($pole,$magazine) ?>
            <!-- Start Project Content -->
            <div class="project-content col-md-4">
              <h5 class="widget-title"><?= $issue->name ?></h5>
              <p><?= $issue->text ?></p>
              <ul>
                <li><strong>Site internet : </strong> <a href="http://<?= $issue->website ?>" target="_blank"><?= $issue->website?></a></li>
                <li><strong>Abonnement : </strong><a href="http://<?= $issue->abonnement ?>" target="_blank"><?= $issue->abonnement ?></a></li>
              </ul>
              <div class="share">
                <div class="social-link">
                  <span>Suivez-nous</span>
                  <?php foreach ($issue->social as $key => $value):?>
                    <?php if (isset($value->name)) {?>
                      <a class="<?= $value->name ?>" target="_blank" data-original-title="<?= $value->name ?>" href="<?= $value->url?>" data-toggle="tooltip" data-placement="top"><i class="fa fa-<?= $value->name?>"></i></a>
                    <?php } ?>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
            <!-- End Project Content -->
          </div>
          <!-- Start Portfolio Section -->
          <div class="project">
            <div class="container">
              <div class="row">
                <!-- Start Recent Projects Carousel -->
                <div class="recent-projects">
                  <?php $onePole =  $issues->getOnePole($pole) ?>
                  <h4 class="title"><span>Les autres magazines en <?= $onePole->name ?></span></h4>
                  <div id="projects-carousel" class="touch-carousel">
                    <?php foreach ($onePole as $key => $value):?>
                      <?php foreach ($value as $key1 => $mag):?>
                        <?php if($key1 != $magazine){?>
                      <div class="portfolio-item item">
                        <div class="portfolio-border">
                          <div class="portfolio-img">
                            <img alt="" src="assets/img/projects/projects-01.jpg" />
                            <div class="overlay">
                              <a href="assets/img/projects/projects-01.jpg" class="lightbox"><i class="more fa fa-search"></i></a>
                            </div>
                          </div>
                          <div class="portfolio-details">
                            <a href="#">
                              <h4><?php echo $mag->name ?></h4>
                              <p>Website Drawing</p>
                            </a>
                          </div>
                        </div>
                      </div>
                      <?php }?>
                      <?php endforeach ?>
                    <?php endforeach ?>
                </div>
              </div>
              <!-- End Recent Projects Carousel -->
              </div>
            </div>
            <!-- .container -->
          </div>
          <!-- End Portfolio Section -->
        </div>
      </div>
      <!-- End Content -->
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
    <!-- Style Switcher -->
    <div class="switcher-box">
      <a class="open-switcher show-switcher">
      <i class="fa fa-cog fa-2x">
      </i>
      </a>
      <h4>
        Style Switcher
      </h4>
      <span>
      12 Predefined Color Skins
      </span>
      <ul class="colors-list">
        <li>
          <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach">
          </a>
        </li>
        <li>
          <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige">
          </a>
        </li>
      </ul>
      <span>
      Top Bar Color
      </span>
      <select id="topbar-style" class="topbar-style">
        <option value="1">
          Light (Default)
        </option>
        <option value="2">
          Dark
        </option>
        <option value="3">
          Color
        </option>
      </select>
      <span>
      Layout Style
      </span>
      <select id="layout-style" class="layout-style">
        <option value="1">
          Wide
        </option>
        <option value="2">
          Boxed
        </option>
      </select>
      <span>
      Patterns for Boxed Version
      </span>
      <ul class="bg-list">
        <li>
          <a href="#" class="bg1">
          </a>
        </li>
        <li>
          <a href="#" class="bg2">
          </a>
        </li>
        <li>
          <a href="#" class="bg3">
          </a>
        </li>
        <li>
          <a href="#" class="bg4">
          </a>
        </li>
        <li>
          <a href="#" class="bg5">
          </a>
        </li>
        <li>
          <a href="#" class="bg6">
          </a>
        </li>
        <li>
          <a href="#" class="bg7">
          </a>
        </li>
        <li>
          <a href="#" class="bg8">
          </a>
        </li>
        <li>
          <a href="#" class="bg9">
          </a>
        </li>
        <li>
          <a href="#" class="bg10">
          </a>
        </li>
        <li>
          <a href="#" class="bg11">
          </a>
        </li>
        <li>
          <a href="#" class="bg12">
          </a>
        </li>
        <li>
          <a href="#" class="bg13">
          </a>
        </li>
        <li>
          <a href="#" class="bg14">
          </a>
        </li>
      </ul>
    </div>
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
  </body>
</html>
