<?php
  /* Menu */
  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  add_theme_support( 'post-thumbnails' );

  /* Add excerpt to page edit */
  add_action( 'init', 'my_add_excerpts_to_pages' );
  function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
  }

  /*
  *
  * Return the manifesto URL
  */
  function get_manifesto_link() {
    return get_permalink(20);
  }

  /*
  *
  * Return the first flyer URL
  */
  function get_first_flyer_link() {
    // TODO search for first flyer
    return get_permalink(132);
  }

  /*
  *
  * Return the detalhe URL
  */
  function get_detalhe_link() {
    return get_permalink(123);
  }

  /*
  *
  * Return the evento URL
  */
  function get_evento_link() {
    return get_category_link(get_eventos_cat_ID());
  }
  /*
  *
  * Return the news URL
  */
  function get_news_link() {
    return get_category_link(get_news_cat_ID());
  }
  /*
  *
  * Return the detalhe parent ID
  */
  function get_detalhe_parent_ID() {
    return 123;
  }
  /*
  *
  * Return the flyer parent ID
  */
  function get_flyer_parent_ID() {
    return 130;
  }
  /*
  *
  * Return the eventos cat ID
  */
  function get_eventos_cat_ID() {
    // return 3;
    $idObj = get_category_by_slug('eventos'); 
    return $idObj->term_id;      
  }
  /*
  *
  * Return the news cat ID
  */
  function get_news_cat_ID() {
    // return 4;
    $idObj = get_category_by_slug('noticias'); 
    return $idObj->term_id;    
  }

  // ??
  function custom_excerpt_length( $length ) {
    return 20;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
  
  function ttip_widgets_init() {
    if ( function_exists('register_sidebar') ) {
    register_sidebar( array(
      'name' => __( 'Main Sidebar', 'ttip' ),
      'id' => 'sidebar-1',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    ) );
    }
  }
  add_action( 'widgets_init', 'ttip_widgets_init' );
  
  /**
 * Displays navigation to next/previous pages when applicable.
 */
  function ttip_content_nav( $html_id ) {
    global $wp_query;
    $html_id = esc_attr( $html_id );
    if ( $wp_query->max_num_pages > 1 ) :
      $big = 999999999; // need an unlikely integer
      echo '<nav id="'.$html_id.'" class="navigation" role="navigation">';
      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'prev_text'    => ' ',
        'next_text'    => ' ',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
      ) );
      echo '</nav>';
    endif;
  }
?>
