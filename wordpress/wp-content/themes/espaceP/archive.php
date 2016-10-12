

<section class="moreArticle">
  <?php $paged = intval(get_query_var('paged')); if($paged == 0) { $paged = 1; } query_posts("showposts=4&cat=-9&paged=$paged"); ?>

  <h3 aria-level="3" class="moreArticle__title">
    <?php echo the_field('more_title');?>
  </h3>
  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <article class="moreArticle__article">
    <figure class="moreArticle__link">
      <?php the_post_thumbnail($size='post-thumbnail');?>
    </figure>
    <div class="moreArticle__container">
      <?php $categorie = get_the_category();?>
      <span class="moreArticle__theme moreArticle__theme--<?php echo ($categorie[0]->name);?>">
        <?php echo ($categorie[0]->name);?>
      </span>
      <p class="moreArticle__text">
        <?php echo substr(get_the_excerpt(), 0,90).'...'; ?>
      </p>
      <a class="moreArticle__button latest__button" href="<?php the_permalink();?>" title="Découvrir plus sur cette article">
        Lire l'article
      </a>
    </div>

    <h4 aria-level="4" class="moreArticle__titleCards"><?php echo the_title();?></h4>
    <ul class="moreArticle__list">
      <li class="moreArticle__element latest__element--time">
        <?php echo the_field('article__date');?>
      </li>
      <li class="moreArticle__element latest__element--like">
        <?php echo do_shortcode('[dot_recommends]');?>
      </li>
      <li class="moreArticle__element moreArticle__element--comment">
        <?php comments_number('0', '1', '%'); ?>
      </li>
    </ul>
  </article>
<?php endwhile; endif;?>
  <div class="moreArticle__pagination">
    <?php theme_pagination();?>
  </div>
</section>
