<?php $this->load->view($theme . 'views/core/open'); ?>
<?php $this->load->view($theme . 'views/elements/header'); ?>

<!-----HERO SECTION------>
<section id="hero" class="hero">
  <?php if ((isset($slider)) and ($slider == TRUE)) : ?>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php $run = 0;
        foreach ($slider as $w) : ?>
          <div class="swiper-slide ">
            <div class="image1">
              <img src="<?= site_url($w->path . $w->file_name); ?>">
            </div>
            <div class="box">
              <div>
                <h2><?php echo $w->title; ?></h2>
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
<!-----END OFHERO SECTION------>
<!-----THREE BOX SECTION------>

<!-- <?php vdebug($dudak_hastaliklari, false); ?> -->
<section class="slider-treatments-box">  
  <div class="threebox ">
    <div class="container mx-auto flex">  
      <div class="box1 pl-28">
        <div class="container">
          <h2><?= $slide_underbox[0]->title; ?></h2>
          <a href="<?= site_url($link_a[$lang_in_use . '/' . $slide_underbox[0]->id_page . '/' . $slide_underbox[0]->id_article]);  ?>" >DAHA COK BILGI AL<i class="fa-solid fa-arrow-right"></i></a>
          <img src="<?= site_url($slide_underbox[0]->path . $slide_underbox[0]->file_name); ?>" class="h-16 w-auto rounded-tl-2xl" />
        </div>
      </div>
      <div class="box2 pl-16">
        <div class="container">
          <h2><?= $slide_underbox[1]->title; ?></h2>
          <a href="<?= site_url($link_a[$lang_in_use . '/' . $slide_underbox[1]->id_page . '/' . $slide_underbox[1]->id_article]); ?>">DAHA COK BILGI AL<i class="fa-solid fa-arrow-right"></i></a>
          <img src="<?= site_url($slide_underbox[1]->path . $slide_underbox[1]->file_name); ?>" class="h-16 w-auto rounded-tl-2xl" />
        </div>
      </div>
      <div class="box3 pl-16">
        <div class="container ">
          <h2><?= $slide_underbox[2]->title; ?></h2>
          <a href="<?= site_url($link_a[$lang_in_use . '/' . $slide_underbox[2]->id_page . '/' . $slide_underbox[2]->id_article]); ?>">DAHA COK BILGI AL<i class="fa-solid fa-arrow-right"></i></a>
          <img src="<?= site_url($slide_underbox[2]->path . $slide_underbox[2]->file_name); ?>" class="h-16 w-auto rounded-tl-2xl" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-----END OF THREE BOX SECTION------>
<!----- LEFT TREATMENT SECTION------>
<section id="treatment-left" class="treatment-left">
  <div class="left-box">
    <div class="container mx-auto flex ">
      <div class="left">
        <div class=" container drop-shadow-2xl">
          <img src="<?= site_url($tedaviler[4]->path . $tedaviler[4]->file_name); ?>" class="h-96 w-auto rounded-br-3xl"/>
        </div>
      </div>
      <div class="right">
        <div class="container flex">
          <div class="row">
            <h2><?= $tedaviler[4]->title; ?></h2>
            <p><?= $tedaviler[4]->summary; ?></p>
            <div class="button-group">
            <button class="button1">Randevu Al</button>
            <button class="button2">Devamını Oku</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-----END OF LEFT TREATMENT SECTION------>
