<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="<?php echo config_item('assets'); ?>js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo config_item('assets'); ?>js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	

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

<!-- Baneer-js -->
<script src="<?php echo config_item('assets'); ?>js/responsiveslides.min.js"></script>
<script>
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			pager:false,
			nav: true,
			speed: 1000,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
		});
	});
</script>
<!-- //Baneer-js -->

<!-- banner bottom video script -->
<script src="<?php echo config_item('assets'); ?>js/simplePlayer.js"></script>
	<script>
		$("document").ready(function() {
			$("#video").simplePlayer();
		});
</script>
<!-- //banner bottom video script -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="<?php echo config_item('assets'); ?>js/waypoints.min.js"></script> 
<script src="<?php echo config_item('assets'); ?>js/counterup.min.js"></script> 
<script>
	jQuery(document).ready(function( $ ) {
		$('.counter').counterUp({
			delay: 100,
			time: 1000
		});
	});
</script>
