<?php
/*
Template Name: Contact
*/
if(is_page()){
  query_posts([
    'post_type' => 'antenne'
  ]);
}
get_header();
;?>
      <div class="site-content">
        <div class="site-container"></div>
        <main>
          <div class="header__mainContainer">
            <section class="mainContact">
              <h2 class="mainContact__title">Contact</h2>
              <p class="mainContact__subtitle">Nos bureaux sont disponible dans plusieurs ville de Belgique Vous pouvez facilement trouver un bureau près de chez vous pour nous contacter.</p>
            </section>
            <section class="country">
              <h2 class="hidden">Ville disponible</h2>
              <ul class="country__list">
                <?php $args = array( 'post_type' => 'antenne', 'posts_per_page' => 6 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();?>
                <li class="country__element"><a class="country__link country__link--<?php the_title();?>" href="<?php echo the_permalink();?>" title="Aller vers la ville de<?php echo the_title();?>"><?php the_title();?></a></li>
              <?php endwhile;?>
              </ul>
            </section>
          </div>
        </main>
<?php get_footer();?>
  </div>
</html>