<!-----TESTIMONIALS SECTION------>
<section id="testimonials" class="testimonials">
  <div class="testimonials">
    <div class="container mx-auto">
    <section class="bg-transparent">
      <div class="ust-kisim">
        <p class="ilk"><?= $yorumlar[4]->title; ?></p>
        <h2><?= $yorumlar[4]->subtitle; ?></h2>
        <p class="info"><?= $yorumlar[4]->summary; ?></p>
      </div>
  <div class="mx-auto max-w-7xl md:grid md:grid-cols-2 md:px-6 lg:px-8">
    <div class="py-12 px-4 sm:px-6 md:flex md:flex-col  md:py-16 md:pl-0 md:pr-10 lg:pr-16">
      <blockquote class="mt-6 md:flex md:flex-grow md:flex-col">
        <div class="relative text-lg font-medium text-white md:flex-grow">
          <p class="relative"><?= $yorumlar[0]->summary; ?></p>
        </div>
        <footer class="mt-8">
          <div class="flex items-start">
            <div class="inline-flex flex-shrink-0 rounded-full ">
              <img class="h-16 w-auto" src="<?= site_url($yorumlar[0]->path . $yorumlar[0]->file_name); ?>" alt="">
            </div>
            <div class="ml-4">
              <div class="text-base font-medium name"><?= $yorumlar[0]->title; ?></div>
            </div>
          </div>
        </footer>
      </blockquote>
    </div>
    <div class="  py-12 px-4 sm:px-6  md:py-16 md:pr-0 md:pl-10 lg:pl-16">
      <blockquote class="mt-6 md:flex md:flex-grow md:flex-col">
        <div class="relative text-lg font-medium text-white md:flex-grow">
          <p class="relative"><?= $yorumlar[1]->summary; ?></p>
        </div>
        <footer class="mt-8">
          <div class="flex items-start">
            <div class="inline-flex flex-shrink-0 rounded-full">
              <img class="h-16 w-auto" src="<?= site_url($yorumlar[1]->path . $yorumlar[1]->file_name); ?>" alt="">
            </div>
            <div class="ml-4">
              <div class="text-base font-medium name"><?= $yorumlar[1]->title; ?></div>
            </div>
          </div>
        </footer>
      </blockquote>
    </div>
    <div class="py-12 px-4 sm:px-6 md:flex md:flex-col  md:py-16 md:pl-0 md:pr-10 lg:pr-16">
      <blockquote class="mt-6 md:flex md:flex-grow md:flex-col">
        <div class="relative text-lg font-medium text-white md:flex-grow">
          <p class="relative"><?= $yorumlar[2]->summary; ?></p>
        </div>
        <footer class="mt-8">
          <div class="flex items-start">
            <div class="inline-flex flex-shrink-0 rounded-full ">
              <img class="h-16 w-auto" src="<?= site_url($yorumlar[2]->path . $yorumlar[2]->file_name); ?>" alt="">
            </div>
            <div class="ml-4">
              <div class="text-base font-medium name"><?= $yorumlar[2]->title; ?></div>
            </div>
          </div>
        </footer>
      </blockquote>
    </div>
    <div class="  py-12 px-4 sm:px-6  md:py-16 md:pr-0 md:pl-10 lg:pl-16">
      <blockquote class="mt-6 md:flex md:flex-grow md:flex-col">
        <div class="relative text-lg font-medium text-white md:flex-grow">
          <p class="relative"><?= $yorumlar[3]->summary; ?></p>
        </div>
        <footer class="mt-8">
          <div class="flex items-start">
            <div class="inline-flex flex-shrink-0 rounded-full ">
              <img  src="<?= site_url($yorumlar[3]->path . $yorumlar[3]->file_name); ?>" alt="">
            </div>
            <div class="ml-4">
              <div class="text-base font-large name"><?= $yorumlar[3]->title; ?></div>
            </div>
          </div>
        </footer>
      </blockquote>
    </div>
  </div>
    </div>
  </div>
