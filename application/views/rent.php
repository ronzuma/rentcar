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
	<style>
		
		@media (max-width: 991px)
		.tombol-pesan {
			padding: 2em 3em;
		}
		
		.tombol-pesan input[type="submit"] {
			width: 100%;
			margin-top: 0px;
			padding: 12px 0px;
			font-size: 15px;
			color: #fff;
			letter-spacing: 1px;
			text-transform: uppercase;
			border: none;
			background: #e01f3d;
			-webkit-transition: 0.5s all;
			-o-transition: 0.5s all;
			-moz-transition: 0.5s all;
			-ms-transition: 0.5s all;
			transition: 0.5s all;
		}
		
		.tombol-pesan {
			background: #fff;
		}
	</style>
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
			<?php foreach ($car as $car): ?>
			<div class="col-md-3">
				<div class="hovereffect">
					<img src="<?php echo config_item('assets'); ?>images/<?php echo $car->gambar?>" alt=" " class="img-responsive" />
				</div>
				<h4 class="wthree_team_grid"><?php echo $car->type?></h4>
				</br>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Kapasitas</td>
							<td>: <?php echo $car->kapasitas?> Seat</td>
						</tr>
						<tr>
							<td>Include</td>
							<td>: <?php echo $car->paket ?></td>
						</tr>
						<tr>
							<td>Durasi</td>
							<td>: <?php echo $car->durasi?></td>
						</tr>						
					</tbody>
                    <tfoot>
						<tr>
							<td colspan='2'>
								<div class="tombol-pesan">
								  <input type="submit"  value="Pesan Sekarang">
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
				
			</div>
			<?php endforeach; ?>
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