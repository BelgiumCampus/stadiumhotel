<?php 
    require('views/header.html');
?>
    <main class="padding-bottom-lg ">
        <div class="container-fluid">
            <!--
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <section class="text-center">
                  <h3>Points of Interest</h3>
                  <p>
                      The Stadium Hotel is conveniently close to various exciting tourist attractions and significant locations. <br/> The map provides you with a bird's eye view of 10 points of interest within a 10 kilometer radius of the hotel. <br/> Click away!
                  </p>
              </section>
          </div>
      </div>
-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6">
                        <section id="map" class="col-lg-9 col-lg-offset-3">
                        </section>
                    </div>
                    <div id="poi" class="col-lg-6 col-md-6">
                        <section id="main-points">
                            <h3 class="sliding-banner">Main Points of Interest</h3>
                            <div class="row">
                                <a href="http://www.nmbstadium.com/" target="_blank" class="sliding-banner col-lg-9 col-sm-12 col-xs-12 tile-color-3">
                                    <p>
                                        1km (12 minute walk) from Nelson Mandela Bay Stadium <i class="fa fa-arrow-right"></i>
                                    </p>
                                </a>
                            </div>
                            <div class="row">
                                <a href="http://stgeorgespark.nmmu.ac.za/" target="_blank" class="col-lg-9 col-sm-12 col-xs-12 sliding-banner tile-color-1">
                                    <p>
                                        5km from St. George's Park <i class="fa fa-arrow-right"></i>
                                    </p>
                                </a>
                            </div>
                            <div class="row">
                                <a href="http://www.bayworld.co.za/" target="_blank" class="col-lg-9 col-sm-12 col-xs-12 sliding-banner tile-color-2">
                                    <p>
                                        9km from Bayworld Museum, Oceanarium &amp; Snake Park <i class="fa fa-arrow-right"></i>
                                    </p>
                                </a>
                            </div>
                        </section>
                        <section id="other-points">
                            <h3 class="sliding-banner">Other Points of Interest</h3>
                            <div class="row">
                                <a href="http://saafmuseum.org.za/" target="_blank" class="col-lg-9 col-sm-12 col-xs-12 sliding-banner tile-color-1">
                                    <p>
                                        13km from the South African Air Force Museum <i class="fa fa-arrow-right"></i>
                                    </p>
                                </a>
                            </div>
                            <div class="row">
                                <a href="http://www.samrec.org.za" target="_blank" class="col-lg-9 col-sm-12 col-xs-12 sliding-banner tile-color-3">
                                    <p>
                                        15km from the Samrec Penguin Rescue Station <i class="fa fa-arrow-right"></i>
                                    </p>
                                </a>
                            </div>
                            <div class="row">
                                <a href="http://www.seaviewpredatorpark.com" target="_blank" class="col-lg-9 col-sm-12 col-xs-12 sliding-banner tile-color-2">
                                    <p>
                                        23km from Seaview Predator Park <i class="fa fa-arrow-right"></i>
                                    </p>
                                </a>
                            </div>
                            <div class="row">
                                <a href="http://www.kraggakamma.co.za/" target="_blank" class="col-lg-9 col-sm-12 col-xs-12 sliding-banner tile-color-2">
                                    <p>
                                        20km from Kragga Kamma Game Park <i class="fa fa-arrow-right"></i>
                                    </p>
                                </a>
                            </div>
                            <div class="row">
                                <a href="http://www.autopavilion.co.za/home.htm" target="_blank" class="col-lg-9 col-sm-12 col-xs-12 sliding-banner tile-color-1">
                                    <p>
                                        26km from Auto Pavilion <i class="fa fa-arrow-right"></i>
                                    </p>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    require('views/footer.php');
?>
