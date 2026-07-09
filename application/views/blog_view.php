<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $judul;?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<!-- SEO Tags -->
	    <meta name="description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..."/>
	    <link rel="canonical" href="<?php echo $canonical;?>" />
	    <?php error_reporting(0); if(empty($url_prev)):?>
	    <?php else:?>
	    <link rel="prev" href="<?php echo $url_prev;?>" />
	    <?php endif;?>
	    <link rel="next" href="<?php echo $url_next;?>" />
	    <meta property="og:locale" content="id_ID" />
	    <meta property="og:type" content="website" />
	    <meta property="og:title" content="<?php echo $judul;?>" />
	    <meta property="og:description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..." />
	    <meta property="og:url" content="<?php echo $canonical;?>" />
	    <meta property="og:site_name" content="<?php echo $site_name;?>" />
	    <meta property="og:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <meta property="og:image:secure_url" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <meta property="og:image:width" content="560" />
	    <meta property="og:image:height" content="315" />
	    <meta name="twitter:card" content="summary_large_image" />
	    <meta name="twitter:description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..." />
	    <meta name="twitter:title" content="<?php echo $judul;?>" />
	    <meta name="twitter:site" content="<?php echo $site_twitter;?>" />
	    <meta name="twitter:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <!-- / SEO plugin. -->
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>"/>
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>"/>
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/padding-margin.css'?>"/>
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/>
		<link href='<?php echo base_url() . 'theme/css/lib/arcontactus.css' ?>' rel='stylesheet'/>
		<!-- Favicons -->		
		<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QQRJXKRN9M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16562056140');
  gtag('config', 'G-QQRJXKRN9M');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9402613678162601"
     crossorigin="anonymous"></script>
	</head>
	<body class="content-animate">

		<!-- PRELOADER
		==================================================-->	
		<div class="page-loader">
			<div class="loader-area"></div><div class="loader font-face1">Loading...		
			</div>
		</div>

		
		<div id='arcontactus'></div>
		
		<!-- PAGE
		==================================================-->	
		<div id="top" class="page">
			
			<!-- Navigation panel
			================================================== -->		
			<?php echo $header;?>
			<!-- End Navigation panel -->
		
			<!-- Main Content
			==================================================-->		
			<main class="cd-main-content mt-100">

				
				<!-- SECTION ABOUT
				================================================== 	-->	
				<section class="page-section small-section">				
					<div class="container relative">
						
						<div class="row multi-columns-row">
							
								<?php foreach ($data->result() as $row):?>					
								<div class="col-md-4 col-sm-6 mb-30 wow fadeIn">
									<article>
										<a class="articles-card" href="<?php echo site_url('blog/'.$row->post_slug);?>" title="">
											<div class="card-wrap">
												<div class="card-image">
													<div class="article-thumbnail" data-background="<?php echo base_url().'assets/images/thumb/'.$row->post_image;?>"></div>				
												</div>
												<div class="card-body text-right">
													<h2 class="heading6 lp-0 mt-0 font-face1 text-right"><?php echo $row->post_title;?></h2>
												</div>
												<div class="card-footer">
													<div class="article_author">
														<div class="portrait" data-background="<?php echo base_url().'assets/images/'.$row->user_photo;?>"></div>
														<div class="author light-text"><?php echo $row->user_name;?></div>
														<div class="date"><?php echo date('d M Y',strtotime($row->post_date));?></div>
													</div>												
												</div>
											</div>
										</a>
										<div class="like light-text"><a href="javascript:void(0)"></a> <?php echo $row->post_views.' views';?></div>
									</article>
								</div>
								<?php endforeach;?>
								
						</div>
						<!--pagination-->
						<?php echo $page;?>
					</div>					
				</section>								
				
				<!-- SECTION SUBSCRIBE
				================================================== -->
				<!-- <section  class="page-section subscribe-section small-section">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">	
								<div class="form-subscribe mb-50 mb-sm-0">
									<div class="col-sm-6 mb-sm-40">
										<h2 class="heading5 mt-0 font-face1 white-color fw700 mb-0" >Newsletter.</h2>
									</div>
									<div class="col-sm-6">										
										<form class="form-inline" action="<?php echo site_url('subscribe');?>" method="post">
											<div class="form-group">
												<input type="hidden" name="url" value="<?php echo $canonical;?>" required>
												<input type="email" name="email" required placeholder="Your Email..." class="form-control">
												<button type="submit" class="btn btn-subscribe">Subscribe</button>
											</div>
										</form>										
									</div>
								</div>
								<div><?php echo $this->session->flashdata('message');?></div>									
							</div>
						</div>
					</div>
				</section> -->
				
				
				<!-- FOOTER
				================================================== -->	
				<?php echo $footer;?>
				
				</main>		
	
		</div>


		<!-- Modal Search-->
		<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">	
		      	<form action="<?php echo site_url('search');?>" method="GET">
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
							<div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm"><?=date('d F Y')?></div>
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
			
		<script src="<?php echo base_url().'theme/js/jquery-2.2.4.min.js'?>"></script>
		<script src="<?php echo base_url('theme/js/lib/arcontactus.js')?>"></script>
    	<script src="<?php echo base_url('theme/js/lib/script.js')?>"></script>
		<!-- <script src="<?php echo base_url().'theme/js/WA.js'?>"></script> -->
		<script src="<?php echo base_url().'theme/js/jquery.easing.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>			
		<script src="<?php echo base_url().'theme/js/jquery.scrollTo.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.localScroll.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.viewport.mini.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.sticky.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.fitvids.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.parallax-1.1.3.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/isotope.pkgd.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/imagesloaded.pkgd.min.js'?>"></script> 
		<script src="<?php echo base_url().'theme/js/masonry.pkgd.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.magnific-popup.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.counterup.min.js'?>"></script>					
		<script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/wow.min.js'?>"></script>		
		<script src="<?php echo base_url().'theme/js/script.js'?>"></script>	
	</body>
</html>