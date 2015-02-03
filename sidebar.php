<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage oktopod
 * @since oktopod 1.0
 */
?>

  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <section class="box"> 
      <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </div><!-- #secondary -->
    </section>
  <?php endif; ?>

        <section class="box">
          <!– WP LOOP STARTS/ENDS –>
          <?php
          $args = array(
                  'post_type' => 'post',
                  'order' => 'DESC',
                  'posts_per_page' => 6,
          );
          $my_query = new WP_Query($args);
          while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <article class="box post sidebar">
                <header>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <?php the_date('d-m-Y');?>
                </header>
            </article>
          <?php endwhile; ?>
          <!– WP LOOP STARTS/ENDS –>
        </section> 
