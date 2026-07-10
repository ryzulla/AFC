<?php
$analytics = '
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3LB1DSECDT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());
  gtag(\'config\', \'G-3LB1DSECDT\');
</script>';

$_soc = $this->db->get('tbl_site', 1)->row();
$wa_num = $_soc->site_whatsapp ?: '628111797970';
$wa_url = 'https://web.whatsapp.com/send?phone=+'.$wa_num.'&text=Hi, Saya ingin konsultasi';
$site_addr = $_soc->site_address ?: 'Jakarta Barat, DKI Jakarta';

$this->load->view('partials/head', array(
	'p_title'     => 'Kontak | AFC Store Indonesia',
	'p_desc'      => 'Hubungi AFC Store Indonesia untuk konsultasi dan pemesanan produk kesehatan AFC (Subarashi, SOP, Utsukushhii). Terhubung lewat WhatsApp, Instagram, dan media sosial kami.',
	'p_canonical' => site_url('contact'),
	'p_extrajs'   => array('jssocials.min.js'),
	'p_analytics' => $analytics,
));
?>
			<section class="page-section small-section">
				<div class="container relative">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="blog-item clearfix">
								<div class="comments-heading text-center mb-30">
									<hgroup>
										<h1 class="font-face1 section-heading">Hubungi Kami</h1>
									</hgroup>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group" align="center">
											<a href="<?php echo $wa_url; ?>" target="_blank" rel="nofollow"><img src="<?php echo base_url().'assets/images/sosmed/wa.webp';?>" style="width:15%" alt="WhatsApp AFC Store"></a>
											<a href="<?php echo $_soc->site_instagram ?: 'https://www.instagram.com/makanankesehatanganbarufam'; ?>" target="_blank" rel="nofollow"><img src="<?php echo base_url().'assets/images/sosmed/ig.png';?>" style="width:15%" alt="Instagram AFC Store"></a>
											<a href="<?php echo $_soc->site_youtube ?: 'https://www.youtube.com/@SHEILASU1011'; ?>" target="_blank" rel="nofollow"><img src="<?php echo base_url().'assets/images/sosmed/youtube.png';?>" style="width:15%" alt="YouTube AFC Store"></a>
											<a href="<?php echo $_soc->site_tiktok ?: 'https://www.tiktok.com/@makanankesehatan_afc'; ?>" target="_blank" rel="nofollow"><img src="<?php echo base_url().'assets/images/sosmed/tiktok.png';?>" style="width:15%" alt="TikTok AFC Store"></a>
											<a href="<?php echo $_soc->site_facebook ?: 'https://www.facebook.com/MAKANANKESEHATANAFC'; ?>" target="_blank" rel="nofollow"><img src="<?php echo base_url().'assets/images/sosmed/fb.webp';?>" style="width:15%" alt="Facebook AFC Store"></a>
											<a href="<?php echo $_soc->site_maps ?: 'https://goo.gl/maps/M45xtVejhoEDGMdv9'; ?>" target="_blank" rel="nofollow"><img src="<?php echo base_url().'assets/images/sosmed/google-maps.png';?>" style="width:15%" alt="Lokasi AFC Store di Google Maps"></a>
										</div>
									</div>
								</div>
								<div class="row text-center" style="margin-top:20px">
									<div class="col-md-12">
										<p style="font-size:16px;margin-bottom:5px"><strong>AFC Store Indonesia</strong></p>
										<p style="font-size:14px;margin-bottom:5px"><?php echo nl2br(htmlspecialchars($site_addr)); ?></p>
										<p style="font-size:14px;margin-bottom:5px">Telp: <a href="tel:+628111797970">+628111797970</a></p>
									</div>
								</div>
								<div class="comments-heading text-center mb-30">
									<hgroup>
										<h5 class="font-face1">Feel free to contact us</h5>
									</hgroup>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<hr class="nomargin nopadding"/>
<?php $this->load->view('partials/foot'); ?>
