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
          <?php if( have_rows('manifeste_contenu') ):
          while( have_rows('manifeste_contenu') ) : the_row();?>
          <h3 class="manifeste__title"><?php echo the_sub_field('titre_de_la_section_1');?></h3>
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
      </section>
    </div>
    <div class="manifeste__section--change">
      <section class="manifeste__section manifeste__section--changer">
        <?php if( have_rows('manifeste_contenu_2') ):
        while( have_rows('manifeste_contenu_2') ) : the_row();?>
        <h3 class="manifeste__title"><?php echo the_field('titre_de_la_section_2');?></h3>
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
    </div>
    <div class="askforus askforus--comment">
      <section class="commentaire">
        <h2 class="commentaire__title">Ils ont déja signer</h2>
        <div class="commentaire__content"><span class="commentaire__subject">Bravo à vous</span>
          <p class="commentaire__info">Daniel Tanner
            <time class="commentaire__time">Le 23 Janvier 2017</time>
          </p>
          <p class="commentaire__text">Je signe ce manifeste qui devrait être approuvé par l’UE. Si une législation européenne concernant les TDS et leurs clients(es) pouvait être mise en place, avec la participation des TDS, se rapprochant le plus possible de ce manifeste, il y aurait moins de traite des êtres humains, plus de sécurité physique et de santé pour les TDS et leurs clients(es). Malheureusement, au nom de la morale traditionnelle et/ou pour défendre les intérêts économiques des groupes organisés de la traite des êtres humains, les élus locaux et européens préfèrent maintenir l’arsenal juridique… Nous devons donc diffuser ce manifeste -comme toutes les revendications des TDS émanant des différents pays- si nous voulons faire progresser ce dossier dans le bon sens.</p>
        </div>
      </section>
      <section class="askforus__section">
        <h2 class="askforus__title" id="signer">Signer le manifeste</h2>
        <form class="askforus__form" method="post" action="/">
          <fieldset>
            <legend class="hidden">Formulaire de passage</legend>
            <div class="askforus__left">
              <label class="askforus__label" for="name">Nom</label>
              <input class="askforus__input" type="text" name="nom" id="name" placeholder="Ex : Dupont ">
              <label class="askforus__label" for="email">Email</label>
              <input class="askforus__input" type="email" name="email" id="email" placeholder="Ex : jean@dupont.be ">
              <label class="askforus__label" for="subject">Sujet</label>
              <input class="askforus__input" type="text" name="subject" id="subject" placeholder="Ex : J'adhère complètement!">
            </div>
            <div class="askforus__right">
              <label class="askforus__label" for="message">Message : </label>
              <textarea class="askforus__input askforus__input--textarea" name="message" id="message"></textarea>
              <input class="askforus__submit" type="submit" value="Commenter">
            </div>
          </fieldset>
        </form>
      </section>
    </div>
    <?php get_footer();?>
  </div>
</html>
