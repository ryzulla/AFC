<?php
$_site = $this->db->get('tbl_site', 1)->row();
$wa_num = $_site->site_whatsapp ?: '628111797970';
$wa_url = 'https://web.whatsapp.com/send?phone=+'.$wa_num.'&text=Hi, Saya ingin konsultasi';
$site_addr = $_site->site_address ?: 'Jakarta Barat, DKI Jakarta';
?>
<section class="page-section subscribe-section small-section">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<div class="footer-widget mb-30">
					<div class="footer-widget-title">
						<h4 class="title-name">Tentang Kami</h4>
					</div>
					<div class="food-info-wrapper">
						<p>Nikmati kemudahan bermitra dan berbelanja secara mudah dan aman di website kami</p><p><em><strong>"We Are Family and We Grow Together to Discover The Champion In You."&nbsp;&nbsp;</strong></em></p>
						<p style="margin-top:10px;font-size:13px"><strong>AFC Store Indonesia</strong><br><?php echo nl2br(htmlspecialchars($site_addr)); ?><br>Telp: +628111797970</p>
					</div>
				</div>
			</div>
			<div class="col-md-4" align="left">
				<div class="footer-widget mb-30">
					<div class="footer-widget-title">
						<h4 class="title-name">Customer Service</h4>
					</div>
					<div class="food-widget-content">
						<ul class="list-unstyled">
							<li style="margin-bottom:5px">
								<div class="d-flex" style="align-items:center">
								<a href="https://api.whatsapp.com/send/?phone=628111797970&text=Halo, AFC makanan bernutrisi tinggi / superfood berfungsi untuk terapi stem cell sehingga bisa membantu kesembuhan semua penyakit fungsional degeneratif organ : diabetes, tumor, benjolan, hipertensi, jantung, stroke, ginjal, alergi, insomnia, maag, kanker, kolesterol, sendi, jerawat, kulit, liver, kista, miom, usus, virus dll.  Ada yang bisa kami bantu bapak / ibu untuk penanganan sakit apa ? Saya dapat info dari website&type=phone_number&app_absent=0" target="_blank" rel="nofollow">	
								<div style="padding-right:5px"><img class="img-circle" style="width:30px" src="<?php echo base_url() . 'assets/images/admin/sheila.png'?>">
									&nbsp;Sheila Sukmasari Devi</a></div>
								</div>
							</li>
							<li style="margin-bottom:5px">
								<div class="d-flex" style="align-items:center">
								<a href="https://api.whatsapp.com/send/?phone=6282125838168&text=Halo, AFC makanan bernutrisi tinggi / superfood berfungsi untuk terapi stem cell sehingga bisa membantu kesembuhan semua penyakit fungsional degeneratif organ : diabetes, tumor, benjolan, hipertensi, jantung, stroke, ginjal, alergi, insomnia, maag, kanker, kolesterol, sendi, jerawat, kulit, liver, kista, miom, usus, virus dll.  Ada yang bisa kami bantu bapak / ibu untuk penanganan sakit apa ? Saya dapat info dari website&type=phone_number&app_absent=0" target="_blank" rel="nofollow">
									<div style="padding-right:5px"><img class="img-circle" style="width:30px"  src="<?php echo base_url() . 'assets/images/admin/wira.png'?>">
									&nbsp;Mira Wicitra</a></div>
								</div>
							</li>
							<li style="margin-bottom:5px">
								<div class="d-flex" style="align-items:center">
								<a href="https://api.whatsapp.com/send/?phone=6287868885898&text=Halo, AFC makanan bernutrisi tinggi / superfood berfungsi untuk terapi stem cell sehingga bisa membantu kesembuhan semua penyakit fungsional degeneratif organ : diabetes, tumor, benjolan, hipertensi, jantung, stroke, ginjal, alergi, insomnia, maag, kanker, kolesterol, sendi, jerawat, kulit, liver, kista, miom, usus, virus dll.  Ada yang bisa kami bantu bapak / ibu untuk penanganan sakit apa ? Saya dapat info dari website&type=phone_number&app_absent=0" target="_blank" rel="nofollow">
									<div style="padding-right:5px"><img class="img-circle" style="width:30px"  src="<?php echo base_url() . 'assets/images/admin/asvita.png'?>">
									&nbsp;Asvita</a></div>
								</div>
							</li>
							<li style="margin-bottom:5px">
								<div class="d-flex" style="align-items:center">
								<a href="https://api.whatsapp.com/send/?phone=6282112670988&text=Halo, AFC makanan bernutrisi tinggi / superfood berfungsi untuk terapi stem cell sehingga bisa membantu kesembuhan semua penyakit fungsional degeneratif organ : diabetes, tumor, benjolan, hipertensi, jantung, stroke, ginjal, alergi, insomnia, maag, kanker, kolesterol, sendi, jerawat, kulit, liver, kista, miom, usus, virus dll.  Ada yang bisa kami bantu bapak / ibu untuk penanganan sakit apa ? Saya dapat info dari website&type=phone_number&app_absent=0" target="_blank" rel="nofollow">
									<div style="padding-right:5px"><img class="img-circle" style="width:30px"  src="<?php echo base_url() . 'assets/images/admin/bagyo.png'?>">
									&nbsp;Agustinus Bagyo S</a></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<?php
