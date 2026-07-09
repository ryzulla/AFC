<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Page Title -->
		<title><?php echo $title;?></title>
		
		<!-- Page header -->
		<meta charset="utf-8"/>	
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="author" content=""/>
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chromte=1'><![endif]-->
		<meta name="viewport" content="width=device-width"/>
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css')?>"/>
		<!-- <link rel="stylesheet" href="<?php echo base_url('theme/css/WA.css')?>"/> -->
		<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css')?>"/>
		<link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css')?>"/>
		<link href='<?php echo base_url() . 'theme/css/lib/arcontactus.css' ?>' rel='stylesheet'/>
		<!-- Favicons -->		
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<link href="<?php echo base_url().'theme/css/jssocials.css'?>" rel="stylesheet">
		<link href="<?php echo base_url().'theme/css/jssocials-theme-flat.css'?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/>
		<!-- SEO Tags -->
		<meta name="description" content="<?php echo $description;?>"/>
		<link rel="canonical" href="<?php echo site_url('product/'.$slug);?>" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php echo $title;?>" />
		<meta property="og:description" content="<?php echo $description;?>" />
		<meta property="og:url" content="<?php echo site_url('product/'.$slug);?>" />
		<meta property="og:site_name" content="<?php echo $site_name;?>" />
		<meta property="article:publisher" content="<?php echo $site_facebook;?>" />
		<meta property="article:section" content="<?php echo $category;?>" />
		<meta property="og:image" content="<?php echo base_url().'assets/images/'.$image;?>" />
		<meta property="og:image:secure_url" content="<?php echo base_url().'assets/images/'.$image;?>" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:description" content="<?php echo $description;?>" />
		<meta name="twitter:title" content="<?php echo $title;?>" />
		<meta name="twitter:site" content="<?php echo $site_twitter;?>" />
		<meta name="twitter:image" content="<?php echo base_url().'assets/images/'.$image;?>" />
		<!-- / End SEO Tags. -->
		<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QQRJXKRN9M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QQRJXKRN9M');
  gtag('config', 'AW-16562056140');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9402613678162601" crossorigin="anonymous"></script>
	</head>
	<body class="content-animate">

		<!-- PRELOADER
		==================================================-->	
		<div class="page-loader">
			<div class="loader-area"></div>
			<div class="loader font-face1">loading...	
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
					
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<!-- SECTION BLOG ITEM
								================================================== -->
								<div class="blog-item clearfix">						
									
									<!--POST TITLE-->
									<center>
										<h3 class="mt-0 font-face1 fw700"><?php echo $title;?></h1>
										<div class="blog-item-meta font-face1">
											<span><a href="javascript:void(0)"><i class="fa fa-calendar-o"></i> <?php echo date('d M Y',strtotime($date));?></a></span>
											<span class="separator">&vert;</span>
											<span><a href="javascript:void(0)"><i class="fa fa-user"></i> <?php echo $author;?></a></span>
											<!-- <span class="separator">&vert;</span> -->
											<!-- <span><a href="<?php echo site_url('category/'.$category_slug);?>"><i class="fa fa-folder-open"></i> <?php echo $category;?></a></span> -->
											<span class="separator">&vert;</span>
											<span><a href="javascript:void(0)"><i class="fa fa-eye"></i> <?php echo number_format($views).' views';?></a></span>
											<span class="separator">&vert;</span>
											<span><a href="javascript:void(0)"><i class="fa fa-comments"></i> <?php echo number_format($comment);?> Disscussion</a></span>
										</div>
										<div class="row">
                                        <div class="col-md-12">
                                            <div class="blog-media">
                                                <img alt="" src="<?php echo base_url().'assets/images/'.$image;?>" width="80%">
												<h4 class="center">Rp.  <?=$price;?></h4>
                                            </div>
                                            
                                        </div>
                                        
									</center>
									<div class="col-md-12">
                                            <div class="blog-item-body light-text clearfix">
                                                <?php echo $content;?>
                                            </div>
									</div>
								</div>
									
									
									<!--POST META-->
									
									
									
									<!--POST MEDIA-->
									
									
									<!--POST TAG-->
									
									
								
									<!--POST COMMENT-->
									<div class="comments-heading text-center mb-30 mt-60">
										<hgroup>
											<h2 class="font-face1 section-heading"><?php echo $comment;?> Diskusi</h2>
				
										</hgroup>									
									</div>
									
									<!-- Comment First level -->
									<ul class="comments-list mb-100 mb-md-80 mb-sm-60 clearfix">
									<?php foreach ($show_comments->result() as $row):?>
										<li class="comment">
											<div class="comment-body clearfix">
												<div class="lp1 font-face1">
													<span class="user-avatar float-left hidden-xs">
														<img alt="" src="<?php echo base_url().'assets/images/'.$row->comment_image;?>">  
													</span>
													<div class="comment-user">
														<a href="javascript:void(0)"><?php echo $row->comment_name;?></a>
													</div>
													<div class="comment-date">
														<span><?php echo date('d M Y H:i:s',strtotime($row->comment_date));?></span>
													</div>									
												</div>										
												<div class="comment-inner light-text">      
													<p><?php echo $row->comment_message;?></p>
												</div>  
											</div>    
											<!-- Comment children second level -->
											<?php
												$comment_id=$row->comment_id;
												$query = $this->db->query("SELECT * FROM tbl_comment_product WHERE comment_status='1' AND comment_parent='$comment_id'");
												foreach ($query->result() as $i) :
											?>
											<ul class="children">
												<li class="comment">
													<div class="comment-body clearfix">
														<div class="lp1 font-face1">
															<span class="user-avatar float-left hidden-xs">
																<img alt="" src="<?php echo base_url().'assets/images/'.$i->comment_image;?>">  
															</span>
															<div class="comment-user">
																<a href="javascript:void(0)"><?php echo $i->comment_name;?></a>
															</div>
															<div class="comment-date">
																<span><?php echo date('d M Y H:i:s',strtotime($i->comment_date));?></span>
															</div>									
														</div>										
														<div class="comment-inner light-text">      
															<p><?php echo $i->comment_message;?></p>
														</div>  
													</div>    
												</li>
											</ul>
											<!-- Comment children second level -->
											<?php endforeach;?>
											
										</li>
									<?php endforeach;?>

									</ul>
									<!-- End Comment First level -->
									
									<!--POST LEAVE COMMENT-->
									<div class="comments-heading text-center mb-30">
										<hgroup>
											<h2 class="font-face1 section-heading">Leave a disscuss</h2>
										</hgroup>									
									</div>
									<?php echo $this->session->flashdata('msg');?>
									<form method="post" action="<?php echo site_url('send_comment_product');?>" role="form" class="form">
										<div class="row">
											<input type="hidden" name="product_id" value="<?php echo $product_id;?>" required>
                        					<input type="hidden" name="slug" value="<?php echo $slug;?>" required>
											<div class="col-md-6">
												<div class="form-group">
													 <input type="text" name="name" class="full_width" placeholder="Name *" maxlength="100" required="">										
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" name="email" class="full_width" placeholder="Email *" maxlength="100" required="">									
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="comment" class="full_width" rows="6" placeholder="Comment *" maxlength="400" required></textarea>										
												</div>
											</div>
											<div class="col-md-12 center-xs">
												<button type="submit" class="btn bg-black white-color">
													Submit comment
												</button>
											</div>	
										</div>		
									</form>
									<!--END POST LEAVE COMMENT-->
									
								</div>
							
							</div>
						</div>
					</div>					
				</section>								
				
				
				
				<hr class="nomargin nopadding"/>
				
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
			
		<!-- JAVASCRIPT
		==================================================-->
		<script src="<?php echo base_url('theme/js/jquery-2.2.4.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/lib/arcontactus.js')?>"></script>
    	<script src="<?php echo base_url('theme/js/lib/script.js')?>"></script>
		<!-- <script src="<?php echo base_url('theme/js/WA.js')?>"></script> -->
		<script src="<?php echo base_url('theme/js/jquery.easing.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/waypoints.min.js')?>"></script>		
		<script src="<?php echo base_url('theme/js/jquery.scrollTo.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.localScroll.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.viewport.mini.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.sticky.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.fitvids.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.parallax-1.1.3.js')?>"></script>
		<script src="<?php echo base_url('theme/js/isotope.pkgd.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/imagesloaded.pkgd.min.js')?>"></script> 
		<script src="<?php echo base_url('theme/js/masonry.pkgd.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.magnific-popup.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jquery.counterup.min.js')?>"></script>					
		<script src="<?php echo base_url('theme/js/slick.min.js')?>"></script>
		<script src="<?php echo base_url('theme/js/wow.min.js')?>"></script>		
		<script src="<?php echo base_url('theme/js/script.js')?>"></script>
		<script src="<?php echo base_url('theme/js/jssocials.min.js')?>"></script>	
		<script>
		$(document).ready(function(){
			$(".SocialShareArticle").jsSocials({
                    showCount: false,
                    showLabel: true,
                    shareIn: "popup",
                    shares: [
                    { share: "twitter", label: "Twitter" },
                    { share: "facebook", label: "Facebook" },
                    { share: "whatsapp", label: "WhatsApp" },
                    { share: "linkedin", label: "Linked In" }
                    ]
            });
		});
	</script>
	</body>
</html>