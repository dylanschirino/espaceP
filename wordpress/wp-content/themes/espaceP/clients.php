<?php
/*
Template Name: Clients
*/
get_header();
;?>

<div class="site-content">
  <div class="site-container"></div>
  <main>
    <div class="header__mainContainer">
      <section class="choix choix--clients">
        <h2 class="choix__title">Clients</h2>
        <?php global $wpdb;
        $accroches = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 183 AND meta_key LIKE "accroche"');?>
        <?php foreach($accroches as $accroche): ;?>
        <div class="choix__subtitle"><?php echo $accroche->meta_value;?>
        </div>
        <?php endforeach;?>
      </section>
      <div class="choix__image choix__image--client">
        <p class="hidden">Image représentant une main qui sort tendu vers ce qu'on imagine être une femme qui sors de sa voiture</p>
      </div>
    </div>
    <div class="actuality__container">

      <section class="rapportContent">
        <h2 class="hidden">Guide du clients</h2>
        <?php if( have_rows('section_de_contenu') ):
        while( have_rows('section_de_contenu') ) : the_row();?>
        <article class="actuality__article">
          <h3 class="article__title"><?php echo the_sub_field('titre');?></h3>
          <div class="article__text article__text--rapport">
            <?php echo the_sub_field('texte');?>
          </div>
        </article>
                <?php endwhile; endif;?>
      </section>
    </main>
    <?php get_footer();?>
    </div>
  </html>
