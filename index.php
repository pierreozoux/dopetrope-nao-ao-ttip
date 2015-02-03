<?php get_header();?>
</div>
</div>

<!-- Main -->
<div id="main-wrapper">
<div class="container">
  <div class="row">
    <div class="4u">
      <!-- Sidebar -->
      <?php get_sidebar(); ?>
    </div>
    
    <!-- Content -->
    <div class="row 8u" >
      <h1 class="list-post-title">
          <?php 
          if (is_category() && single_cat_title( '', false ) == 'Noticias') {
              printf( '%s', '<span>' . single_cat_title( '', false ) . '</span>' );
          } else if (is_category() && single_cat_title( '', false ) != 'Noticias') {
              printf( 'Categoria "%s"', '<span>' . single_cat_title( '', false ) . '</span>' );
          } else if (is_tag()) {
              printf( 'Tag "%s"', '<span>' . single_tag_title( '', false ) . '</span>' ); 
          } else if (is_author()) {
              printf( 'Autor: %s', '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a>' ); 
          }  else if (is_search()) {
              printf( 'Resultado da pesquisa "%s"', '<span>' . get_search_query() . '</span>' );
          } 
          ?>
      </h1>      
      <!– WP LOOP STARTS/ENDS –>
      <?php
        if(is_search() && !have_posts()) { ?>
            <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                            <h1 class="entry-title">Não há resultados</h1>
                    </header>

                    <div class="entry-content">
                            <p>Desculpe, mas nada combina com seus critérios de pesquisa. Por favor, tente novamente com palavras-chave diferentes</p>
                    </div>
            </article><!-- #post-0 -->      
            <?php
        }
      ?>
      <div class="clear"></div>
            
      <?php while (have_posts()) : the_post(); ?>
        <div class="6u archive-box">
          <section class="box flyer-box">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(367, 255)); ?></a>
            <header>
              <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            </header>
            <p class="post-date"><?php the_date('d-m-Y');?></p>
            <div class="flyer-txt">
              <?php the_excerpt();?>
            </div>
            <footer>
              <a href="<?php the_permalink() ?>" class="button alt">ler mais</a>
            </footer>
          </section>
        </div>
      <?php endwhile; ?>
      
      <!-- Pagination -->
      <?php ttip_content_nav('nav-below'); ?>
      
      <!– WP LOOP STARTS/ENDS –>
    </div>
    <!-- Content -->
    
    <!-- All other posts -->
    <div class="12u skel-cell-important box2">
      <div class="box2-article">
        <h3>Últimos artigos</h3>
        <ul class="list-article">
          <?php
          $args = array(
                  'post_type' => 'post',
                  'order' => 'DESC'
          );
          $my_query = new WP_Query($args);
          while ($my_query->have_posts()) : $my_query->the_post(); ?>    
            <li>
              <?php the_date('d-m-Y');?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>        
    
    </div>
  </div>
</div>
</div>
<?php get_footer();?>
