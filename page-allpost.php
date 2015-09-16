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
      <h1 class="list-post-title"><?php the_post();the_title(); ?></h1>      
      <div class="clear"></div>
          <ul class="list-article">  
          <?php
          $args = array(
                  'post_type' => 'post',
                  'order' => 'DESC',
          		    'nopaging' => true, 
          		    'posts_per_page'=>-1
          );
          $my_query = new WP_Query($args);
          while ($my_query->have_posts()) : $my_query->the_post(); ?>    
            <li>
              <?php the_time('d-m-Y');?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
          <?php endwhile; ?>
          </ul>
      
      <!-- Pagination -->
      <?php ttip_content_nav('nav-below'); ?>
      
    </div>
    <!-- Content -->
           
    
    </div>
  </div>
</div>
</div>
<?php get_footer();?>
