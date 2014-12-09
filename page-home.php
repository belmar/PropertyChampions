<?php
/**
* Template Name: Home Page
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix home-content">
	<?php do_action( 'cherry_before_home_page_content' ); ?>
	<div class="fluid-container">	
		<div class="row">
			<div data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
				<?php get_template_part("static/static-slider"); ?>
			</div>
		</div>
	</div>
	<div id="opacity-bg"></div>
	<div id="investor-property">
		<div class="container">
			<div class="row">				
				<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="static" data-motopress-loop-file="static/static-home-investor.php">						
					<?php get_template_part("static/static-home-investor"); ?>					
				</div>
			</div>
		</div>
	</div>
	<div id="latest-properties">
		<div class="container">
			<div class="row">				
				<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="static" data-motopress-loop-file="static/static-home-latest.php">						
					<?php get_template_part("static/static-home-latest"); ?>					
				</div>
			</div>
		</div>
	</div>
	<div id="featured-property">
		<div class="container">
			<div class="row">				
				<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="static" data-motopress-loop-file="static/static-home-featured.php">						
					<?php get_template_part("static/static-home-featured"); ?>					
				</div>
			</div>
		</div>
	</div>
	<div id="founders">
		<div class="container">
			<div class="row">
				<h2>The Founders</h2>
			</div>
		</div>
	</div>
	<div id="home-content">
		<div class="row">
				<?php get_template_part("loop/loop-page"); ?>
		</div>
	</div>
	<div id="home-bottom-form">
		<div class="container">
			<div class="row">				
				<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="static" data-motopress-loop-file="static/static-home-contact-form.php">						
					<?php get_template_part("static/static-home-contact-form"); ?>					
				</div>
			</div>
		</div>
	</div>
	<?php do_action( 'cherry_after_home_page_content' ); ?>
</div>
<?php get_footer(); ?>