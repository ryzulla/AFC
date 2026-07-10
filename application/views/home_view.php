<?php
// ---- Structured Data (Schema.org) ----
$ld_org = array(
	'@context' => 'https://schema.org',
	'@type'    => array('Organization', 'Store'),
	'name'     => $site_name,
	'url'      => site_url(),
	'logo'     => base_url('theme/images/'.$site_image),
	'image'    => base_url('theme/images/'.$site_image),
	'address'  => array(
		'@type'           => 'PostalAddress',
		'streetAddress'   => $site_address,
		'addressLocality' => 'Jakarta Barat',
		'addressRegion'   => 'DKI Jakarta',
		'addressCountry'  => 'ID',
	),
	'sameAs'   => array(
		'https://www.instagram.com/makanankesehatanganbarufam',
		'https://www.youtube.com/@SHEILASU1011',
		'https://www.tiktok.com/@makanankesehatan_afc',
		'https://www.facebook.com/MAKANANKESEHATANAFC',
	),
	'contactPoint' => array(
		'@type'             => 'ContactPoint',
		'telephone'         => '+628111797970',
		'contactType'       => 'customer service',
		'areaServed'        => 'ID',
		'availableLanguage' => 'Indonesian',
	),
);
$ld_web = array(
	'@context'        => 'https://schema.org',
	'@type'           => 'WebSite',
	'name'            => $site_name,
	'url'             => site_url(),
	'potentialAction' => array(
		'@type'       => 'SearchAction',
		'target'      => site_url('search').'?search_query={search_term_string}',
		'query-input' => 'required name=search_term_string',
	),
);
$jsonld = '<script type="application/ld+json">'.json_encode($ld_org, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>'
        . '<script type="application/ld+json">'.json_encode($ld_web, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>';

// ---- Head tambahan khusus home (meta pixel id, adsense, font, inline style) ----
ob_start(); ?>
	<meta name="meta-pixel-id" content="346982718234948">
	<meta name="google-adsense-account" content="ca-pub-9402613678162601">
	<link href="https://fonts.googleapis.com/css2?family=Body+Grotesque+Fit&display=swap" rel="stylesheet">
	<style>
		.caption-font { font-family: 'Roboto', sans-serif; font-weight: 700; font-size: 4vw; letter-spacing: 1px; text-align: center; color: white; text-transform: uppercase; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); padding: 20px; }
		.phone-container { display: flex; justify-content: center; align-items: center; gap: 10px; margin-top: 15px; font-size: 2vw; }
		.phone-number { color: white !important; -webkit-text-fill-color: white; text-shadow: none !important; cursor: pointer; }
		.phone-number:hover { color: white !important; text-shadow: none !important; }
		.phone-icon, .copy-icon { font-size: 2.5vw; color: #007bff; cursor: pointer; }
		.phone-icon:hover, .copy-icon:hover { color: #0056b3; }
		@media (max-width: 768px) {
			.caption-font { font-size: 7vw; }
			.phone-container { font-size: 6vw; }
			.phone-icon, .copy-icon { font-size: 6vw; }
			.phone-number { color: white !important; -webkit-text-fill-color: white; text-shadow: none !important; cursor: pointer; }
			.phone-number:hover { color: white !important; text-shadow: none !important; }
		}
	</style>
<?php $headextra = ob_get_clean();

// ---- Tracking khusus home ----
ob_start(); ?>
	<!-- Google Ads -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16897997157"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'AW-16897997157');

		function copyPhoneNumber() {
			var phoneNumber = document.getElementById('phone-number').innerText;
			var textArea = document.createElement('textarea');
			textArea.value = phoneNumber;
			document.body.appendChild(textArea);
			textArea.select();
			document.execCommand('copy');
			document.body.removeChild(textArea);
			alert('Nomor telepon berhasil disalin: ' + phoneNumber);
		}
	</script>
	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3LB1DSECDT"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-3LB1DSECDT');
	</script>
	<!-- TikTok Pixel -->
	<script>
	!function (w, d, t) {
	  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
	var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
	;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};

	  ttq.load('D3KB2HBC77UELR3MS9CG');
	  ttq.page();
	}(window, document, 'ttq');
	</script>
	<!-- Meta Pixel -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '346982718234948');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=346982718234948&ev=PageView&noscript=1" /></noscript>
<?php $analytics = ob_get_clean();

$this->load->view('partials/head', array(
	'p_title'     => $site_title,
	'p_desc'      => $site_desc,
	'p_canonical' => site_url(),
	'p_ogimage'   => base_url('theme/images/'.$site_image),
	'p_jsonld'    => $jsonld,
	'p_headextra' => $headextra,
	'p_analytics' => $analytics,
	'p_extracss'  => array('slick.css', 'slick-theme.css'),
	'p_loader'    => FALSE,
	'p_mainclass' => 'cd-main-content',
));
?>
			<section id="homepage" class="page-section" style="padding-top:70px">
				<div class="">
					<div class="row">
						<div class="blog-item clearfix">
							<div style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo base_url()."theme/images/".$bg_header;?>'); height: 415px;">
								<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
									<h1 class="text-center caption-font" style="color:white"><?php echo $caption_1; ?></h1>
									<div class="phone-container">
										<i class="fa fa-phone phone-icon" style="color:white" aria-hidden="true"></i>
										<span style="color:white!important" id="phone-number" class="phone-number" onclick="copyPhoneNumber()">+628111797970</span>
										<i class="fa fa-copy copy-icon" style="color:white" onclick="copyPhoneNumber()" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="lazy slider" data-sizes="50vw">
				<?php foreach ($post_slider->result() as $slider) : ?>
				<div>
					<img data-lazy="<?php echo base_url() . 'assets/images/slider/' . $slider->slider_image; ?>" data-srcset="<?php echo base_url() . 'assets/images/slider/' . $slider->slider_image; ?>" data-sizes="100vw" alt="<?php echo htmlspecialchars($slider->slider_title ?: 'AFC Store - Promo produk kesehatan', ENT_QUOTES); ?>">
				</div>
				<?php endforeach; ?>
				</div>
			</section>

			<section id="homepage" class="page-section">
				<div class="container relative">
					<div class="row">
						<div class="blog-item" style="padding:20px">
							<!--POST BODY-->
							<div class="blog-item-body light-text">
								<?php echo $caption_2; ?>
							</div>
						</div>
					</div>
					<div class="row" align="center">
						<div style="width:60%;text-align:center;" class="center-block">
							<!--POST BODY-->
							<div class="center-block lazy slider" data-sizes="20vw">
								<?php foreach ($legality_slider->result() as $lg_slider) : ?>
									<div>
										<img data-lazy="<?php echo base_url() . 'assets/images/slider/' . $lg_slider->slider_image; ?>" data-srcset="<?php echo base_url() . 'assets/images/slider/' . $lg_slider->slider_image; ?>" data-sizes="20vw" alt="<?php echo htmlspecialchars($lg_slider->slider_title ?: 'Legalitas & sertifikat resmi produk AFC', ENT_QUOTES); ?>">
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="center-block">
							<span style="font-size: 16.5pt; font-weight:bold; font-family: Roboto; color: red;">Mengapa Anda Harus Beli Produk AFC di Toko Kami?</span>
							<div class="row">
								<?php foreach ($pengiriman->result() as $kirim) : ?>
									<div class="img-thumbnail">
										<img class="img-responsive" src="<?php echo base_url().'assets/images/pengiriman/'.$kirim->pengiriman_image;?>" width="80" alt="Keunggulan belanja produk AFC">
									</div>
								<?php endforeach; ?>
							</div>
							<div class="center-block">
								<?php
									$this->db->select_sum('counter_number');
									$count = $this->db->get_where('tbl_counter')->row();
								?>
								<span style="font-size: 42pt; font-weight:bold; font-family: Roboto; color: red;" class="count"><?=$count->counter_number?></span><br>
								<span>Box Telah Terkirim</span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- SECTION product -->
			<section id="testimonial" class="page-section black-section medium-section overlay-dark-alpha-60" data-background="<?php echo base_url() . 'theme/images/' . $bg_testimoni; ?>">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="block-wraper">
							<div class="center-slider-auto">
								<?php foreach ($product->result() as $test) : ?>
									<div class="product-gallery">
										<div class="text-center">
											<blockquote class="testimonial-text">
												<a href="<?php echo site_url('product/' . $test->product_slug); ?>">
													<div class="card-avatar">
														<img src="<?php echo base_url() . 'assets/images/' . $test->product_image; ?>" class="img" alt="<?php echo htmlspecialchars($test->product_title, ENT_QUOTES); ?>" />
													</div>
													<footer class="testimonial-author font-face1 fw700">
														<?php echo $test->product_title; ?>
														<div class="testimonial-rating mt-10 mb-10">&starf; &starf; &starf; &starf; &starf;</div>
													</footer>
												</a>
											</blockquote>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-navigation-bottom">
					<div class="testimonial-right"></div>
				</div>
				<div class="slider-navigation-top">
					<div class="testimonial-left"></div>
				</div>
			</section>

			<!-- SECTION BLOG -->
			<section id="thoughts" class="page-section" style="padding:40px">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="font-face1 section-heading fw800 mt-0">Hot Topics</h2>
						</div>
					</div>
					<div class="row multi-columns-row">
						<ol>
							<?php foreach ($latest_post->result() as $row) : ?>
								<li><a class="articles-card" href="<?php echo site_url('blog/' . $row->post_slug); ?>" title="<?php echo htmlspecialchars($row->post_title, ENT_QUOTES); ?>">
										<h2 class="heading6 lp-0 mt-0 font-face1" style="text-align:left!important"><?php echo $row->post_title; ?></h2>
									</a></li>
							<?php endforeach; ?>
							<li><a class="articles-card" href="<?php echo site_url('blog/testimonials'); ?>" title="Testimonials">
									<h2 class="heading6 lp-0 mt-0 font-face1" style="text-align:left!important">Testimonials</h2>
								</a></li>
							<li><a class="articles-card" href="<?php echo site_url('blog/pendapat-dokter'); ?>" title="Pendapat Dokter">
									<h2 class="heading6 lp-0 mt-0 font-face1" style="text-align:left!important">Pendapat Dokter</h2>
								</a></li>
						</ol>
						<ol>
							<a class="btn bg-black" href="<?php echo site_url('blog/gejala-penyakit'); ?>">Selengkapnya...</a>
						</ol>
					</div>
				</div>
			</section>
<?php $this->load->view('partials/foot', array('p_extrajs' => array('slick.min.js'))); ?>
