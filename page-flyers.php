<?php
/**
 * nao-ao-ttip theme
 * Template Name: flyers template
 *
 *
 */

 get_header();?>
</div>
</div>

<!-- Main -->
<div id="main-wrapper">
<div class="container">
  <div class="row">
    <div class="4u">
      <!-- Sidebar -->
        <section class="box flyer-sidebar">
          <!– WP LOOP STARTS/ENDS –>
          <?php 
            $args = array(
                    'post_type' => 'page',
                    'post_parent' => get_flyer_parent_ID(),
                    'order' => 'ASC',
            );
            $my_query = new WP_Query($args);           
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(367, 255), array( 'class' => 'sidebar' )); ?></a>
          <?php endwhile; ?>
          <!– WP LOOP STARTS/ENDS –>
        </section>
      <!-- Sidebar -->
    </div>
    <div class="8u skel-cell-important">
    <!-- Content -->
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="box post">
        <?php the_post_thumbnail(array(783, 290)); ?>
        <header>
          <h2><?php the_title(); ?></h2>
        </header>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
    </div>
  </div>
</div>
</div>
<?php get_footer();?>
