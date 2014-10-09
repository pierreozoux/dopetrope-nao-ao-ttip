<?php get_header();?>
</div>
</div>

<!-- Main -->
<div id="main-wrapper">
<div class="container">
  <div class="row">
    <div class="4u">
    
      <!-- Sidebar -->
        <section class="box">
          <!– WP LOOP STARTS/ENDS –>
          <?php
          $args = array(
                  'post_type' => 'post',
                  'order' => 'ASC',
                  'posts_per_page' => 6,
          );
          $my_query = new WP_Query($args);
          while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <article class="box post sidebar">
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(280, 255), array( 'class' => 'sidebar' )); ?></a>
                <header>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                </header>
                <div class="flyer-txt"><?php the_excerpt() ?></div>
                <footer>
                        <a href="<?php the_permalink() ?>" class="button alt">ler mais</a>
                </footer>
            </article>
          <?php endwhile; ?>
          <!– WP LOOP STARTS/ENDS –>
        </section>

    </div>
    <div class="8u skel-cell-important">
      
    <!-- Content -->
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="box post">
        <?php the_post_thumbnail(array(787, 292)); ?>
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
