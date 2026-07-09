<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Page Title -->
	<title><?php echo $site_title; ?></title>
	<!-- Page header -->
	<meta charset="utf-8" />
    <meta name="meta-pixel-id" content="346982718234948">
	<meta name="description" content="<?php echo $site_desc; ?>" />
	<meta name="keywords" content="AFC.com,AFCstoreindo, afcstoreindonesia, afcindonesia,AFC, AFC Official, AFC Indo, AFC Store,AFC Store Indo,AFC Store Indonesia, AFC Indonesia, AFC ID, AFC Store ID, AFC Store Indonesia, Utsu, Suba, Subarashi, SOP, SOP Subarashi, Utsukushhii" />
	<meta name="author" content="Sheila S" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css') ?>" />
	<!-- <link rel="stylesheet" href="<?php echo base_url('theme/css/WA.css') ?>" /> -->
	<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/css/slick.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('theme/css/slick-theme.css') ?>" />
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url('theme/images/' . $icon); ?>">
	<!-- SEO Tag -->
	<meta name="google-adsense-account" content="ca-pub-9402613678162601">
	<meta name="description" content="<?php echo $site_desc; ?>" />
	<link rel="canonical" href="<?php echo site_url(); ?>" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $site_title; ?>" />
	<meta property="og:description" content="<?php echo $site_desc; ?>" />
	<meta property="og:url" content="<?php echo site_url(); ?>" />
	<meta property="og:site_name" content="<?php echo $site_name; ?>" />
	<meta property="og:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
	<meta property="og:image:secure_url" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
	<meta property="og:image:width" content="560" />
	<meta property="og:image:height" content="315" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="<?php echo $site_desc; ?>" />
	<meta name="twitter:title" content="<?php echo $site_title; ?>" />
	<meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
	<meta name="twitter:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>" />
	<link href='<?php echo base_url() . 'theme/css/lib/arcontactus.css' ?>' rel='stylesheet'/>
	<link href="https://fonts.googleapis.com/css2?family=Body+Grotesque+Fit&display=swap" rel="stylesheet">
	<style>
        .caption-font {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 4vw; /* Ukuran font default */
            letter-spacing: 1px;
            text-align: center; /* Mengatur teks agar berada di tengah */
            color: white;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            padding: 20px;
        }
        
        .phone-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px; /* Jarak antara ikon dan nomor telepon */
            margin-top: 15px;
            font-size: 2vw;
        }
        
        .phone-number {
            color: white !important;
            -webkit-text-fill-color: white; /* Menambahkan prefix untuk Safari */
            text-shadow: none !important; /* Menonaktifkan text-shadow */
            cursor: pointer;
        }
        
        .phone-number:hover {
            color: white !important; /* Warna saat hover */
            text-shadow: none !important; /* Menonaktifkan text-shadow pada hover */
        }
        
        .phone-icon, .copy-icon {
            font-size: 2.5vw; /* Ukuran ikon */
            color: #007bff; /* Warna biru untuk ikon */
            cursor: pointer; /* Menunjukkan bahwa ikon bisa diklik */
        }
        
        .phone-icon:hover, .copy-icon:hover {
            color: #0056b3; /* Warna saat hover pada ikon */
        }
        
        @media (max-width: 768px) {
            .caption-font {
                font-size: 7vw; /* Menyesuaikan ukuran font pada perangkat mobile */
            }
        
            .phone-container {
                font-size: 6vw; /* Ukuran font yang lebih besar di mobile */
            }
        
            .phone-icon, .copy-icon {
                font-size: 6vw; /* Ukuran ikon lebih besar di mobile */
            }
            
            .phone-number {
                color: white !important;
                -webkit-text-fill-color: white; /* Menambahkan prefix untuk Safari */
                text-shadow: none !important; /* Menonaktifkan text-shadow */
                cursor: pointer;
            }
            
            .phone-number:hover {
                color: white !important; /* Warna saat hover */
                text-shadow: none !important; /* Menonaktifkan text-shadow pada hover */
            }
        }

	</style>
	<!-- End SEO Tag. -->
	<!-- Google tag (gtag.js) -->
	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16897997157"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-16897997157');
      
      function copyPhoneNumber() {
            /* Membuat elemen input sementara untuk menyalin nomor telepon */
            var phoneNumber = document.getElementById('phone-number').innerText;
            var textArea = document.createElement('textarea');
            textArea.value = phoneNumber;
            document.body.appendChild(textArea);
            textArea.select(); // Memilih teks
            document.execCommand('copy'); // Menyalin teks ke clipboard
            document.body.removeChild(textArea); // Menghapus elemen input sementara
        
            // Menampilkan notifikasi sukses
            alert('Nomor telepon berhasil disalin: ' + phoneNumber);
        }

    </script>
	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3LB1DSECDT">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-3LB1DSECDT');
          
    });
    </script>
     <!-- TikTok Pixel Code Start -->
    <script>
    !function (w, d, t) {
      w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
    var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
    ;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};
    
    
      ttq.load('D3KB2HBC77UELR3MS9CG');
      ttq.page();
    }(window, document, 'ttq');
    </script>
    <!-- TikTok Pixel Code End -->
     <!-- Meta Pixel Code -->
    
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
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=346982718234948&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body class="content-animate">

	<!-- PRELOADER
		==================================================-->

	
	<div id='arcontactus'></div>
	<!-- PAGE
		==================================================-->
	<div id="top" class="page">

		<!-- Navigation panel
			================================================== -->
		<?php echo $header; ?>
		<!-- End Navigation panel -->

		<!-- Main Content
			==================================================-->
		<main class="cd-main-content">
			<section id="homepage" class="page-section" style="padding-top:70px">
				<div class="">
					<div class="row">
						<div class="blog-item clearfix">
							<div style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo base_url()."theme/images/".$bg_header;?>');
										height: 415px;">
								<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
									<h1 class="text-center caption-font" style="color:white"><?php echo $caption_1; ?></h1>
									 <div class="phone-container">
                                        <!-- Ikon telepon dan nomor -->
                                        <i class="fa fa-phone phone-icon" style="color:white" aria-hidden="true"></i>
                                        <span style="color:white!important" id="phone-number" class="phone-number" onclick="copyPhoneNumber()">+628111797970</span>
                                         <!--Ikon salin -->
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
					<img data-lazy="<?php echo base_url() . 'assets/images/slider/' . $slider->slider_image; ?>" data-srcset="<?php echo base_url() . 'assets/images/slider/' . $slider->slider_image; ?>" data-sizes="100vw">
				</div>
				<?php endforeach; ?>
				</div>
			</section>
	</div>
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
					<div class="center-block lazy slider"  data-sizes="20vw">
						<?php foreach ($legality_slider->result() as $lg_slider) : ?>
							<div>
								<img data-lazy="<?php echo base_url() . 'assets/images/slider/' . $lg_slider->slider_image; ?>" data-srcset="<?php echo base_url() . 'assets/images/slider/' . $lg_slider->slider_image; ?>" data-sizes="20vw">
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="center-block">
					<span style="font-size: 16.5pt; font-weight:bold; font-family: Roboto; color: red;">Mengapa Anda Harus Beli Produk AFC di Toko Kami?</span>
						<div class="row">
							<?php foreach ($pengiriman->result() as $kirim) : ?>
								<div class="img-thumbnail">
									<img class="img-responsive" src="<?php echo base_url().'assets/images/pengiriman/'.$kirim->pengiriman_image;?>" width="80" alt="">
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
			<div class="row" align="center">
				
			</div>
		</div>
			
	</section>
	<!-- HOME SECTION
				================================================== -->

	<!-- SECTION product
				================================================== -->
	<section id="testimonial" class="page-section black-section medium-section overlay-dark-alpha-60" data-background="<?php echo base_url() . 'theme/images/' . $bg_testimoni; ?>">
		<!-- <div class="container relative">						 -->
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
												<img src="<?php echo base_url() . 'assets/images/' . $test->product_image; ?>" class="img" alt="" />
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

		</div>
		<div class="slider-navigation-bottom">
			<div class="testimonial-right"></div>
		</div>
		<div class="slider-navigation-top">
			<div class="testimonial-left"></div>
		</div>
	</section>

	<!-- SECTION BLOG
				================================================== -->
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
						<li><a class="articles-card" href="<?php echo site_url('blog/' . $row->post_slug); ?>" title="">
								<!-- <div class="card-body text-right"> -->
								<h2 class="heading6 lp-0 mt-0 font-face1" style="text-align:left!important"><?php echo $row->post_title; ?></h2>
								<!-- </div> -->
							</a></li>
					<?php endforeach; ?>
					<li><a class="articles-card" href="<?php echo site_url('blog/testimonials'); ?>" title="">
							<h2 class="heading6 lp-0 mt-0 font-face1" style="text-align:left!important">Testimonials</h2>
						</a></li>
					<li><a class="articles-card" href="<?php echo site_url('blog/pendapat-dokter'); ?>" title="">
							<h2 class="heading6 lp-0 mt-0 font-face1" style="text-align:left!important">Pendapat Dokter</h2>
						</a></li>
				</ol>
				<ol>
					<a class="btn bg-black" href="<?php echo site_url('blog/gejala-penyakit'); ?>">Selengkapnya...</a>
				</ol>
			</div>
		</div>
	</section>
	<!-- SECTION SUBSCRIBE-->
	<!-- FOOTER -->
	<?php echo $footer; ?>

	</main>
	</div>

	<!-- Modal Search-->
	<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<form action="<?php echo site_url('search'); ?>" method="GET">
						<div class="input-group">
							<input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- POPOP -->
	<!-- <div id='whatsapp-chat' class='hide'>
		<div class='header-chat'>
			<div class='head-home'>
				<div class='info-avatar'><img src='https://d1fdloi71mui9q.cloudfront.net/8UUA4DxQSICLeZvK9byt_7220mOBHjnwzM2PJ' /></div>
				<p><span class="whatsapp-name">AFC</span><br><small>Typically replies within an minutes</small></p>

			</div>
			<div class='get-new hide'>
				<div id='get-label'></div>
				<div id='get-nama'></div>
			</div>
		</div>
		<div class='home-chat'>

		</div>
		<div class='start-chat'>
			<div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
				<div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
					<div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
						<div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
							<div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
							<div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
							<div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
						</div>
					</div>
					<div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
						<div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">AFC</div>
						<div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hallo, Terima kasih telah mengunjungi website kami.<br> Ada yang bisa kami bantu?</div>
						<div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm"><?= date('d F Y') ?></div>
					</div>
				</div>
			</div>

			<div class='blanter-msg'>
				<textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
				<a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448">
						<path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z" />
					</svg></a>
			</div>
		</div>
		<div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
	</div>
	<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24">
			<defs />
			<path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />
			<path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />
			<path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />
		</svg> Konsultasi Sekarang</a> -->
	<!-- POPOP -->
	<!-- JAVASCRIPT
		==================================================-->
	<script src="<?php echo base_url() . 'theme/js/jquery-2.2.4.min.js' ?>"></script>
	
	<script src="<?php echo base_url('theme/js/lib/arcontactus.js')?>"></script>
    <script src="<?php echo base_url('theme/js/lib/script.js')?>"></script>
	<!-- <script src="<?php echo base_url() . 'theme/js/WA.js' ?>"></script> -->
	<script src="<?php echo base_url('theme/js/jquery.easing.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/waypoints.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.scrollTo.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.localScroll.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.viewport.mini.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.sticky.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.fitvids.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.parallax-1.1.3.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/isotope.pkgd.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/imagesloaded.pkgd.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/masonry.pkgd.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.counterup.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/slick.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/wow.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/script.js') ?>"></script>
	
</body>

</html>