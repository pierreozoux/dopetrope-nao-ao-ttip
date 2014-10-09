<?php

/*
 * Category template
 *
 */
 get_header();?>
</div>
</div>


<!-- Main -->
<div id="main-wrapper">
        <header class="search-result">
                <h1 >
                    <?php
                    if (is_category()) {
                        echo '<a href="'.get_evento_link().'">';
                        printf( '%s', '<span>' . single_cat_title( '', false ) . '</span>' );
                        echo '</a>';
                    }
                    if (is_tag()) {
                        printf('Tag "%s"' , '<span>' . single_tag_title( '', false ) . '</span>' );
                    }
                    if (is_author()) {
                        printf( 'Auteur: %s', '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a>' );
                    }
                    ?>
                </h1>
                <?php if ( is_category() && category_description() ) : // Show an optional category description ?>
                    <p>
                        <?php echo category_description(); ?>
                    </p>
                <?php endif; ?>
                <?php if ( is_tag() && tag_description() ) : // Show an optional category description ?>
                    <p>
                        <?php echo tag_description(); ?>
                    </p>
                <?php endif; ?>
        </header>
    <div class="container">
         <div class="row">
            <?php
            $i=0;
            while ( have_posts() ) : the_post();
            if ($i==0) {
                // First event
                ?>
                <div class="12u">
                    <article class="box post box-page">
                      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(1000, 444)); ?></a>
                      <header>
                          <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                      </header>
                      <div class="clear"></div>
                      <?php the_content('Saber mais'); ?>
                    </article>
                </div>
                <?php
             } else {
                 // more events
            ?>
            <div class="4u">
                <article class="box post small-post">
                  <a  href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(350, 190)); ?></a>
                  <header>
                      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                  </header>
                  <div class="excerpt-txt"><?php the_excerpt(); ?></div>
                  <footer>
                    <a href="<?php the_permalink() ?>" class="button alt">ler mais</a>
                  </footer>
                </article>
            </div>
            <?php
             }
             $i++;
            endwhile; ?>
         </div>
    </div><!-- end container -->
</div><!-- end main -->

<?php get_footer();
