<?php
/*
Template Name: Sympathisant
*/
get_header();
;?>
<div class="site-content">
  <div class="site-container"></div>
  <main>
    <div class="header__mainContainer">
      <section class="choix choix--sympathisant">
        <h2 class="choix__title">Sympathisant</h2>
        <?php global $wpdb;
        $accroches = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 179 AND meta_key LIKE "accroche"');?>
        <?php foreach($accroches as $accroche): ;?>
        <div class="choix__subtitle"><?php echo $accroche->meta_value;?>
        </div>
          <?php endforeach;?>
      </section>
      <div class="choix__image choix__image--sympathisant">
        <p class="hidden">Image représentant un homme qui est dans les bras d'une Travailleuse du sexe, plein de tendresse dans cette image</p>
      </div>
    </div>
    <div class="actuality__container">
      <aside class="aside" id="sticky">
        <ul class="aside__list">
          <?php
          $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 179 AND meta_key LIKE "section_de_contenu_%_titre"');?>

            <?php foreach($rows as $row): ;?>

            <li class="aside__element"><a class="aside__link" href="<?php echo '#'.strtolower(str_replace(" ","",$row->meta_value));?>" title="Aller vers les points fort"><?php echo $row->meta_value;?></a></li>
          <?php endforeach;?>
        </ul>
      </aside>
      <section class="rapportContent">
        <h2 class="hidden">Texte sur les sympathisant</h2>
        <?php $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 179 AND meta_key LIKE "section_de_contenu_%_titre"');?>

        <?php $texte = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 179 AND meta_key LIKE "section_de_contenu_%_texte"');?>

          <?php foreach($rows as $row): ;?>
        <article class="actuality__article" id="<?php echo strtolower(str_replace(" ","",$row->meta_value));?>">
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
      </section>
    </div>
  </main>
  <?php get_footer();?>
  </div>
  </html>
