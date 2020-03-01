    <section class="ftco-section testimony-section img" style="background-image: url(<?php echo base_url("assets/"); ?>images/bg_5.jpg);">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <?php
                foreach ($tb_testimony as $t){ ?>
                    <div class="item">
                      <div class="testimony-wrap text-center pb-5">
                        <div class="text p-3">
                          <p class="mb-4"><?php echo $t->msg_test; ?></p>
                          <p class="name"><?php echo $t->name_test; ?></p>
                          <span class="position"><?php echo $t->position_test; ?></span>
                        </div>
                      </div>
                    </div>
                <?php }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>