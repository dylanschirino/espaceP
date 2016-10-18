<?php
/*
Template Name: Sex Worker
*/
get_header();
;?>
      <div class="site-content">
        <div class="site-container"></div>
        <main>
          <div class="header__mainContainer">
            <section class="choix choix--tds">
              <h2 class="choix__title choix__title--tds"><?php echo the_title();?></h2>
              <div class="choix__subtitle"><?php echo get_field('accroche');?></div>
            </section>
            <div class="choix__image choix__image--tds">
              <p class="hidden">Image représentant les pieds d'une femme qui porte des chaussures rouge, le sol est représenter par du carrelage</p>
            </div>
          </div>
          <div class="actuality__container" id="container">


            <aside class="aside" id="sticky">
              <ul class="aside__list">
              <?php global $wpdb;
              $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 21 OR post_id= 236 AND meta_key LIKE "section_de_contenu_%_titre"');?>

                <?php foreach($rows as $row): ;?>

                <li class="aside__element"><a class="aside__link" href="<?php echo '#'.str_replace(" ","",$row->meta_value);?>" title="Aller vers les points fort"><?php echo $row->meta_value;?></a></li>
              <?php endforeach;?>
                <li class="aside__element"><a class="aside__link aside__link--button" href="#askforus" title="Aller vers les points fort">Passage de l'équipe</a></li>
              </ul>
            </aside>


            <section class="rapportContent">
              <h2 class="hidden">Travailleur du sexe contenu</h2>

              <?php $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 21 OR post_id = 236 AND meta_key LIKE "section_de_contenu_%_titre"');?>

              <?php $texte = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 21 OR post_id= 236 AND meta_key LIKE "section_de_contenu_%_texte"');?>

                <?php foreach($rows as $row): ;?>
              <article class="actuality__article" id="<?php echo str_replace(" ","",$row->meta_value);?>">
                <h3 class="article__title"><?php echo $row->meta_value;?></h3>

                <?php foreach($texte as $text): ;?>
                  <?php $rowkey=substr($row->meta_key,19,-6);?>
                  <?php $textkey= substr($text->meta_key,19,-6);?>
                  <?php if($rowkey==$textkey):;?>
                <div class="article__text article__text--rapport">
                  <?php echo $text->meta_value;?>
                </div>
                <?php endif;?>
                <?php endforeach;?>

              </article>

            <?php endforeach;?>

              <div class="file">
                <?php $file= get_field('brochure');
                if( $file ): ?>

	              <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>

                <?php endif; ?>
              </div>
            </section>
          </div>


          <div class="askforus">
            <section class="askforus__section" id="askforus">
              <h2 class="askforus__title">Demander le passage de l'équipe</h2>
              <div class="askforus__form">
              <?php echo do_shortcode('[contact-form-7 id="212" title="Passage"]');?>
            </div>
            </section>
          </div>
        </main>
        <?php get_footer();?>
  </div>
</html>
