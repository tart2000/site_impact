    
</div> <!-- fin wrapper -->
 	<footer class="footer" role="contentinfo">
 		<div class="container center">
 	 		<p>Un projet</p>
 	 		<a href="http://rhizome.group" target="_blank">
	 	 		<img src="<?php echo $site->url() ?>/assets/images/logo_rhizome_carre_50.jpg">
 	 		</a>
 	 	</div>
	</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php url('assets/js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
		

    <?php echo js('assets/js/vendor/bootstrap.min.js'); ?>
    <?php echo js('assets/js/main.js'); ?>

    <?php if ($page->template() == 'home') : ?>
	    <?php echo js('assets/js/paper-full.min.js') ?>
	    <?php echo js('assets/js/network.js') ?>
	<?php endif ?>


		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','<?php echo $site->analytics() ? $site->analytics() : 'UA-XXXXX-X' ?>','auto');ga('send','pageview');
		</script>
		
  </body>
</html>
