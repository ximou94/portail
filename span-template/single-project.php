  <?php include_once 'config.php' ?>
  <?php include_once ROOT.DS.'controllers/magazinesController.php' ?>
  <?php $issues = new  magazinesController();?>

  <?php $otherPole = $_GET['pole']; $otherMagazine = $_GET['position'] ?>
  <?php $link = $_GET['url'] ?>
  <?php $issue = $issues->getMagazineInfos($otherPole,$otherMagazine) ?>

<?php if ($link != $issue->url ) {
header('location:http://edp-sante.fr/magazine/'.$otherPole.''.$otherMagazine.'-'.$issue->url);
} ?>
  <?php include_once ROOT.DS."/layouts/header.phtml"; ?>
  <?php include_once ROOT.DS."/layouts/topBar.phtml"; ?>
  <?php include_once ROOT.DS."/layouts/nav.phtml"; ?>
  <?php $url =($_SERVER['REQUEST_URI']); ?>
<?php $page = explode('?', $url); ?>
    <div id="content">
      <div class="container">
        <div class="row">
          <!-- Start Single Project Slider -->
          <div class="single-gallery col-md-8">
            <div class="touch-slider owl-carousel" data-slider-pagination="true">
                <div class="item">
                  <a class="lightbox" title="This is an image title" href="assets/img/blog/blog1-large.jpg">
                  <img src="/assets/img/blog/blog1-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen"></i></div>
                  </a>
                </div>
                <div class="item">
                  <a class="lightbox" title="This is an image title" href="/assets/img/blog/blog2-large.jpg"><img src="/assets/img/blog/blog2-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen"></i></div>
                  </a>
                </div>
                <div class="item">
                  <a class="lightbox" href="/assets/img/blog/blog3-large.jpg"><img src="/assets/img/blog/blog3-large.jpg" alt="">
                  <div class="thumb-overlay"><i class="icon-size-fullscreen "></i></div>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Single Project Slider -->
            <!-- Start Project Content -->
            <div class="project-content col-md-4">
              <h3 class="widget-title"><?= $issue->name ?></h3>
              <p><?= $issue->text ?></p>
              <ul>
                <li><strong>Site internet : </strong> <a href="http://<?= $issue->website ?>" target="_blank"><?= $issue->website?></a></li>
              <?php if (isset($issue->abonnement)):?>
                <li><strong>Abonnement : </strong><a href="http://<?= $issue->abonnement ?>" target="_blank"><?= $issue->abonnement ?></a></li>
              <?php elseif(isset($issue->flipbook)) :?>
                <li><strong>Flipbook  : </strong><a href="http://<?= $issue->flipbook?>" target="_blank"><?= $issue->flipbook?></a></li>
              <?php endif ?>
              </ul>
              <?php if (!empty($issue->social)):?>
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
              <?php endif ?>

            </div>
            <!-- End Project Content -->
          </div>
          <!-- Start Portfolio Section -->
          <?php $onePole =  $issues->getOnePole($otherPole) ?>
          <?php if(count($onePole->magazines) >= 2): ?>

            <div class="row">
          <div class="project">
            <div class="container">
              <div class="row">
                <!-- Start Recent Projects Carousel -->
                <div class="recent-projects">

                  <h4 class="title"><span>Les autres magazines en <?= $onePole->name ?></span></h4>
                  <div id="projects-carousel" class="touch-carousel">
                    <?php foreach ($onePole as $key => $value):?>
                      <?php foreach ($value as $key1 => $mag):?>
                        <?php if($key1 != $otherMagazine){?>
                      <div class="portfolio-item item">
                        <div class="portfolio-border">
                          <div class="portfolio-img">
                            <img alt="" src="<?php echo $mag->logo ?>" />
                            <div class="overlay">
                              <a href="<?php echo $mag->logo ?>" class="lightbox"><i class="more fa fa-search"></i></a>
                            </div>
                          </div>
                          <div class="portfolio-details">
                            <a href="http://edp-sante.fr/magazine/<?=$otherPole?><?=$key1?>-<?= $mag->url?>">
                              <h4><?php echo $mag->name ?></h4>
                              <p>
                                <?= $mag->baseline ?>
                              </p>
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

            </div>

        <?php endif ?>
          <!-- End Portfolio Section -->

            <?php if(isset($issue->team) AND !empty($issue->team)):?>
<div class="row">

      <div class="section">
        <div class="container">
          <!-- Start Big Heading -->
          <div class="big-title text-center">
            <h1>
              Contactez nos équipes
            </h1>
          </div>
          <!-- End Big Heading -->
          <div class="row">
            <!-- Start Memebr 1 -->
            <?php foreach ($issue->team as $key => $value):?>
          <div class="col-md-3 col-sm-6">
              <div class="tema-member">
                <div class="team-thumbnail">
                  <img src="<?= $value->photo ?>" alt="">
                  <div class="overlay">
                    <div class="info">
                      <h4>DARRELL S.ALLEN</h4>
                      <h5>SOFTWARE ENGINNER</h5>
                      <p>Lorem Ipsum is simply dummy to text of the printing and Lorem off typesetting industry, Lorems text Ipsum has been the industry's to standard dummy text.</p>
                    </div>
                  <!--  <div class="social-media">
                      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                      <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>-->
                  </div>
                </div>
                <div class="info" itemscope itemtype="http://schema.org/Person">
                  <h4><span itemprop="name"><?= $value->name ?></span></h4>
                  <h5><span itemprop="jobTitle"><?= $value->profession ?></span></h5>
                  <div style="margin-bottom:15px;margin-top:15px" class="hr5"></div>
                  <p>
                      <?php if(!empty($value->phone)):?>
                    <i class="icon-call-out fa-2x">
                    </i>
                    <?php endif; ?>
                  <span itemprop="telephone"><?= $value->phone ?></span>
                  </p>
                      <p>
                        <?php if(!empty($value->mail)): ?>
                    <i class="icon-envelope fa-2x">
                    </i>
                  <?php endif; ?>
                  <span itemprop="email"><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;<?= $value->mail ?>"><?= $value->mail ?></a></span>
                  </p>
                </div>
              </div>
            </div>
        <?php endforeach ?>

          </div>
        </div>
      </div>
      <!-- Start Team Member Section -->

</div>
<?php endif ?>
        </div>

      </div>
      <!-- End Content -->
      <!-- Start Footer Section -->
    <?php include_once ROOT.DS."layouts".DS."footer.phtml" ?>
