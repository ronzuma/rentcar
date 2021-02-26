<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('include/header.php'); ?>
</head>
<body>
	<div class="header">
		<?php $this->load->view('include/navbar.php'); ?>		
	</div>

	<div id="portfolio" class="portfolio">
		<div class="heading">
			<h3></h3>
		</div>
		<div class="container">
			<div class="sap_tabs">			
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item"><span>Gallery</span></li>				
					</ul>	
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="resp-tab-content">
							<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid1">
								<a href="<?php echo config_item('assets'); ?>images/g1.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
									<img src="<?php echo config_item('assets'); ?>images/g1.jpeg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid2">
								<a href="<?php echo config_item('assets'); ?>images/g2.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
									<img src="<?php echo config_item('assets'); ?>images/g2.jpeg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid3">
								<a href="<?php echo config_item('assets'); ?>images/g3.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
									<img src="<?php echo config_item('assets'); ?>images/g3.jpeg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid4">
								<a href="<?php echo config_item('assets'); ?>images/g4.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
									<img src="<?php echo config_item('assets'); ?>images/g4.jpeg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid5">
								<a href="<?php echo config_item('assets'); ?>images/g5.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
									<img src="<?php echo config_item('assets'); ?>images/g5.jpeg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid6">
								<a href="<?php echo config_item('assets'); ?>images/g6.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
									<img src="<?php echo config_item('assets'); ?>images/g6.jpeg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 portfolio-grids portfolio-grid6">
								<a href="<?php echo config_item('assets'); ?>images/g7.jpeg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
									<img src="<?php echo config_item('assets'); ?>images/g7.jpeg" class="img-responsive zoom-img" alt=""/>
									<div class="b-wrapper">
										
									</div>
								</a>
							</div>
							
							<div class="clearfix"> </div>
						</div>		
					</div>						
				</div>
			</div>
		</div>
	</div>
	<!-- //portfolio-inner-page -->

	<?php $this->load->view('include/footer.php'); ?>

<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="<?php echo config_item('assets'); ?>js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo config_item('assets'); ?>js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	
<!-- //js-scripts -->

	<!--script for portfolio-->
			<script src="<?php echo config_item('assets'); ?>js/lightbox-plus-jquery.min.js"> </script>
			<script src="<?php echo config_item('assets'); ?>js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});		
			</script>
	<!--//script for portfolio-->
			

<!-- start-smoth-scrolling -->
<script src="<?php echo config_item('assets'); ?>js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="<?php echo config_item('assets'); ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo config_item('assets'); ?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->
</body>
</html>