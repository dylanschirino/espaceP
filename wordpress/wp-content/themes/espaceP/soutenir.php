<?php
/*
Template Name: Soutenir
*/
get_header();
;?>
<div class="site-content">
  <div class="site-container"></div>
  <main>
    <div class="mainSoutien">
      <section class="headSoutien">
        <h2 class="headSoutien__title">Nous soutenir</h2>
        <div class="headSoutien__subtitle"><?php echo get_field('explication_abbonement');?></div>
        <div class="headSoutien__cards"><span class="headSoutien__label">Numéro de compte</span>
          <div class="headSoutien__compte"><?php echo get_field('numero_de_compte');?></div>
          <p class="headSoutien__info">Inscrivez vos données en communication</p>
        </div>
      </section>
      <section class="explain">
        <h2 class="hidden">Information</h2>
        <article class="explain__article">
          <h3 class="explain__title">Plus d'information</h3>
          <div class="explain__text">
            <?php echo get_field('information_sur_le_magazine');?>
          </div>
        </article>
      </section>
      <section class="partenaire">
        <h2 class="partenaire__title">Ils nous soutiennent déja</h2>
        <div class="partenaire__container">
          <ul class="partenaire__list">
            <?php if( have_rows('espace_partenaire') ):
            while( have_rows('espace_partenaire') ) : the_row();?>
            <li class="partenaire__element">
              <a class="partenaire__link" href="<?php the_sub_field('lien_vers_le_site_du_partenaire');?>" title="Vers le site de <?php echo the_sub_field('nom_partenaire');?>">
                <span class="hidden"><?php echo get_sub_field('nom_partenaire');?></span>
              <?php $image_partenaire = get_sub_field('image_du_partenaire');            $partenaire__imagesize='thumb-partenaire';?>
              <?php echo wp_get_attachment_image( $image_partenaire['id'], $partenaire__imagesize );?>
            </a>
            </li>

          <?php endwhile; endif;?>
          </ul>
        </div>
      </section>
    </div>

    <?php get_footer();?>

  </div>
</html>
