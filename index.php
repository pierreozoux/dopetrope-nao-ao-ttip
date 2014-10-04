<?php get_header();?>
					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Não ao Tratado Transatlântico</h2>
								<p>Plataforma portuguesa para análise crítica ao TTIP</p>
							</header>
						</section>
					<!-- Intro -->
						<section id="intro" class="container">
							<div class="row">
								<div class="4u">
									<section class="first">
										<i class="icon featured fa-users"></i>
										<header>
											<h2>Manifesto</h2>
										</header>
										<p>Declaração conjunta da sociedade civil Portuguesa, em ação
> contra a ameaça do TTIP</p>
									</section>
								</div>
								<div class="4u">
									<section class="middle">
										<i class="icon featured alt fa-file-text"></i>
										<header>
											<h2>O TTIP detalhado</h2>
										</header>
										<p>informações e análise detalhada ao Tradado transatlântico</p>
									</section>
								</div>
								<div class="4u">
									<section class="last">
										<i class="icon featured alt2 fa-bullhorn"></i>
										<header>
											<h2>Manifestação</h2>
										</header>
										<p>dia 11 de outubro, encontro no Rossio</p>
									</section>
								</div>
							</div>
							<footer>
								<ul class="actions">
									<li><a href="#" class="button big">Get Started</a></li>
									<li><a href="#" class="button alt big">Learn More</a></li>
								</ul>
							</footer>
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
							<!-- Portfolio -->
								<section>
									<header class="major">
										<h2>Os perigos do Tratado Transatlântico (TTIP)</h2>
									</header>
									<div class="row">
										<!– WP LOOP STARTS/ENDS –>
										<?php $my_query = new WP_Query('category_name=flyer&showposts=3&offset=0'); ?>
										<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<div class="4u">
												<section class="box">
													<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(367, 255)); ?></a>
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<p><?php the_excerpt() ?></p>
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
										<?php $my_query = new WP_Query('category_name=flyer&showposts=3&offset=3'); ?>
										<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
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
					<div class="row">
						<div class="12u">
							<!-- Blog -->
								<section>
									<header class="major">
										<h2>Noticias</h2>
									</header>
									<div class="row">
										<!– WP LOOP STARTS/ENDS –>
										<?php $my_query = new WP_Query('category_name=news&showposts=2'); ?>
										<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<div class="6u">
												<section class="box">
													<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(580, 272)); ?></a>
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<p><?php the_excerpt() ?></p>
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
				</div>
			</div>
<?php get_footer();?>
