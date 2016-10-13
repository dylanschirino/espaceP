<?php
/*
Template Name: Actualité
*/
get_header();
;
if(is_page()){
  query_posts([
    'posts_per_page' =>1,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_type' => 'post'
  ]);
}
?>
        <div class="site-content">
          <div class="site-container"></div>
        </div>
        <div class="site-cache" id="site-cache"></div>
      </div>
      <main>
        <div class="header__mainContainer">
          <section class="headActu">
            <h2 class="headActu__title">Actualité</h2>
          </section>
          <section class="headActu__info">
            <h3 class="hidden">Des récits de vie</h3>
            <p class="headActu__subtitle">Des récits de vie, des nouvelles, pour en savoir plus</p>
          </section>
        </div>
      <div class="maincontainer">
        <section class="actuality">
          <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
          <div class="actuality__container">
            <h2 class="actuality__title"><?php echo the_title();?></h2>
            <div class="actuality__etiquette">
              <p class="etiquette__title">Date</p>
              <ul class="etiquette__list">
                <li class="etiquette__element"><?php the_field('time');?></li>
              </ul>
            </div>
            <div class="actuality__etiquette">
              <p class="etiquette__title">Etiquette</p>
              <div class="etiquette__list">
                  <?php wp_tag_cloud('number=5&orderby=count'); ?>
              </div>
            </div>
            <div class="actuality__etiquette">
              <p class="etiquette__title">Partage</p>
              <?php echo share_button($content);?>
            </div>
            <?php if( have_rows('actualite_contenu') ):

            while( have_rows('actualite_contenu') ) : the_row();?>
            <article class="actuality__article">
              <h3 class="article__title"><?php echo the_sub_field('titre');?></h3>
              <div class="article__text"><?php echo the_sub_field('texte');?></div>
            </article>
          <?php endwhile; endif;?>
          </div>
        <?php endwhile; endif;?>
          <section class="facebook">
            <h2 class="facebook__title">Dernière publication de notre facebook</h2>
            <div class="facebook__box"><span class="facebook__time">Il y a un an environs</span>
              <p class="facebook__text">Dans un article sur le dernier livre de Lilian Mathieu : « Prostitution, quel est le problème ? » une pensée très juste : « Tout cela avec une certaine méfiance pour le système idéologique néo-libéral qui semble être l’impensé de la pensée abolitionniste : « le tout sauf la prostitution paraît inviter à ne pas se montrer trop regardant quant à ce tout, qui pourrait comporter des activités tout autant éprouvantes, répugnantes et éventuellement moins rémunératrices que la prostitution mais autrement nécessaires à la prospérité capitaliste »</p><a class="facebook__button" href="#commenter" title="Commenter sur facebook">Commenter</a><a class="facebook__button" href="#partager" title="Commenter sur facebook">Partager</a>
            </div>
          </section>
        </section>
    </main>
    <?php get_footer();?>
      </div>
</html>
