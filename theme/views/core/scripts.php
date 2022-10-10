<?php if ($GLOBALS['settings']['compress'] == 'offline') : ?>


  <script src="<?= theme('vendors/modernizr.js'); ?>"></script>
  <script src="<?= theme('vendors/jquery-3.6.0.min.js'); ?>"></script>
  <script src="<?= theme('vendors/jquery.easing.1.3.min.js'); ?>"></script>
  <script src="<?= theme('vendors/monkeysan.jquery.nav.1.0.js'); ?>"></script>
  <script src="<?= theme('vendors/owl-carousel/owl.carousel.min.js'); ?>"></script>
  <script src="<?= theme('vendors/arcticmodal/jquery.arcticmodal-0.3.min.js'); ?>"></script>
  <script src="<?= theme('vendors/monkeysan.validator.min.js'); ?>"></script>
  <script src="<?= theme('vendors/handlebars-v4.0.5.min.js'); ?>"></script>
  <script src="<?= theme('vendors/retina.min.js'); ?>"></script>
  <script src="<?= theme('vendors/mad.customselect.js'); ?>"></script>
  <!-- <script src="<?= theme('js/modules/mad.newsletter-form.min.js'); ?>"></script>
    <script src="<?= theme('js/modules/mad.contact-form.js'); ?>"></script>
    <script src="<?= theme('js/modules/mad.alert-box.min.js'); ?>"></script>
    <script src="<?= theme('js/modules/mad.sticky-header-section.min.js'); ?>"></script>
    <script src="<?= theme('js/mad.app.js'); ?>"></script> -->
  <!-- <script src="../path/to/flowbite/dist/flowbite.js"></script> -->
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/8d50ef5662.js" crossorigin="anonymous"></script>


  
  <script src="<?= theme('js/app.js'); ?>"></script>


  </script>

<?php else : ?>
  <script src="<?= theme('dist/client_all_scripts.min.js'); ?>" type="text/javascript"></script>
<?php endif; ?>


<script>
  $('.mad-mobile-nav-btn').click(function(){
  $('.mad-navigation-container').toggle('open');
 })
 if(window.innerWidth < 992 ){ $('.mad-navigation-container').hide(); }
</script>

<!-- <script>
function myFunction() {
  var x = document.getElementById("nav-mob");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script> -->


<script type="text/javascript">
  $(document).ready(function() {
    setTimeout(function() {
      $('#form-popup').removeClass('d-none');
    }, 25000);


    $('.mad-navigation li').each(function() {
      var $this = $(this);
      if ($this.find('ul').length > 0) {
        $this.addClass('menu-item-has-children');
      }
    });
  });

  $('.close-btn').click(function() {
    $('#form-popup').addClass('d-none');
  });

  // (function() {
  //   if ("loading" in HTMLImageElement.prototype) {
  //     var lazyEls = document.querySelectorAll("[loading=lazy]");
  //     lazyEls.forEach(function(lazyEl) {
  //       if (lazyEl.tagName == 'IMG') {
  //         /* lazyEl.setAttribute(
  //            "src",
  //            lazyEl.getAttribute("data-src")
  //          );*/
  //       } else {
  //         lazyEl.style.backgroundImage = "url(" + lazyEl.getAttribute("data-src") + ")";
  //       }
  //     });
  //   } else {
  //     var script = document.createElement("script");
  //     script.async = true;
  //     script.src =
  //       "https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js";
  //     window.lazyLoadOptions = {
  //       elements_selector: "[loading=lazy]"
  //       //eventually more options here
  //     };
  //     document.body.appendChild(script);
  //   }
  // })();

  function addNaitonalCode($elem) {
    if ($elem.find('input[name="contact_form_phone"]').val() != '') {
      var data = $elem.find('input[name="contact_form_phone"]').val();
      data = $.trim(data).replace(/ /g, '');
      $elem.find('input[name="contact_form_phone"]').val($elem.find('.selected-flag').attr('title') + data);
    }
  }

  var form = [];

  if ($('form[name="iletisim-formu"]').length > 0) {
    form['iletisim-formu'] = {};

    form['iletisim-formu'].form = $("form[name='iletisim-formu']");
    form['iletisim-formu'].button = form['iletisim-formu'].form.find('button[type="submit"]');
    form['iletisim-formu'].elements = form['iletisim-formu'].form.find('input, select, textarea');

    form['iletisim-formu'].form.validate({
      submitHandler: function(e) {
        e.preventDefault;

        form['iletisim-formu'].button.attr('data-process', 'sending');
        addNaitonalCode(form['iletisim-formu'].form);
        form['iletisim-formu'].allData = form['iletisim-formu'].form.serialize();
        form['iletisim-formu'].elements.css('pointer-events', 'none');

        $.ajax({
          type: "POST",
          url: form['iletisim-formu'].form.attr('action'),
          data: form['iletisim-formu'].allData,
          timeout: 10000,
          cache: false,
          success: function(data) {
            data = jQuery.parseJSON(data);

            document.getElementById('messagebox').innerHTML = data.message;
            $('#messagebox').slideDown('slow');
          },
          error: function(errorThrown) {
            form['iletisim-formu'].button.attr('data-process', 'sending-error')
            form['iletisim-formu'].elements.css('pointer-events', 'none');
            //setTimeout(function(){window.location.reload();},7000);

            //data = jQuery.parseJSON(data);

            /*if( data.status == 'error'){
              form['iletisim-formu'].elements.css('pointer-events','initial');
            }*/
          }

        }); //End of Ajax

      } // End of Submit Handler
    }); // End of validate
  }
</script>
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>