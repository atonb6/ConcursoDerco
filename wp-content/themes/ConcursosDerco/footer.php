	<footer class="footer">
    <div class="lfooter">
		<img src="<?php echo get_template_directory_uri(); ?>/img/dercofoot.png" alt="derco" width="200px">
    </div>
    <div class="copy">
      <h2>Copyright© <?php echo date('Y'); ?> Derco Center. Todos los derechos reservados.</h2>
    </div>

    <div class="social">
      <div class="facebook">
		  
		  	<a href="<?php the_field('facebook'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook">
    		</a>

      </div>
      <div class="Twitter">
		  <a href="<?php the_field('twitter'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter">
		  </a>
      </div>
      <div class="Youtube">
		  <a href="<?php the_field('youtube'); ?>">
         <img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="youtube">
		  </a>
      </div>

	    </div>

  </footer>
	<div class="copycel">
		<h2>Copyright© <?php echo date('Y'); ?> Derco Center. Todos los derechos reservados.</h2>
	</div>
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
