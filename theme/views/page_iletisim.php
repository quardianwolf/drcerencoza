<?php $this->load->view($theme.'views/core/open'); ?>
<?php $this->load->view($theme.'views/elements/header'); ?>
<?php $this->load->view($theme.'views/elements/banner'); ?>

<?php $article = $this->publish->get_articles($lang_in_use,$page_data->id_page,null,'0','logical_date','asc','ibs'); ?>
<?php if((isset($article)) AND ($article == TRUE)): ?>
  <?php $article = $article[0]; ?>

  <?php
    $headerPhone = str_replace('-', '', str_replace(')', '', str_replace('(', '', str_replace(' ', '', $site_data->phone))));
  ?>
  <section class="contact-form" id="contact-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="sec-title text-center mt-5">
            <h2 class="mb-3"><?=translate('bize_ulasin',$lang_in_use,'Şimdi bize ulaşın');?></h2>
            <p><?=translate('bize_ulasin_alt',$lang_in_use,'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir.');?></p>
            <div class="contact-info">
              <a href="tel:+90<?=$headerPhone;?>"><i class="fa fa-phone"></i><?=$site_data->phone;?></a>
              <span></span>
              <a href="mailto:<?=$site_data->email;?>"><i class="fa fa-envelope"></i><?=$site_data->email;?></a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <?=form_open('send_mail',array('name'=>'iletisim-formu','class'=>'form-contact','id'=>'contactform'));?>
              <div class="col-md-12 box">
                <input class="au-input" type="text" name="name" placeholder="İsminiz" required="required">
              </div>
              <div class="col-md-12 box">
                <input class="au-input" type="email" name="email" placeholder="E-Posta Adresiniz" required="required" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
              </div>
              <div class="col-md-12 box">
                <input class="au-input" type="text" name="email_subject" placeholder="Konu" required="required">
              </div>
              <div class="col-md-12 box">
                <input class="au-input" type="text" name="phone" placeholder="Telefon Numaranız" required="required">
              </div>
              <div class="col-md-12 box">
                <textarea class="au-textarea" name="message" placeholder="Mesajınız" required="required"></textarea>
              </div>
              <div class="col-md-12 box">
                <button class="iletisim-btn" type="submit">Teklif Al</button>
              </div>
            <?=form_close();?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php endif; //if((isset($article)) AND ($article == TRUE)):  ?>

<?php $this->load->view($theme.'views/elements/footer'); ?>
<?php $this->load->view($theme.'views/core/scripts'); ?>
<?php $this->load->view($theme.'views/core/close'); ?>
