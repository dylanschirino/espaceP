<?php
/*
Template Name: Search
*/
get_header();
;?>

    <div class="site-content">
      <div class="site-container"></div>
      <main>

        <section class="search">
          <h2 class="search__title">PAGE NON TROUVÉE</h2>
          <p class="search__404">Retourner à la page d'accueil en cliquant sur le lien</p>
            <a class="search__link2" href="<?php echo the_permalink('5');?>">Accueil</a>
        </section>

      </main>
      <?php get_footer();?>
</div>
</html>
