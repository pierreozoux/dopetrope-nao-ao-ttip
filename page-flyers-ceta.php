<?php
/**
 * nao-ao-ttip theme
 * Template Name: flyers CETA template
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
                    'post_parent' => get_flyer_CETA_parent_ID(),
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
        <!--<div data-social-share-privacy='true' lang="pt"></div>-->
        <header>
          <h2><?php the_title(); ?></h2>
        <?php 
        $facebookLink = "https://www.facebook.com/sharer/sharer.php?u=".get_the_permalink();
        $twitterLink = "https://twitter.com/home?status=".get_the_permalink();        
        ?>                
                <ul class="social-network sharePost">
                    <li>
                        <a class="twitterButton" target="_blank" href="<?php echo $twitterLink;?>"></a>
                    </li> 

                    <li>
                        <a class="facebookButton" target="_blank" href="<?php echo $facebookLink;?>"></a>
                    </li>                                              
                </ul>           
        </header>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
    </div>
  </div>
</div>
</div>
<?php get_footer();?>
