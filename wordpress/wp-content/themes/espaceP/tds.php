<?php
/*
Template Name: Travailleur du sexe
*/
get_header();
;?>
      <div class="site-content">
        <div class="site-container"></div>
        <main>
          <div class="header__mainContainer">
            <section class="choix choix--tds">
              <h2 class="choix__title choix__title--tds">Travailleur du sexe</h2>
              <p class="choix__subtitle">L’intime, c’est l’ensemble de ce qui se déroule depuis le moment où le client franchit le seuil et puis en ressort. Quels en sont les rituels, les codes et les enjeux intimes que vivent les personnes prostituées dans leur quotidien professionnel?</p>
            </section>
            <div class="choix__image choix__image--tds">
              <p class="hidden">Image représentant les pieds d'une femme qui porte des chaussures rouge, le sol est représenter par du carrelage</p>
            </div>
          </div>
          <div class="actuality__container" id="container">


            <aside class="aside" id="sticky">
              <ul class="aside__list">
              <?php global $wpdb;
              $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 21 AND meta_key LIKE "section_de_contenu_%_titre"');?>

                <?php foreach($rows as $row): ;?>

                <li class="aside__element"><a class="aside__link" href="<?php echo '#'.str_replace(" ","",$row->meta_value);?>" title="Aller vers les points fort"><?php echo $row->meta_value;?></a></li>
              <?php endforeach;?>
                <li class="aside__element"><a class="aside__link aside__link--button" href="#askforus" title="Aller vers les points fort">Passage de l'équipe</a></li>
              </ul>
            </aside>


            <section class="rapportContent">
              <h2 class="hidden">Travailleur du sexe contenu</h2>

              <?php $rows = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 21 AND meta_key LIKE "section_de_contenu_%_titre"');?>

              <?php $texte = $wpdb->get_results('SELECT * FROM wp_postmeta  WHERE post_id = 21 AND meta_key LIKE "section_de_contenu_%_texte"');?>
                <?php foreach($rows as $row): ;?>
              <article class="actuality__article" id="<?php echo str_replace(" ","",$row->meta_value);?>">
                <h3 class="article__title"><?php echo $row->meta_value;?></h3>
                <?php foreach($texte as $text): ;?>
                <p class="article__text article__text--rapport">
                  <!-- <?php echo $text->meta_value;?> -->
                </p>
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
              <form class="askforus__form">
                <fieldset>
                  <legend class="hidden">Formulaire de passage</legend>
                  <div class="askforus__left">
                    <label class="askforus__label" for="name">Nom</label>
                    <input class="askforus__input" type="text" name="nom" id="name" placeholder="Ex : Dupont ">
                    <label class="askforus__label" for="firstname">Prénom</label>
                    <input class="askforus__input" type="text" name="prénom" id="firstname" placeholder="Ex : Jean ">
                    <label class="askforus__label" for="adresse">Adresse</label>
                    <input class="askforus__input" type="text" name="adresse" id="adresse" placeholder="Ex : Rue de la rue">
                    <label class="askforus__label" for="cp">Code Postal : </label>
                    <input class="askforus__input" type="number" name="cp" id="cp" placeholder="Ex : 4000 ">
                  </div>
                  <div class="askforus__right">
                    <label class="askforus__label" for="message">Message : </label>
                    <textarea class="askforus__input askforus__input--textarea" name="message" id="message"></textarea>
                    <input class="askforus__submit" type="submit" value="Demander le passage">
                  </div>
                </fieldset>
              </form>
            </section>
          </div>
        </main>
        <?php get_footer();?>
  </div>
</html>
