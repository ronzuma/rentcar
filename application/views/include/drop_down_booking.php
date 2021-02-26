<div class="banner-form-agileinfo">
	<h5>Need To <span>Transport</span>?</h5>
	<p>Order Now!</p>
	<?php echo form_open('Home/order') ?>
		<input type="text" class="email" name="name" placeholder="Name" required="">
		<input type="tel" class="tel" name="tel" placeholder="Phone Number" required="">
		<select class="form-control option-w3ls" name="jemput">
			<option>Transport From</option>
			<option>Bandara International Lombok</option>
			<option>Pelabuhan Lembar</option>
			<option>Bangsal</option>
			<option>Teluk Nara</option>
			<option>Senggigi</option>
			<option>Mataram</option>
			<option>Kuta</option>
		</select>
		<select class="form-control option-w3ls" name="tujuan">
			<option>Transport To</option>
			<option>Bandara International Lombok</option>
			<option>Pelabuhan Lembar</option>
			<option>Bangsal</option>
			<option>Teluk Nara</option>
			<option>Senggigi</option>
			<option>Mataram</option>
			<option>Kuta</option>
		</select>
		<input type="submit" class="hvr-shutter-in-vertical" value="Get started">  	
	<?php echo form_close() ?>
</div>