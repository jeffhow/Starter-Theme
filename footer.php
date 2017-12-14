<?php
/**
 * The template for displaying the footer
 *
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>

					<nav class="social-navigation" role="navigation" aria-label="Footer Social Links Menu">
						
					</nav><!-- .social-navigation -->
				
				<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- /#page /.site /.container -->

<?php wp_footer(); ?>
<!-- Popper CDN JS (required for Bootstrap 4.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<!-- Bootstrap CDN JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
