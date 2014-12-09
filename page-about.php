<?php
/**
* Template Name: About Page
*/
get_header();
?>
<div class="motopress-wrapper content-holder clearfix" style="padding-bottom: 0;}>
	<div class="fluid-container">
		<div class="row">
			<div id="about-banner">
				<div class="container">
					<div class="row">
						<div class="about-top-form span4">
							<h4>Fill in these three boxes to download our <strong>FREE exclusive Winning Property Research Paper</strong> here</h4>
							<form method="get">
								<input type="text" placeholder="Enter Name" name="fname" class="add-form-padding inline-fname">
								<input type="email" placeholder="Enter Email" name="lname" class="add-form-padding inline-email">
								<input type="text" placeholder="Enter Phone Number" name="lname" class="add-form-padding inline-phone">
								<button class="pull-left" type="button">Download <span class="icon-download-alt"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<h2 style="margin-bottom: 40px;">The 3 Surefire Property Champions Fundamentals to <br/> Making Money Through Property</h2>
			
			<div class="about span12">
				<div class="row-fluid fundamentals">
					<div class="span4 first"><h6>The first fundamental in any property investment we carefully monitor is;</h6></div>
					<div class="span4 icon"><img src="<?php echo get_stylesheet_directory_uri()."/images/demographics.png"; ?>" alt="resources-img"></div>
					<div class="span4"><h5>DEMOGRAPHICS</h5><p>(Population growth in the suburb you are buying the property)</p></div>
				</div>
				<div class="clear"></div>
				<hr>
				<div class="row-fluid fundamentals">
					<div class="span4 first"><h6>The second fundamental we carefully research is;</h6></div>
					<div class="span4 icon"><img src="<?php echo get_stylesheet_directory_uri()."/images/structure-plan.png"; ?>" alt="resources-img"></div>
					<div class="span4"><h5>STRUCTURE PLAN</h5><p>(How the economy is likely to grow in the area you are investing in)</p></div>
				</div>
				<div class="clear"></div>
				<hr>
				<div class="row-fluid fundamentals">
					<div class="span4 first"><h6>The third fundamental we absolutely insist on is;</h6></div>
					<div class="span4 icon"><img src="<?php echo get_stylesheet_directory_uri()."/images/economic-factors.png"; ?>" alt="resources-img"></div>
					<div class="span4"><h5>ECONOMIC FACTORS</h5><p>(How the area will develop in the suburb and surrounding suburbs you are investing in)</p></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div id="about-form">
		<div class="container">
			<div class="row">
				<h4>Fill in these three boxes to download our <strong>FREE</strong> exclusive Winning Property Research Paper here</h4>
				<form class="form-inline" method="get">
					<input type="text" placeholder="Enter Name" name="fname" class="add-form-padding inline-fname display-form-inline">
					<input type="email" placeholder="Enter Email" name="lname" class="add-form-padding inline-email display-form-inline">
					<input type="text" placeholder="Enter Phone Number" name="lname" class="add-form-padding inline-phone display-form-inline">
					<button class="pull-left" type="button">Download <span class="icon-download-alt"></span></button>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
				<div id="content" class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
						<?php get_template_part("loop/loop-page"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="about-bottom">
		<div class="container">
			<div class="row">
				<h4>Fill in these three boxes to download our <strong>FREE</strong> exclusive Winning Property Research Paper here</h4>
				<form class="form-inline" method="get">
					<input type="text" placeholder="Enter Name" name="fname" class="add-form-padding inline-fname display-form-inline">
					<input type="email" placeholder="Enter Email" name="lname" class="add-form-padding inline-email display-form-inline">
					<input type="text" placeholder="Enter Phone Number" name="lname" class="add-form-padding inline-phone display-form-inline">
					<button class="pull-left" type="button">Download <span class="icon-download-alt"></span></button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>