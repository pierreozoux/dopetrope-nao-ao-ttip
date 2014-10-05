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
       return 3;
   }
    /*
    *
    * Return the news cat ID
    */
   function get_news_cat_ID() {
       return 4;
   }
   
   function custom_excerpt_length( $length ) {
     return 20;
   }
   add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>
