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
                  <!--  -->
                  <?php 
                  $args = array(
                  	'meta_key'			=> 'event_date',
                  	'orderby'			=> 'meta_value_num',
                  	/*'meta_type'   => 'DATE',*/
                  	'order'				=> 'DESC',  		
                    'cat' => get_eventos_cat_ID(),
                    'posts_per_page' => 3
                  );                  
                  $my_query = new WP_Query($args); ?>
                  
                  
                  <?php while ($my_query->have_posts()) : $my_query->the_post(); 
                    $eventDate = get_post_meta ( get_the_ID(), 'event_date', true );
                    $eventTime = strtotime($eventDate);
                    $eventNewformat = date('M d',$eventTime);
                    ?>
                  <li>
                    <span class="date"><?php echo $eventNewformat;  ?></span>
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
                  <h2 id="ajuda">Newsletter</h2>
                </header>              
              <!--  Newsletter form -->
				<script type="text/javascript">
				//<![CDATA[
				if (typeof newsletter_check !== "function") {
				window.newsletter_check = function (f) {
				    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
				    if (!re.test(f.elements["ne"].value)) {
				        alert("O email não está correcto");
				        return false;
				    }
				    for (var i=1; i<20; i++) {
				    if (f.elements["np" + i] && f.elements["np" + i].value == "") {
				        alert("");
				        return false;
				    }
				    }
				    if (f.elements["ny"] && !f.elements["ny"].checked) {
				        alert("Tem de aceitar o estatuto de privacidade");
				        return false;
				    }
				    return true;
				}
				}
				//]]>
				</script>
				
				<div class="newsletter newsletter-subscription">
				<form method="post" action="https://www.nao-ao-ttip.pt/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
				
				<table cellspacing="0" cellpadding="3" border="0">
				
				<!-- email -->
				<tr>
				  <td align="left"><input class="newsletter-email" type="email" name="ne" size="30" required><br></td>
				</tr>
          <tr>
            <td>
              <div class="tnp-field tnp-field-privacy"><label><input type="checkbox" name="ny" required class="tnp-privacy"> <a target="_blank" href=" http://www.nao-ao-ttip.pt/termos-e-condicoes-gerais/">Ao subscrever aceito os termos e condições gerais (RGPD compliant)</a></label></div>
            </td>
          </tr>
				
				<tr>
				  <td colspan="2" class="newsletter-td-submit">
				    <input class="newsletter-submit" type="submit" value="Subscreve"/>
				  </td>
				</tr>
				
				</table>
				</form>
				</div>              
              <br>
                <header>
                  <h2 id="ajuda">Ajuda a informar</h2>
                </header>
                <a href="<?php bloginfo('template_directory'); ?>/flyers.zip" class="image featured"><img src="<?php bloginfo('template_directory'); ?>/images/telechflyer.jpg" alt="" /></a>
                <p>
                  
                </p>
                <footer>
                  <a href="<?php bloginfo('template_directory'); ?>/flyers.zip" class="button">Descarrega os flyers</a>
                </footer>
                <br>
              </section>
            </div>
          </div>
          <div class="row">
            <div class="4u footer-left">
              <section>
                <header>
                  <h2>quem apoia a plataforma!</h2>
                </header>
                <ul class="divided">
                  <li><a target="_blank" href="http://parceriatransatlantica.wordpress.com/" >Grupo de Portugal para análise crítica ao Acordo UE-EUA (TTIP)</a></li>
                  <li><a target="_blank" href="http://blog.academiacidada.org/" >Academia Cidadã</a></li>
                  <li><a target="_blank" href="http://www.precarios.net/" >Precários Inflexíveis</a></li>
                  <!--<li><a target="_blank" href="http://www.maisdemocracia.org/" >MaisDemocracia</a></li>-->
                  <li><a target="_blank" href="http://bioterra.blogspot.pt/" >Bioterra</a></li>
                  <li><a target="_blank" href="http://www.cidac.pt/" >CIDAC</a></li>
                  <li><a target="_blank" href="http://www.radiozero.pt/blog/tag/vidas-alternativas/" >Vidas Alternativas</a></li>
                  <li><a target="_blank" href="http://www.opusgay.org/" >Opus Gay</a></li>
                  <li><a target="_blank" href="http://artigo74.wordpress.com/" >Artigo 74 - Pelo Direito à Educação</a></li>
                  <li><a target="_blank" href="http://www.gaia.org.pt" >O GAIA (Grupo de Acção e Intervenção Ambiental)</a></li>  
                  <li><a target="_blank" href="https://www.facebook.com/fabricadealternativas" >Fábrica de Alternativas</a></li>  
                  <li><a target="_blank" href="https://ansol.org/" >ANSOL</a></li>
                  <li><a target="_blank" href="http://www.spn.pt/" >SPN</a></li>
                  <li><a target="_blank" href="http://www.fenprof.pt/" >FENPROF</a></li>
                  <li><a target="_blank" href="http://www.spgl.pt/" >SPGL</a></li>
                  <li><a target="_blank" href="http://www.sprc.pt" >SPRC</a></li>
                  <li><a target="_blank" href="http://www.habita.info/" >Habita</a></li>
                  <li><a target="_blank" href="https://climaximo.wordpress.com/" >Climaximo</a></li>
                  <li><a target="_blank" href="http://www.stopogm.net/" >Plataforma Transgénicos FORA</a></li>
                  <li><a target="_blank" href="http://asmaa-algarve.org/en/" >ASMAA</a></li>
                  <li><a target="_blank" href="https://pt-br.facebook.com/palombar.associacao/" >Palombar</a></li>
                </ul>
              </section>
            </div>
            <div class="4u">
              <section>
                <header>
                  <h2>e ainda mais</h2>
                </header>
                <ul class="divided">
                  <li><a target="_blank" href="http://stop-ttip.org/">http://stop-ttip.org/</a></li>
                  <li><a target="_blank" href="http://www.d19-20.be/en/ttip/">Aliança D19-20</a></li>
                  <li><a target="_blank" href="http://www.altersummit.eu/?lang=en">Alter Summit</a></li>
                  <li><a target="_blank" href="http://www.bilaterals.org/?-TTIP-&lang=en">Bilaterals</a></li>
                  <li><a target="_blank" href="http://corporateeurope.org/tags/ttip">Corporate Europe Observatory</a></li>
                  <li><a target="_blank" href="http://occupylondon.org.uk/stop-ttip/">Grupo de Trabalho TTIP_Occupy London</a></li>
                  <li><a target="_blank" href="http://gasnaturalnao.wordpress.com/">Gasnaturalnão</a></li>                    
                  <li><a target="_blank" href="http://www.s2bnetwork.org/?id=112">Seattle to Brussels Network</a></li>
                  <li><a target="_blank" href="https://www.laquadrature.net/en/TAFTA">La Quadrature du Net (inglês)</a></li>
                  <li><a target="_blank" href="http://www.ttip2014.eu/home.html">TTIP: Beware what lies beneath</a></li>
                  <li><a target="_blank" href="http://stoptafta.wordpress.com/">Non au Traité Transatlantique</a></li>
                  <li><a target="_blank" href="http://www.citizen.org/tafta">Public Citizen</a></li>
                  <li><a target="_blank" href="http://www.tni.org/category/issues-workarea/trade-investment/eu-trade-policy-ftas>">Transnational Institute</a></li>
                  <li><a target="_blank" href="https://www.facebook.com/tavira.emtransicao/info/?tab=page_info">Tavira Em Transição</a></li>
                  <li><a target="_blank" href="http://www.plataformaongd.pt">Plataforma Portuguesa das ONGD</a></li>
                  <li><a target="_blank" href="http://www.quinta7nomes.com">Quinta dos 7 Nomes</a></li>
                  <li><a target="_blank" href="https://www.facebook.com/HortaComunitariaDoBarreiro">Horta Comunitária do Barreiro</a></li>
                  <li><a target="_blank" href="http://www.palp.pt">Plataforma Algarve Livre de Petróleo</a></li>
                  <li><a target="_blank" href="https://ave-ecologia.org/">Associação Vimaranense para a Ecologia</a></li>
                  
                </ul>
              </section>
            </div>
            <div class="4u">
              <section>
                <header>
                  <h2 id="contact-l">Contacto</h2>
                </header>
                <ul class="social">
                  <!--<li><a class="icon fa-facebook" target="_blank" href="https://www.facebook.com/groups/1496844397239971/"><span class="label">Facebook</span></a></li>-->
                  <li><a class="icon fa-facebook" target="_blank" href="https://www.facebook.com/naottip"><span class="label">Facebook</span></a></li>
                  <li><a class="icon fa-twitter" target="_blank" href="https://twitter.com/NaoAoTTIP"><span class="label">Twitter</span></a></li>
                </ul>
                <ul class="contact">
                  <li>
                    <h3>Email</h3>
                    <p><a href="mailto:info@plataforma-troca.org">info@plataforma-troca.org</a></p>
                  </li>
                  <li>
                    <h3>Privacidade</h3>
                    <p><a href="https://www.nao-ao-ttip.pt/termos-e-condicoes-gerais/">Termos e condicoes gerais</a></p>
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
 <?php wp_footer(); ?> 
</body>
</html>
