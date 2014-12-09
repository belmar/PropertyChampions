<?php /* Wrapper Name: Footer Top*/ ?>
<div class="row footer-widgets">
	<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
		<?php dynamic_sidebar("footer-sidebar-1"); ?>
	</div>
	<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
		<?php dynamic_sidebar("footer-sidebar-2"); ?>
	</div>
	<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
		<?php dynamic_sidebar("footer-sidebar-3"); ?>
	</div>
	<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
		<?php dynamic_sidebar("footer-sidebar-4"); ?>
	</div>
</div>
<div class="row footer-nav">
	<div class="span9" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div>
	<div class="span3" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
		<?php get_template_part("static/static-social-networks"); ?>
	</div>
</div>
