<?php
/*
Template Name: Manifeste
*/
get_header();
;?>
<div class="site-content">
  <div class="site-container"></div>
  <main>
    <section class="headManifeste">
      <p class="headManifeste__subtitle">Nous défendeons les droits de tous, homme, femme, transgenre</p>
      <h2 class="headManifeste__title">Adhérez à notre manifeste</h2><a class="headManifeste__link" href="#signer" title="Aller vers la section pour signer notre manifeste">Signez notre manifeste</a>
    </section>
    <div class="actuality__container">
      <section class="rapportContent">
        <h2 class="hidden">Contenu du manifeste</h2>
        <section class="manifeste__section">
          <h3 class="manifeste__title"><?php echo the_field('titre_de_la_section_1');?></h3>
          <?php if( have_rows('manifeste_contenu') ):
          while( have_rows('manifeste_contenu') ) : the_row();?>
          <article class="actuality__article">
            <h4 class="manifeste__subtitle"><span class="manifeste__number"><?php echo the_sub_field('numero_du_titre');?></span><?php echo the_sub_field('titre');?>
            </h4>
            <div class="manifeste__text">
            <?php echo the_sub_field('texte');?>
          </div>
          </article>
          <?php if( get_sub_field('citation')): ?>
          <div class="manifeste__citation"><?php echo get_sub_field('citation');?></div>
        <?php endif;?>
            <?php endwhile; endif;?>
        </section>
    </div>
    <div class="manifeste__section--change">
      <section class="manifeste__section manifeste__section--changer">
        <h3 class="manifeste__title"><?php echo the_field('titre_de_la_section_2');?></h3>
        <?php if( have_rows('manifeste_contenu_2') ):
        while( have_rows('manifeste_contenu_2') ) : the_row();?>
        <article class="actuality__article">
          <h4 class="manifeste__subtitle">
            <?php if(get_sub_field('numero_du_titre')): ?>
            <span class="manifeste__number"><?php echo the_sub_field('numero_du_titre');?>
            </span>
          <?php endif;?>
            <?php echo the_sub_field('titre');?>
          </h4>
          <div class="manifeste__text">
          <?php echo the_sub_field('texte');?>
        </div>
        </article>
        <?php if( get_sub_field('citation')): ?>
        <div class="manifeste__citation"><?php echo get_sub_field('citation');?></div>
      <?php endif;?>
          <?php endwhile; endif;?>
      </section>
    </section>
    </div>
    <div class="askforus askforus--comment">
      <section class="commentaire">
        <h2 class="commentaire__title">Ils ont déja signer</h2>
        <?php $comment=get_comments(array('post_id'=>get_the_ID()));?>
        <?php foreach($comment as $key):?>
        <div class="commentaire__content">
          <span class="commentaire__subject">
          <?php echo urldecode(substr(($key->comment_author_url),7));?>
        </span>
          <p class="commentaire__info">
            <?php echo($key->comment_author);?>
            <time class="commentaire__time">
              Le <?php the_time('j F Y');?>
            </time>
          </p>
          <p class="commentaire__text">
            <?php echo $key->comment_content;?>
          </p>
        </div>
      <?php endforeach;?>
      </section>
      <section class="askforus__section">
        <h2 class="askforus__title" id="signer">Signer le manifeste</h2>
            <?php comment_form($comment_args); ?>
      </section>
    </div>
    <?php get_footer();?>
  </div>
</html>
