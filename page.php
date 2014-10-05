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
              <header>
                <h2><?php the_title(); ?></h2>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_sharing_toolbox"></div>
              </header>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>

        </div>
      </div>
<?php get_footer();?>