</section>
<!-----END OF TESTIMONIALS SECTION------>
<!-----RIGHT TREATMENT SECTION------>
<section id="treatment-right" class="treatment-right">
  <div class="right-box">
    <div class="container mx-auto flex">
      <div class="left">
        <div class="container flex">
          <div class="row">
            <h2><?= $tedaviler[3]->title; ?></h2>
            <p><?= $tedaviler[3]->summary; ?></p>
         
            <div class="doctor-box">
              <div class="container mx-auto flex">
                <div class="image">
                  <img src="<?= site_url($tedaviler[5]->path . $tedaviler[5]->file_name); ?>" class="h-16 w-auto"/>
                </div>
                <div class="text">
                  <h2><?= $tedaviler[5]->title; ?></h2>
                  <p><?= $tedaviler[5]->summary; ?></p>
                </div>
              </div>
            </div>
            <div class="button-group">
              <button class="button1">Randevu Al</button>
              <button class="button2">Devamını Oku</button>
            </div>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="container mx-auto">
          <img src="<?= site_url($tedaviler[3]->path . $tedaviler[3]->file_name); ?>" class="h-96 w-auto "/>
        </div>
      </div>
    </div>
  </div>
</section>
<!-----END OF RIGHT TREATMENT SECTION------>
<!-----POPULER TREATMENTS SECTION------>
<section id="populer-treatments" class="populer-treatments">
  <div class="populer-treatments">
    <div class="container mx-auto">
    <div class="mx-auto max-w-7xl  py-24 px-4 sm:px-6 lg:px-8">
      <div class="upper-text text-center">
        <p class="first">TUM SERVISLER</p>
        <h2>Populer Tedavilerimiz</h2>
        <p class="end">Aciklama aciklama aciklama aciklama aciklama </p>
      </div>
  <!-- Tiers -->
  <div class="mt-24 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
    <div class="relative flex flex-col rounded-3xl  bg-white p-24 shadow-sm">
      <div class="flex-1">
        <h2 class="text-xl font-semibold text-gray-900"><?= $slide_underbox[0]->title; ?></h2>
        <img src="<?= site_url($slide_underbox[0]->path . $slide_underbox[0]->file_name); ?>"/>
        <p class="mt-6 text-gray-500"><?= $slide_underbox[0]->summary; ?></p>
      </div>
      <button class="button2">Devamını Oku</button>
    </div>
        <!---TEDAVI BOLME--->
    <div class="relative flex flex-col rounded-3xl border border-gray-200 bg-white p-24 shadow-sm">
      <div class="flex-1">
        <h2 class="text-xl font-semibold text-gray-900"><?= $slide_underbox[1]->title; ?></h2>
        <img src="<?= site_url($slide_underbox[1]->path . $slide_underbox[1]->file_name); ?>"/>
        <p class="mt-6 text-gray-500"><?= $slide_underbox[0]->summary; ?></p>
      </div>
      <button class="button2">Devamını Oku</button>
    </div>
  <!---TEDAVI BOLME--->
    <div class="relative flex flex-col rounded-2xl border border-gray-200 bg-white p-24 shadow-sm">
      <div class="flex-1">
        <h2 class="text-xl font-semibold text-gray-900"><?= $slide_underbox[2]->title; ?></h2>
        <img src="<?= site_url($slide_underbox[2]->path . $slide_underbox[2]->file_name); ?>"/>
        <p class="mt-6 text-gray-500"><?= $slide_underbox[0]->summary; ?></p>     
      </div>
      <button class="button2">Devamını Oku</button>
    </div>
  </div>
  </div>
    </div>
  </div>
</section>
<!-----END OF POPULER TREATMENTS SECTION------>
<!----- CONTACT FORM------>
<section id="contact-form" class="contact-form">
  <div class="contact-form">
    <div class="container mx-auto text-center">
      <div class="kutu">
        <h2>Detavi ve Uygulamalarimiz Hakkinda Bilgi Almak Ister Misiniz?</h2>
        <p>Uygulama ve tedavilerimiz hakkinda bilgi almak ya da randevu almak cok kolay, hemen bir form gonder!</p>
        <button>RANDEVU AL</button>
    </div>
  </div>
</section>
<!-----END OF CONTACT FORM------>

<?php $this->load->view($theme . 'views/elements/footer'); ?>
<?php $this->load->view($theme . 'views/core/scripts'); ?>
<?php $this->load->view($theme . 'views/core/close'); ?>