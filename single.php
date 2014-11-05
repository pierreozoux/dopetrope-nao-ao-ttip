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
    <div class="8u skel-cell-important">
      
    <!-- Content -->
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="box post">
        <?php the_post_thumbnail(array(787, 292)); ?>
       <!-- <div data-social-share-privacy='true' lang="pt"></div>-->
        <?php 
        $facebookLink = "https://www.facebook.com/sharer/sharer.php?u=".get_the_permalink();
        $twitterLink = "https://twitter.com/home?status=".get_the_permalink();        
        ?>        
        <header>
          <h2><?php the_title(); ?></h2>
          <ul class="social-network sharePost">
              <li>
                  <a class="twitterButton" target="_blank" href="<?php echo $twitterLink;?>"></a>
              </li> 

              <li>
                  <a class="facebookButton" target="_blank" href="<?php echo $facebookLink;?>"></a>
              </li>                                              
          </ul>          
        </header>
       <p class="post-date"><?php the_date('d-m-Y');?></p>
       <div class="post-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
    </div>
  </div>
</div>
</div>
<?php get_footer();?>
