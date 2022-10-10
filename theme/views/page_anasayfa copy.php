<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>


<section id="hero" class="hero">
  <?php if ((isset($slider)) and ($slider == TRUE)) : ?>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php $run = 0;
        foreach ($slider as $w) : ?>
          <div class="swiper-slide">
            <div class="slide-item" style="background-image: url('<?= site_url($w->path . $w->file_name); ?>')">
              <div class="content">
                <span class="title"><?php echo $w->title; ?></span>
                <p><?php echo $w->description; ?></p>
                <a href="<?php echo $w->button_link; ?>"><?php echo $w->button; ?></a>
              </div>
            </div>
          </div>
        <?php $run++;
        endforeach; ?>
      </div>
      <div class="swiper-button-next "></div>
      <div class="swiper-button-prev "></div>
    </div>
  <?php endif; ?>
</section>

<div class="mad-section mad-img-section no-pb mad-section--stretched mad-colorizer--scheme-color-4">
  <div class="mad-texture-holder">
    <span class="mad-img-texture11 bg-move" style="transform: translate(20px, -10px) scale(1);"></span>
  </div>
  <div class="mad-colorizer-bg-color" style="left: -64px; right: -64px;">
    <span class="mad-img-texture17 bg-move" style="transform: translate(20px, -10px) scale(1);"></span>
    <span class="mad-img-texture19 bg-move2" style="transform: translate(-20px, 10px) scale(1);"></span>
  </div>
  <div class="row justify-content-between">
    <div class="col-xxl-6 col-xl-6">
      <div class="mad-img-container">
        <div class="mad-img"><img src="<?= site_url($about[0]->path . $about[0]->file_name); ?>" alt=""></div>
      </div>
    </div>
    <div class="col-xxl-5 col-xl-6">
      <div class="row justify-content-start">
        <div class="col-xl-10">
          <div class="mad-img-content mobile-top">
            <div class="mad-pre-title"><?= $about[0]->title; ?></div>
            <h2 class="mad-title">
              Your <span>Satisfaction</span> Is <br>
              Our <span>Priority</span>!
            </h2>
            <div class="mad-text-medium content-element-6">
              <p>
                Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean
                auctor wisi et urna. Aliquam erat v olutpat. Duis ac turpis. Integer rutrum ante eu lacus.
              </p>
              <p>
                Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Quisque diam lorem, interdum vitae,dapibus ac, scelerisque
                vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar.
              </p>
            </div>
            <a href="pages_about.html" class="btn style-2 btn-big">more about us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <?php vdebug($tedaviler, false); ?> -->

<section id="tedavi" class="tedavi">
  <div class="container">
    <div class="mad-section mad-section--stretched mad-colorizer--scheme-a">
      <div class="mad-colorizer-bg-color">
        <span class="mad-img-texture18 bg-move"></span>
      </div>
      <div class="mad-title-wrap">
        <div class="mad-pre-title">what we do</div>
        <h2 class="mad-title">Services That We Offer</h2>
      </div>
      <div class="mad-entities type-2">
        <div class="row">
          <div class="col-md-4">
            <article class="mad-entity">
              <div class="mad-entity-media">
                <a href="portfolio_single_img.html"><img src="<?= site_url($tedaviler[0]->path . $tedaviler[0]->file_name); ?>" alt=""></a>
              </div>
              <div class="mad-entity-content">
                <div class="mad-entity-header">
                  <h4 class="mad-entity-title">
                    <a href="portfolio_single_img.html"><?= $tedaviler[0]->title; ?></a>
                  </h4>
                  <p>
                    <?= $tedaviler[0]->summary; ?>
                  </p>
                  <a href="blog_single_sidebar.html" class="mad-text-link"> Read More </a>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="testimonial" class="testimonial">
  <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-b with-texture9">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <!--================ Testimonials ================-->
        <div class="mad-testimonials style-2 align-center with-quotes-color-2">
          <div class="mad-grid mad-grid--cols-1 owl-carousel no-nav dots-center dots-color-2">
            <!-- owl item -->
            <div class="mad-grid-item">
              <div class="mad-testimonial">
                <div class="mad-testimonial-info">
                  <blockquote>
                    <p>
                      <?= $yorumlar[0]->summary; ?>
                    </p>
                  </blockquote>
                </div>
                <div class="mad-author">
                  <div class="mad-author-info">
                    <span class="mad-author-name"><?= $yorumlar[0]->title; ?></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- / owl item -->
            <!-- owl item -->
            <div class="mad-grid-item">
              <div class="mad-testimonial">
                <div class="mad-testimonial-info">
                  <blockquote>
                    <p>
                      <?= $yorumlar[1]->summary; ?>
                    </p>
                  </blockquote>
                </div>
                <div class="mad-author">
                  <div class="mad-author-info">
                    <span class="mad-author-name"><?= $yorumlar[1]->title; ?></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- / owl item -->
            <!-- owl item -->
            <div class="mad-grid-item">
              <div class="mad-testimonial">
                <div class="mad-testimonial-info">
                  <blockquote>
                    <p>
                      <?= $yorumlar[2]->summary; ?>
                    </p>
                  </blockquote>
                </div>
                <div class="mad-author">
                  <div class="mad-author-info">
                    <span class="mad-author-name"><?= $yorumlar[2]->title; ?></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- / owl item -->
          </div>
        </div>
        <!--================ End of Testimonials ================-->
      </div>
    </div>
  </div>
</section>

<section id="randevu" class="randevu">
  <div class="mad-section no-pb with-overlay-1 mad-section--stretched mad-colorizer--scheme-a" data-bg-image-src="images/1920x1136_bg1.jpg">
    <div class="container">
      <div class="mad-element-holder justify-content-end">
        <div class="mad-contact-element">
          <div class="mad-title-wrap">
            <div class="mad-pre-title">contact us</div>
            <h2 class="mad-title">Request a Consultation</h2>
          </div>
          <p class="content-element-4">
            Want to look instantly younger? Have any questions? Book a cosmetic consultation today and talk to one of our experts.
          </p>
          <form class="mad-contact-form mad-form style-2 item-col-2">
            <div class="mad-col">
              <div class="mad-form-item">
                <input type="text" id="cf_name" name="cf_name" required="" placeholder="First name*">
              </div>
            </div>
            <div class="mad-col">
              <div class="mad-form-item">
                <input type="text" id="cf_lname" name="cf_lname" required="" placeholder="Last Name">
              </div>
            </div>
            <div class="mad-col">
              <div class="mad-form-item">
                <input type="email" id="cf_email" name="cf_email" required="" placeholder="Email*">
              </div>
            </div>
            <div class="mad-col">
              <div class="mad-form-item">
                <input type="tel" id="cf_phone" name="cf_phone" placeholder="Phone*">
              </div>
            </div>
            <div class="mad-col full-width">
              <div class="mad-form-item">
                <div class="mad-custom-select">
                  <select data-default-text="Service of Interest" id="cf_country" name="cf_country">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="mad-col full-width">
              <div class="mad-form-item">
                <textarea rows="4" id="message" name="cf_message" required="" placeholder="Additional Information"></textarea>
              </div>
              <div class="mad-form-item">
                <button type="submit" class="btn btn-big"><span>Submit</span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view($theme . 'views/elements/footer'); ?>
<?php $this->load->view($theme . 'views/core/scripts'); ?>
<?php $this->load->view($theme . 'views/core/close'); ?>