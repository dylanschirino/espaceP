<?php
/*
Template Name: HomePage
*/
get_header();
;?>

    <div class="site-content">
      <div class="site-container"></div>
      <main>

        <section class="mainimage">
          <h2 class="mainimage__title"><?php echo bloginfo();?></h2>
          <p class="mainimage__subtitle"><?php echo bloginfo('description');?></p><a class="mainimage__link" href="#menu" title="Vers le menu principal de choix des sections"><span>Vers le menu principal</span></a>
        </section>

        <section class="news">

          <?php
          if(is_page()){
            query_posts([
              'posts_per_page' =>1,
              'orderby' => 'date',
              'order' => 'ASC',
              'post_type' => 'post'
            ]);
          }
          ?>

          <div class="news__content">
            <h2 class="news__title">Actualité</h2>
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <time class="news__time"><?php echo the_field('time');?></time>

            <?php if( have_rows('actualite_contenu') ):
            while( have_rows('actualite_contenu') ) : the_row();?>
            <div class="news__text">
              <?php echo substr(get_sub_field('texte'), 0,184).'...'; ?>
            </div>
          <?php endwhile; endif;?>
            <a class="news__button" href="<?php the_permalink();?>">Vers l'article</a>
            <?php endwhile; endif;?>
          </div>
        </section>

        <section class="navigation" id="menu">
          <h2 class="navigation__title hidden">Choississez votre profil</h2>
          <div class="navigation__container">
            <div class="navigation__container--left">

              <article class="profil profil--tds">
                <h3 class="profil__title">Travailleur du sexe<a class="profil__english" href="#english">I'm a sex Worker</a></h3>
                <div class="profil__box">
                  <ul class="profil__list">
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="<?php echo the_permalink('21').'#askforus'?>">Demandez le passage d'une équipe</a></li>
                    <?php global $wpdb;

                    $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 21 AND meta_key LIKE "section_de_contenu_%_titre"');?>
                    <?php foreach($rows as $row): ;?>
                    <li class="profil__element profil__element--tds"><a class="profil__link" href="<?php echo the_permalink('21').'#'.strtolower(str_replace(" ","",$row->meta_value));?>"><?php echo $row->meta_value;?></a></li>
                  <?php endforeach;?>

                  </ul>
                </div>
              </article>

              <article class="profil profil--etudiants">
                <h3 class="profil__title">Étudiants</h3>
                <p class="profil__text">Pour toute question concernant un stage, une intervention scolaire ou si vous avez simplement des interrogations sur nos actions, consultez cette section</p>
                <div class="profil__box profil__box--etudiants">
                  <ul class="profil__list">
                    <?php global $wpdb;

                    $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 169 AND meta_key LIKE "section_de_contenu_%_titre"');?>
                    <?php foreach($rows as $row): ;?>
                    <li class="profil__element profil__element--etudiants"><a class="profil__link" href="<?php echo the_permalink('169').'#'.strtolower(str_replace(" ","",$row->meta_value));?>"><?php echo $row->meta_value;?></a></li>
                  <?php endforeach;?>
                  </ul>
                </div>
              </article>
            </div>
            <div class="navigation__container--right">
              <article class="profil profil--sympathisant">
                <h3 class="profil__title">Sympathisant</h3>
                <p class="profil__text">Vous êtes un sympathisant ou vous avez entendu parlé de nous par hasard et vous voulez en savoir plus sur notre association ou adhérez à notre manifeste, vous êtes au bon endroits</p>
                <div class="profil__box profil__box--sympathisant">
                  <ul class="profil__list">
                    <li class="profil__element profil__element--sympathisant"><a class="profil__link" href="sympathisant.html#pointfort">Points fort de notre manifeste</a></li>
                    <li class="profil__element profil__element--sympathisant"><a class="profil__link" href="sympathisant.html">Le point sur notre législation et les autres</a></li>
                  </ul>
                </div>
              </article>
              <article class="profil profil--clients">
                <h3 class="profil__title">Clients</h3>
                <p class="profil__text">Vous êtes un client et vous avez des droits mais vous avez aussi des obligations et des précautions à prendre de votre côtés pour que tout se passe dans le respect de chaqu’un. Vous trouverez ici un petit guide du client pour en apprendre d’avantage.</p>
                <div class="profil__box profil__box--clients"><a class="profil__button" href="clients.html">Guide du clients</a></div>
              </article>
            </div>
          </div>
        </section>
      </main>
      <?php get_footer();?>
</div>
</html>
