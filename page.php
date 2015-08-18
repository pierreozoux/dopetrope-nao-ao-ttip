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
              <div class="post-content">
                <?php the_content(); ?>
              </div>
            </article>
          <?php endwhile; ?>

        </div>
      </div>
<?php get_footer();?>
