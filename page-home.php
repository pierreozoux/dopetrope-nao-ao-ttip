<?php
/**
 * nao-ao-ttip theme
 * Template Name: home template
 *
 *
 */

 get_header();?>
					<!-- Banner -->
						<section id="banner">
              <a href="http://www.nao-ao-ttip.pt/assina-a-iniciativa-de-cidadania-europeia">
                
              </a>
							<!--<header style="color: transparent; background-color: transparent;">
								<h2 style="color: transparent;">Não ao Tratado Transatlântico</h2>
								<p style="color: transparent;">Plataforma portuguesa para análise crítica ao TTIP</p>
							</header>-->
						</section>
					<!-- Intro -->
						<section id="intro" class="container">
							<div class="row">
								<div class="4u">
									<section class="first iconSection">
										<a href="<?php echo get_manifesto_link();?>"><i id="icon1" class="icon featured fa-certificate"></i></a>
										<header>
											<h2><a href="<?php echo get_manifesto_link();?>">Manifesto</a></h2>
										</header>
										<p>Declaração conjunta da sociedade civil Portuguesa, em ação contra a ameaça do TTIP</p>
									</section>
								</div>
								<div class="4u">
									<section class="middle iconSection">
										<a href="http://www.nao-ao-ttip.pt/assina-a-iniciativa-de-cidadania-europeia/"><i id="icon2" class="icon featured alt fa-pencil"></i></a>
										<header>
											<h2><a href="http://www.nao-ao-ttip.pt/assina-a-iniciativa-de-cidadania-europeia/">Assina</a></h2>
										</header>
										<p>Iniciativa de Cidadania Europeia</p>
									</section>
								</div>
								<div class="4u">
									<section class="last iconSection">
										<a href="#"><i id="icon3" class="icon featured alt2 fa-dollar"></i></a>
										<header>
                      <h2>Precisamos de ajuda!</h2>
										</header>
										<p>
                      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="UJDA5HMY69QVA">
                      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                      </form>
                      
                    </p>
                    
									</section>
								</div>
							</div>
						</section>
				</div>
			</div>
				</div>
			</div>
		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
          
          
					<div class="row">
						<div class="12u">
							<!-- Blog / news -->
								<section>
									<header class="major">
										<h2>Noticias</h2>
									</header>
									<div class="row">
                    <?php
                      $args = array(
                        'name' => 'temos-ate-dia-1-de-outubro-para-apoiar-uma-grande-divulgacao-da-ice-contra-o-ttip-2',
                      );
                      $my_query3 = new WP_Query($args);
                    if ($my_query3->have_posts()) {
                    	$my_query3->the_post(); ?>										
                      <div class="6u">
                        <section class="box news hp">
                          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(575, 272)); ?></a>
                          <header>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                          </header>
                          <div class="excerpt-txt"><?php the_excerpt() ?></div>
                          <footer>
                            <ul class="actions">
                              <li><a href="<?php the_permalink() ?>" class="button icon fa-file-text">saber mais</a></li>
                            </ul>
                          </footer>
                        </section>
                      </div>                    
                      <?php 
                    }
                    ?>
										<?php
											$args = array(
												'cat' => get_news_cat_ID(),
												'posts_per_page' => 7,
                        'orderby' => 'date',
                        'order'   => 'DESC',
											);
											$my_query3 = new WP_Query($args);
										while ($my_query3->have_posts()) : $my_query3->the_post(); ?>
											<div class="6u">
												<section class="box news hp">
													<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(575, 272)); ?></a>
													<header>
														<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
													</header>
													<div class="excerpt-txt"><?php the_excerpt() ?></div>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink() ?>" class="button icon fa-file-text">saber mais</a></li>
														</ul>
													</footer>
												</section>
											</div>
										<?php endwhile; ?>
										<!– WP LOOP STARTS/ENDS –>
									</div>
								</section>
						</div>
					</div>
          
          
					<div class="row">
						<div class="12u">
							<!-- Flyers -->
								<section>
									<header class="major">
										<h2>Os perigos do Tratado Transatlântico (TTIP)</h2>
									</header>
									<div class="row">
										<!– WP LOOP STARTS/ENDS –>
										<?php
											$args = array(
												'post_type' => 'page',
												'post_parent' => get_flyer_parent_ID(),
												'posts_per_page' => 6,
												'orderby' => 'rand',
											);
											$my_query = new WP_Query($args);
											$i=0;
											?>
										<?php while ($my_query->have_posts()) : $my_query->the_post(); $i++?>
											<div class="4u <?php if($i==4) echo " clear "; ?>">
												<section class="box flyer-box <?php if($i>=4) echo " flyer-box2 "; ?>">
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
										<!– WP LOOP STARTS/ENDS –>
									</div>
									<div class="row">
										<!– WP LOOP STARTS/ENDS –>
										<?php $my_query2 = new WP_Query('category_name=flyer&showposts=3&offset=3'); ?>
										<?php while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
											<div class="4u">
												<section class="box">
													<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(367, 255)); ?></a>
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<p><?php the_excerpt() ?></p>
													<footer>
														<a href="<?php the_permalink() ?>" class="button alt">Find out more</a>
													</footer>
												</section>
											</div>
										<?php endwhile; ?>
										<!– WP LOOP STARTS/ENDS –>
									</div>
								</section>
						</div>
					</div>

				</div>
			</div>
<?php get_footer();?>
