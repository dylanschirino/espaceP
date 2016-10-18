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
          <h2 class="search__title">Résultat de la recherche pour : </h2>
          <p class="search__subtitle"><?php the_search_query(); ?></p>
          <ul>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li class="search__element">
            <a class="search__link" href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
          </li>
          <?php endwhile; endif;?>
        </ul>
        </section>

      </main>
      <?php get_footer();?>
</div>
</html>
