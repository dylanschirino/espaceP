<!DOCTYPE html>
<html lang="fr">
  <head><!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
<![endif]-->
    <meta charset="utf-8">
    <meta name="description" content="<?php echo the_field('meta-description');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo bloginfo();?> - <?php echo the_title();?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/main.css';?>" type="text/css">
  </head>

  <div class="site-container">
    <div class="site-pusher">
      <header class="header">
        <div class="header__content">

          <h1 class="hidden"><?php echo bloginfo();?> - <?php echo the_title();?></h1>
          <nav class="header__menu"><a class="header__burger" id="header__burger" href="#" title="Voir le menu"><span class="hidden">Menu</span></a>
            <h2 class="header__logo"><a class="header__logolink" href="<?php the_permalink('5');?>"><img class="header__img" src="<?php echo get_template_directory_uri().'/images/logo.jpg';?>" width="76" height="57"><?php echo bloginfo();?><span class="hidden">- Navigation</span></a></h2>

            <div class="menu__content">
              <ul class="menu__list">
                
                <?php global $post; $thePostID = $post->ID;
                foreach (b_get_menu_items('menu__list') as $navItem): ?>
                  <li class="menu__element">
              <a href="<?php echo $navItem->url;?>" class="menu__link <?php echo $navItem->icon;?> menu__link--<?php echo $thePostID == $navItem->id ? "active" : "" ;?>" title="Vers la page <?php echo $navItem->label;?>">
                  <?php echo $navItem->label;?>
                </a>
              </li>
      <?php endforeach; ?>

              </ul>
            </div>

             <?php get_search_form(); ?>

          </nav>
        </div>
      </header>
