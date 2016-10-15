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
                <h3 class="profil__title">Travailleur du sexe<a class="profil__english" href="<?php echo the_permalink('232');?>">I'm a sex Worker</a></h3>
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
                <?php global $wpdb;
                $accroches = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 178 AND meta_key LIKE "accroche"');?>
                <?php foreach($accroches as $accroche): ;?>
                <div class="profil__text"><?php echo $accroche->meta_value;?></div>
              <?php endforeach;?>
                <div class="profil__box profil__box--etudiants">
                  <ul class="profil__list">
                    <?php
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
                <?php global $wpdb;
                $accroches = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 179 AND meta_key LIKE "accroche"');?>
                <?php foreach($accroches as $accroche): ;?>
                <div class="profil__text"><?php echo $accroche->meta_value;?></div>
              <?php endforeach;?>
                <div class="profil__box profil__box--sympathisant">
                  <ul class="profil__list">
                    <?php
                    $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 179 AND meta_key LIKE "section_de_contenu_%_titre"');?>
                    <?php foreach($rows as $row): ;?>
                    <li class="profil__element profil__element--sympathisant"><a class="profil__link" href="<?php echo the_permalink('179').'#'.strtolower(str_replace(" ","",$row->meta_value));?>"><?php echo $row->meta_value;?></a></li>
                  <?php endforeach;?>
                  </ul>
                </div>
              </article>
              <article class="profil profil--clients">
                <h3 class="profil__title">Clients</h3>
                <?php $accroches = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 183 AND meta_key LIKE "accroche"');?>
                <?php foreach($accroches as $accroche): ;?>
                <div class="profil__text"><?php echo $accroche->meta_value;?></div>
              <?php endforeach;?>
                <div class="profil__box profil__box--clients"><a class="profil__button" href="<?php echo the_permalink('183');?>">Guide du clients</a></div>
              </article>
            </div>
          </div>
        </section>
      </main>
      <?php get_footer();?>
</div>
</html>
