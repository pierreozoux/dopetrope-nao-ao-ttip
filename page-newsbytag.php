<?php 
/**
 * nao-ao-ttip theme
 * Template Name: page with news by TAG
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
      <?php get_sidebar(); ?>
    </div>
    
    <!-- Content -->
    <div class="8u skel-cell-important">
          <?php
          $titlePage="";
          $tag = "";
          while ( have_posts() ) : the_post(); 
          	$titlePage = get_the_title();
          	$tag = get_post_meta(get_the_ID(), "TAG", true);
          	?>
			      <article class="box post">
			        <?php the_post_thumbnail(array(787, 292)); ?>
			       <!-- <div data-social-share-privacy='true' lang="pt"></div>-->
			        <?php 
			        $facebookLink = "https://www.facebook.com/sharer/sharer.php?u=".get_the_permalink();
			        $twitterLink = "https://twitter.com/home?status=".get_the_permalink();        
			        ?>        
			        <header>
			          <h2><?php the_title();  ?></h2>
			          <ul class="social-network sharePost">
			              <li>
			                  <a class="twitterButton" target="_blank" href="<?php echo $twitterLink;?>"></a>
			              </li> 
			
			              <li>
			                  <a class="facebookButton" target="_blank" href="<?php echo $facebookLink;?>"></a>
			              </li>                                              
			          </ul>          
			        </header>
			       <p class="post-date"><?php the_time('d-m-Y');?></p>
			       <div class="post-content">
			          <?php the_content(); ?>
			        </div>
			      </article>
          <?php endwhile; ?>
      </div>      

      <div class="8u skel-cell-important" style="margin-top: 30px;">
	        <article class="box post">
	          <header>
		          <h2 class="ss-titre">"<?php echo $titlePage; ?>" - Ultimos artigos</h2>
	          </header>
        </article>
      </div>
      <div class="row 8u" style="margin-top: 30px;">
	      <?php
	        $args = array(
	                    'post_type' => 'post',
	                    'tag' => $tag,
	                    'order' => 'DESC',
	        );
	        $my_query = new WP_Query($args);
	        while ($my_query->have_posts()) : $my_query->the_post(); ?>            
	        <div class="6u archive-box">
	          <section class="box flyer-box">
	            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(367, 255)); ?></a>
	            <header>
	              <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
	            </header>
	            <p class="post-date"><?php the_time('d-m-Y');?></p>
	            <div class="flyer-txt">
	              <?php the_excerpt();?>
	            </div>
	            <footer>
	              <a href="<?php the_permalink() ?>" class="button alt">ler mais</a>
	            </footer>
	          </section>
	        </div>
	      <?php endwhile; ?>
	      
	      <!-- Pagination -->
	      <?php ttip_content_nav('nav-below'); ?>
	    </div>
      
    </div>
    <!-- Content -->
    
    <!-- All other posts -->
    <div class="12u skel-cell-important box2">
      <div class="box2-article">
        <h3>Últimos artigos</h3>
        <ul class="list-article">
          <?php
          $args = array(
                  'post_type' => 'post',
                  'order' => 'DESC'
          );
          $my_query = new WP_Query($args);
          while ($my_query->have_posts()) : $my_query->the_post(); ?>    
            <li>
              <?php the_time('d-m-Y');?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>        
    
    </div>
  </div>
</div>
</div>
<?php get_footer();?>