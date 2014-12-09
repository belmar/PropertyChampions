		<footer class="motopress-wrapper footer">
			<div id = "footer-top">
				<div class="container">
					<div class="row">
						<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="wrapper/wrapper-footer-top.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
							<?php get_template_part('wrapper/wrapper-footer-top'); ?>
						</div>
					</div>
				</div>
			</div>
			<div id = "footer-bottom">
				<div class="container">
					<div class="row">
						<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="wrapper/wrapper-footer-bottom.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
							<?php get_template_part('wrapper/wrapper-footer-bottom'); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--End #motopress-main-->
	</div>
	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<?php echo apply_filters( 'cherry_back_top_html', '<a href="#top"><span></span></a>' ); ?>
		</p>
	</div>
	<?php if(of_get_option('ga_code')) { ?>
		<script type="text/javascript">
			<?php echo stripslashes(of_get_option('ga_code')); ?>
		</script>
		<!-- Show Google Analytics -->
	<?php } ?>
	<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
</body>
</html>