    <!-- Footer -->
      <div id="footer-wrapper">
        <section id="footer" class="container">
          <div class="row">
            <div class="8u footer-left">
              <section>
                <header>
                  <h2 id="eventos">Eventos</h2>
                </header>
                <ul class="dates">
                  <!– WP LOOP STARTS/ENDS –>
                  
                  <?php $my_query = new WP_Query('cat='.get_eventos_cat_ID().'&showposts=5'); ?>
                  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <li>
                    <span class="date"><?php the_field('event_date') ?></span>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt() ?></p>
                  </li>
                  <?php endwhile; ?>
                  <!– WP LOOP STARTS/ENDS –>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section>
                <header>
                  <h2 id="ajuda">Ajuda a informar</h2>
                </header>
                <a href="<?php bloginfo('template_directory'); ?>/flyers.zip" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/telechflyer.jpg" alt="" /></a>
                <p>
                  
                </p>
                <footer>
                  <a href="<?php bloginfo('template_directory'); ?>/flyers.zip" class="button">Descarga os flyers</a>
                </footer>
              </section>
            </div>
          </div>
          <div class="row">
            <div class="4u footer-left">
              <section>
                <header>
                  <h2>não estamos sozinhos!</h2>
                </header>
                <ul class="divided">
                  <li><a target="_blank" href="http://stop-ttip.org/">http://stop-ttip.org/</a></li>
                  <li><a target="_blank" href="http://www.d19-20.be/en/ttip/">Aliança D19-20</a></li>
                  <li><a target="_blank" href="http://www.altersummit.eu/?lang=en">Alter Summit</a></li>
                  <li><a target="_blank" href="http://www.quercus.pt/parceriatransatlantica-o-que-e">Quercus</a></li>
                  <li><a target="_blank" href="http://parceriatransatlantica.wordpress.com/sites/www.attac-netzwerk.de/index.php?id=12920">ATTAC</a></li>
                  <li><a target="_blank" href="http://www.bilaterals.org/?-TTIP-&lang=en">Bilaterals</a></li>
                  <li><a target="_blank" href="http://corporateeurope.org/tags/ttip>">Corporate Europe Observatory
                  <li><a target="_blank" href=""></a></li>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section>
                <header>
                  <h2>e ainda mais</h2>
                </header>
                <ul class="divided">
                  <li><a target="_blank" href="http://occupylondon.org.uk/stop-ttip/>">Grupo de Trabalho TTIP_Occupy London</a></li>
                  <li><a target="_blank" href="http://gasnaturalnao.wordpress.com/>">Gasnaturalnão</a></li>
                  <li><a target="_blank" href="http://www.s2bnetwork.org/?id=112>">Seattle to Brussels Network</a></li>
                  <li><a target="_blank" href="https://www.laquadrature.net/en/TAFTA>">La Quadrature du Net (inglês)</a></li>
                  <li><a target="_blank" href="http://www.ttip2014.eu/home.html>">TTIP:Beware what lies beneath</a></li>
                  <li><a target="_blank" href="http://stoptafta.wordpress.com/>">Non au Traité Transatlantique</a></li>
                  <li><a target="_blank" href="http://www.citizen.org/tafta>">Public Citizen</a></li>
                  <li><a target="_blank" href="http://www.tni.org/category/issues-workarea/trade-investment/eu-trade-policy-ftas>">Transnational Institute</a></li>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section>
                <header>
                  <h2 id="contact-l">Contacto</h2>
                </header>
                <ul class="social">
                  <li><a class="icon fa-facebook" target="_blank" href="https://www.facebook.com/groups/1496844397239971/"><span class="label">Facebook</span></a></li>
                  <li><a class="icon fa-twitter" target="_blank" href="https://twitter.com/NaoAoTTIP"><span class="label">Twitter</span></a></li>
                </ul>
                <ul class="contact">
                  <li>
                    <h3>Email</h3>
                    <p><a href="mailto:info@nao-ao-ttip.pt">info@nao-ao-ttip.pt</a></p>
                  </li>
                </ul>
              </section>
            </div>
          </div>
          <div class="row">
            <div class="12u">
            
              <!-- Copyright -->
                <div id="copyright">
                  <ul class="links">
                    <li>&copy; <?php echo get_bloginfo ( 'description' );?> - todos os direitos reservados.</li>
                  </ul>
                </div>

            </div>
          </div>
        </section>
      </div>
<script>
$('.date').each(function(index, element) {
    $(element).html($(element).html().replace(/(\d\d)/, "<strong>$1</strong>"));
});
</script>
  </body>
</html>
