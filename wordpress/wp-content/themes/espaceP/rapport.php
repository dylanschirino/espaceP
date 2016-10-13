<?php
/*
Template Name: Rapport
*/
get_header();
;?>

<div class="site-content">
  <div class="site-container"></div>
  <main>
    <div class="header__mainContainer">
      <section class="rapport">
        <h2 class="rapport__title">Rapport d'activité</h2>
      </section>
      <section class="sommaire" id="sommaire">
        <h2 class="sommaire__title">Sommaire</h2>
        <ul class="sommaire__list">
          <?php if( have_rows('rapport_contenu') ):
          while( have_rows('rapport_contenu') ) : the_row();?>
          <li class="sommaire__element"><a class="sommaire__link" href="#<?php echo str_replace(" ","-",get_sub_field('titre'));?>" title="Aller vers la section <?php echo the_sub_field('titre');?>"><?php echo the_sub_field('titre');?></a></li>
        <?php endwhile; endif;?>
        </ul>
      </section>
      <div class="actuality__container">
        <section class="rapportContent">
          <h2 class="hidden">Rapport Complet</h2>
          <?php if( have_rows('rapport_contenu') ):

          while( have_rows('rapport_contenu') ) : the_row();?>
          <article class="actuality__article" id="<?php echo str_replace(" ","-",get_sub_field('titre'));?>">
            <h3 class="article__title"><?php echo the_sub_field('titre');?></h3>
            <article class="article__text article__text--rapport"><?php echo get_sub_field('texte');?>
            </article>
          </article>
        <?php endwhile; endif;?>
        </section>
      </div>
      <div class="button" id="sidebar"><a class="button__link" href="#sommaire" title="Retourner au sommaire">Sommaire</a></div>
    </div>
  </main>

<?php get_footer();?>
</div>
</html>
