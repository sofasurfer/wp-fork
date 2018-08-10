<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
	            <div class="site-info col-6">
	                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>

	            </div><!-- close .site-info -->
	            <div class="site-info col-6">
					<div class="sociallinks pull-right">
					<a title="Contact" href="/about"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					<a target="_blank" title="Twitter" href="https://twitter.com/forkalina"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
					<a target="_blank" title="Facebook" href="https://www.facebook.com/Forkaka7/"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
					<a target="_blank" title="Youtube" href="https://www.youtube.com/channel/UCPcHqBJyhWoNSIxo7hWzzIg"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
if ("addEventListener" in window && "classList" in document.documentElement) {

  var element = document.getElementById("masthead"),
    offset = element.offsetTop;

  window.addEventListener("scroll", function() {
    if (offset < window.pageYOffset) {
      element.classList.add("fixed");
    } else {
      element.classList.remove("fixed");
    }
  }, false);

}
</script>


</body>
</html>
