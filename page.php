<?php get_header();?>
        </div>
      </div>
    
    <!-- Main -->
      <div id="main-wrapper">
          
        <div class="container">
                      
          <!-- Content -->
          <?php while ( have_posts() ) : the_post(); ?>
            <article class="box post box-page">
              <?php the_post_thumbnail(array(1200, 444)); ?>
              <div data-social-share-privacy='true' lang="pt"></div>
              <header>
                <h2><?php the_title(); ?></h2>
              </header>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>

        </div>
      </div>
<?php get_footer();?>
