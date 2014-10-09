<?php
/**
 * nao-ao-ttip theme
 * Template Name: detalhes template
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
        <section class="box detalhe-sidebar">
            <h1>O TTIP detalhado</h1>
            <p class="intro">
                A Parceria Transatlântica para o Comércio e Investimento (PTCI), designada de Transatlantic Free Trade Agreement (TAFTA) nos EUA e ainda noutros países conhecido por US/EU Trade and Investment partnership (TTIP), é um acordo comercial bilateral entre os EUA e a UE.
            </p>
            <ul>
          <!– WP LOOP STARTS/ENDS –>
          <?php
            $args = array(
                    'post_type' => 'page',
                    'post_parent' => get_detalhe_parent_ID(),
                    'order' => 'ASC',
            );
            $my_query = new WP_Query($args);
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
          <!– WP LOOP STARTS/ENDS –>
            </ul>
        </section>
      <!-- Sidebar -->
    </div>
    <div class="8u skel-cell-important">
    <!-- Content -->
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="box post">
        <?php the_post_thumbnail(array(783, 290)); ?>
        <div data-social-share-privacy='true' lang="pt"></div>
        <header>
          <h2><?php the_title(); ?></h2>
        </header>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
    </div>
  </div>
</div>
</div>
<?php get_footer();?>
