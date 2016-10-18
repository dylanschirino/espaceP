<?php
/*
Template Name: Single-Antenne
*/
if(is_page()){
  query_posts([
    'post_type' => 'antenne'
  ]);
}
get_header();
;?>
      <div class="site-content">
        <div class="site-container"></div>
        <main>
          <div class="mainCountry">
            <section class="contactForm">
              <h2 class="contactForm__title">Contact</h2>

              <div class="contactForm__form">
                  <?php echo do_shortcode(get_field('formulaire_de_contact'));?>
              </div>

            </section>
            <section class="contactInfo">
              <h2 class="contactForm__title contactForm__title--country"><?php echo the_title();?></h2>
              <ul class="contactInfo__list vcard" id="hcard-EspaceP" itemscope itemtype="http://schema.org/Organization">

                <li class="contactInfo__element" itemprop="employee"><span class="contactInfo__subtitle contactInfo__subtitle--coordinateur">Coordinatrice : </span> <?php echo the_field('coordinateur');?>
                </li>
                <li class="contactInfo__element street-address" itemprop="address"><span class="contactInfo__subtitle contactInfo__subtitle--adresse">Adresse : </span> <?php echo the_field('adresse');?>
                </li>
                <li class="contactInfo__element " itemprop="telephone"><span class="contactInfo__subtitle contactInfo__subtitle--telephone">Téléphone : </span><a class="contactInfo__link tel" href="tel:<?php echo str_replace(" ","",the_field('telephone'));?>" title="Nous téléphoner?"> <?php echo the_field('telephone');?></a></li>
                <?php if( get_field('fax')): ?>
                <li class="contactInfo__element" itemprop="faxNumber"><span class="contactInfo__subtitle contactInfo__subtitle--fax">Fax : </span><a class="contactInfo__link email" href="tel:022170215" title="Nous envoyer un fax?"> <?php echo the_field('fax');?></a></li>
              <?php endif;?>
                <li class="contactInfo__element" itemprop="email"><span class="contactInfo__subtitle contactInfo__subtitle--email">Email : </span><a class="contactInfo__link" href="mailto:<?php the_field('mail');?>" title="Nous envoyer un email?"><?php echo the_field('mail');?></a></li>
              </ul>
              <div class="contactInfo__google"><?php echo the_field('google_map');?><a href="https://www.google.com/maps/dir//116,+Rue+des+plantes+1030+Bruxelles/"class="contactInfo__image"><img class="contactInfo__img" src="http://maps.googleapis.com/maps/api/staticmap?center=116,+Rue+des+plantes+1030+Bruxelles&zoom=13&scale=2&size=440x300&maptype=roadmap&key=AIzaSyD0FsoxEPq60TK55sKfmEDqI3Iow0RjVLI&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:1%7C116,+Rue+des+plantes+1030+Bruxelles" alt="Google Map of 116, Rue des plantes 1030 Bruxelles" width="440" height="300"></a><a class="contactInfo__gmap" href="https://www.google.com/maps/dir//116,+Rue+des+plantes+1030+Bruxelles/">Vers la google maps</a></div>
            </section>
          </div>
        </main>
      <?php get_footer();?>
  </div>
</html>
