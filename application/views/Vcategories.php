        <!-- page content -->
        <div class="right_col" role="main">
            <h1>Categories</h1>
            <br>
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><img src="<?php echo base_url(); ?>images/fitness.png"></div>
                  <div class="count"><?php
                      $count = $fitness->num_rows();
                      echo $count;
                      ?></div>
                  <h3>Fitness</h3>
                  <a href="categories/showcategories/fitness"><p>Find Your Trainer!</p></a>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><img src="<?php echo base_url(); ?>images/yoga.png"></div>
                  <div class="count"><?php
                      $count = $yoga->num_rows();
                      echo $count;
                      ?></div>
                  <h3>Yoga</h3>
                  <a href="categories/showcategories/yoga"><p>Find Your Trainer!</p></a>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><img src="<?php echo base_url(); ?>images/swimming.png"></div>
                  <div class="count"><?php 
                      $count = $swimming->num_rows();
                      echo $count;
                      ?></div>
                  <h3>Swimming</h3>
                  <a href="categories/showcategories/swimming"><p>Find Your Trainer!</p></a>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><img src="<?php echo base_url(); ?>images/aerobic.png"></div>
                  <div class="count"><?php 
                      $count = $aerobic->num_rows();
                      echo $count;
                      ?></div>
                  <h3>Aerobic</h3>
                  <a href="categories/showcategories/aerobic"><p>Find Your Trainer!</p></a>
                </div>
              </div>
            </div>
          </div>
          </div>
    </div>
