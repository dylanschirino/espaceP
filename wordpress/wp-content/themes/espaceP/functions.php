<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-partenaire', 115,100, true );

define('WPCF7_AUTOP', false);
/*
*  Register nav menus
*/
register_nav_menu( 'menu__list', __('Menu principal, affiché dans le header.','b') );

function b_get_menu_id( $location )
{
      $a = get_nav_menu_locations();
      if (isset($a[$location])) return $a[$location];
      return false;
}

function b_get_menu_items( $location )
{
      $navItems = [];
      foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
            // Si vous avoir un contrôle sur les liens affichés, c'est ici. (Par exemple: mettre $item->isCurrent à true|false)
            $item = new stdClass();
            $item->url = $obj->url;
            $item->label = $obj->title;
            $item->icon = $obj->classes[0];
            $item->id = $obj->object_id;
            array_push($navItems, $item);
      }
      return $navItems;
}


add_filter('nav_menu_css_class' , 'add_custom_class' , 10 , 2);

function add_custom_class ($classes, $navItem) {
    if (in_array('menu__list', $classes) ){
        $classes[] = '.menu__link--active ';
    }
    return $classes;
}


function get_the_link($string, $replace = '%s')
{
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}



/*
***Commentaire changement
*/
      $comment_args = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
          'author' =>
          '<div class="askforus__left"><label for="name" class="askforus__label">' . __( 'Nom' ) . '</label> '.
          '<input id="name" class="askforus__input" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ' />',
          'email'  =>
          '<label for="internet" class="askforus__label">' . __( 'Email' ) . '</label> ' .
          '<input id="internet" class="askforus__input" name="internet" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . ' />',
          'url'=>
          '<label for="url" class="askforus__label">' . __( 'Sujet' ) . '</label> '.
          '<input id="url" class="askforus__input" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . ' /></div>',
          ) ),
          'comment_field' =>'<div class="askforus__right"><label for="message" class="askforus__label">' . __( 'Message' ) . '</label>' .
           '<textarea id="message" class="askforus__input askforus__input--textarea" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',
           'class_submit'=>'askforus__submit',
           'label_submit'=>'Je signe !'
  );



  function share_button($content) {
       global $post;

        $share_URL = get_permalink();
        $share_title = str_replace( ' ', '%20', get_the_title());
        $share_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        $share_excerpt = strip_tags(get_the_content());

        $twitterURL = 'https://twitter.com/intent/tweet?text='.$share_title.'&amp;url='.$share_URL.'&amp;via=showyourglitters';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?url='.$share_URL;
        $googleURL = 'https://plus.google.com/share?url='.$share_URL;
        $pinterestURL='https://pinterest.com/pin/create/button/?url='.$share_URL.'&media='.$share_thumbnail[0];
        $linkedinURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$share_URL.'/&title='.$share_title.'&summary=&source=';

        $content .= '<!-- Facebook Share Button -->
        <ul class="etiquette__list">
        <li class="etiquette__element etiquette__element--facebook">
        <a class="etiquette__link etiquette__link--facebook" href="'.$facebookURL.'" title="Partager sur facebook"><span class="hidden">Facebook</span></a>
        </li>
        <!-- Twitter Share Button -->
        <li class="etiquette__element etiquette__element--twitter">
        <a class="etiquette__link etiquette__link--twitter" href="'.$twitterURL.'" title="Partager sur twitter"><span class="hidden">Twitter</span></a>
        </li>
        </ul>';
    return $content;
}


register_post_type( 'antenne', [
            'label' => __('Antenne','p'),
            'lapels' => [
                        'singular_name' => __('Antenne de Contact','p'),
                        'add_new' => __('Ajouter une antenne de contact','p')
                  ],
            'description' => __('La liste de toute les antennes de contact affiché sur le site.','p'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-location-alt',
            'supports' => ['title','thumbnail'],
            'has_archive' => true
      ] );

function gn_tinymce_filtre($arr){
    $arr['block_formats'] = 'Paragraph=p;Address=address;Citation=blockquote;Titre Paragraphe=h4;Sous-titre=h5;Chiffre=pre;';
    return $arr;
  }
add_filter('tiny_mce_before_init', 'gn_tinymce_filtre');
