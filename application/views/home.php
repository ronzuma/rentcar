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

	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="banner-dott">
						<div class="container">
							<div class="slider-info">
								<div class="col-md-8">
									<h2></h2>
								</div>
								<div class="col-md-4">
									<div class="banner-form-agileinfo">
										<h5>Butuh <span>Transportasi</span> untuk perjalanan wisata di Lombok?</h5>
										<p>Pesan Sekarang!</p>
										<?php echo form_open('Home/order') ?>
											<input type="text" class="email" name="name" placeholder="Nama" required="">
											<input type="tel" class="tel" name="tel" placeholder="No. Telp" required="">
											<select class="form-control option-w3ls" name="jemput" id="jemput" onchange="jemput_lainnya()">
												<option>--Lokasi Jemput--</option>
												<option>Bandara International Lombok</option>
												<option>Pelabuhan Lembar</option>
												<option>Bangsal</option>
												<option>Teluk Nara</option>
												<option>Senggigi</option>
												<option>Mataram</option>
												<option>Kuta</option>
												<option>Lainnya</option>
											</select>
											<textarea id="ket_jemput" name="ket_jemput" rows="3" hidden></textarea>
											<select class="form-control option-w3ls" name="tujuan" id="tujuan" onchange="tujuan_lainnya()">
												<option>--Tujuan--</option>
												<option>Bandara International Lombok</option>
												<option>Pelabuhan Lembar</option>
												<option>Bangsal</option>
												<option>Teluk Nara</option>
												<option>Senggigi</option>
												<option>Mataram</option>
												<option>Kuta</option>
												<option>Lainnya</option>
											</select>
											<textarea id="ket_tujuan" name="ket_tujuan" rows="3" hidden></textarea>
											<input type="submit" class="hvr-shutter-in-vertical" value="Pesan Sekarang">  	
										<?php echo form_close() ?>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="team" id="team">
		<div class="container">
		<div class="heading">
			<h3>Transportasi</h3>
		</div>
			<div class="wthree_team_grids">
				<?php foreach ($car as $car): ?>
				<div class="col-md-3 wthree_team_grid">
					<div class="hovereffect">
						<img src="<?php echo config_item('assets'); ?>images/<?php echo $car->gambar?>" alt=" " class="img-responsive" />
						<div class="overlay">
							
						</div>
					</div>
					<h4><?php echo $car->type?></h4>
					<p>Kapasitas: <?php echo $car->kapasitas?> Seat</p>
				</div>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="banner-bottom">
		<div class="col-md-7 bannerbottomleft">
			<div class="video-grid-single-page-agileits">
				<div data-video="BbkFE_K_t0c" id="video"> <img src="<?php echo config_item('assets'); ?>images/bg2.jpg" alt="" class="img-responsive" /> </div>
			</div>
		</div>
		<div class="col-md-5 bannerbottomright">
			<h3>Pariwisata Lombok</h3>
			<p>
				Pulau Lombok terkenal akan keindahan pantai dan keragaman biota laut. Bahkan, Lombok sekarang semakin dikenal oleh wisatawan karena banyaknya destinasi wisata baru yang dikelola dengan baik oleh penduduk dan pemerintah setempat.
			</p>
		</div>
		<div class="clearfix"></div>
	</div>

	<?php $this->load->view('include/footer.php'); ?>
	<?php $this->load->view('include/js.php'); ?>

	<script>
		function jemput_lainnya() {
			var jemput = $("#jemput").val();
			if(jemput=='Lainnya'){
				document.getElementById("ket_jemput").hidden = false;
			}else{
				document.getElementById("ket_jemput").hidden = true;
			}
		}
		
		function tujuan_lainnya() {
			var  tujuan = $("#tujuan").val();
			if(tujuan=='Lainnya'){
				document.getElementById("ket_tujuan").hidden = false;
			}else{
				document.getElementById("ket_tujuan").hidden = true;
			}
		}
	</script>
</body>
</html>