$_site = $this->db->get('tbl_site', 1)->row();
$wa_num = $_site->site_whatsapp ?: '628111797970';
$wa_url = 'https://web.whatsapp.com/send?phone=+'.$wa_num.'&text=Hi, Saya ingin konsultasi';
$site_addr = $_site->site_address ?: 'Jakarta Barat, DKI Jakarta';
?>
		<div class="footer-widget mb-30">
					<div class="form-group" align="center">
						<p>Contact us:</p>
						<a href="<?php echo $wa_url; ?>" target="_blank"><img src="<?php echo base_url() . 'assets/images/sosmed/wa.webp'; ?>" style="width:45px" alt="WhatsApp AFC Store"></a>
						<a href="<?php echo $_site->site_instagram ?: 'https://www.instagram.com/makanankesehatanganbarufam'; ?>" target="_blank"><img src="<?php echo base_url() . 'assets/images/sosmed/ig.png'; ?>" style="width:45px" alt="Instagram AFC Store"></a>
						<a href="<?php echo $_site->site_youtube ?: 'https://www.youtube.com/@SHEILASU1011'; ?>" target="_blank"><img src="<?php echo base_url() . 'assets/images/sosmed/youtube.png'; ?>" style="width:45px" alt="YouTube AFC Store"></a>
						<a href="<?php echo $_site->site_tiktok ?: 'https://www.tiktok.com/@makanankesehatan_afc'; ?>" target="_blank"><img src="<?php echo base_url() . 'assets/images/sosmed/tiktok.png'; ?>" style="width:45px" alt="TikTok AFC Store"></a>
						<a href="<?php echo $_site->site_facebook ?: 'https://www.facebook.com/MAKANANKESEHATANAFC'; ?>" target="_blank"><img src="<?php echo base_url() . 'assets/images/sosmed/fb.webp'; ?>" style="width:45px" alt="Facebook AFC Store"></a>
						<a href="<?php echo $_site->site_maps ?: 'https://goo.gl/maps/M45xtVejhoEDGMdv9'; ?>" target="_blank"><img src="<?php echo base_url() . 'assets/images/sosmed/google-maps.png'; ?>" style="width:45px" alt="Lokasi AFC Store di Google Maps"></a>
					</div>
				</div>
	</div>
</section>
<section id="footer" class=" page-section">
	<footer id="footer-section" class="page-section pt-30 pb-30 center-xs">
		<div class="copyright"><span><center>&copy; AFC v1.0 <?php echo date('Y'); ?> </center></span></div>
		<!-- <div class="caption fw300">Made with <i class="lnr lnr-heart"></i> by <a href="#" target="_blank">Ryan</a></div> -->
		<!-- ACROLL TO TOP-->
		<!-- <div class="top-button"><h5>Back to Top</h5><div class="line"></div></div> -->
	</footer>
</section>