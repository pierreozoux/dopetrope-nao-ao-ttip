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
          <?php get_sidebar(); ?>
        </section>
    </div>
    <!-- Content -->
    <div class="row 8u">
      <!– WP LOOP STARTS/ENDS –>
      <?php while (have_posts()) : the_post(); ?>
        <div class="6u archive-box">
          <section class="box flyer-box">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(367, 255)); ?></a>
            <header>
              <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            </header>
            <div class="flyer-txt"><?php the_excerpt() ?></div>
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
    </div>
  </div>
</div>
</div>
<?php get_footer();?>
