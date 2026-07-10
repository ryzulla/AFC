<?php
error_reporting(0);
$this->load->view('partials/head', array(
	'p_title'     => 'Tentang Kami | AFC Store Indonesia',
	'p_desc'      => 'Mengenal AFC Store Indonesia - distributor resmi produk kesehatan AFC (Subarashi, SOP, Utsukushhii). We Are Family and We Grow Together to Discover The Champion In You.',
	'p_canonical' => site_url('about'),
	'p_extrajs'   => array('jssocials.min.js'),
));
?>
			<section class="page-section">
				<div class="container relative">
					<div class="row">
						<div class="blog-item clearfix">
							<h1 class="heading5 mt-0 mb-30 font-face1 fw700" align="center">Tentang Kami</h1>
							<div class="blog-media" align="center">
								<img alt="Tentang AFC Store Indonesia" loading="lazy" style="max-width:500px;" src="<?php echo base_url() . 'theme/images/' . $about_img; ?>">
							</div>
							<!--POST BODY-->
							<div class="blog-item-body light-text clearfix">
								<?php echo $about_desc; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<hr class="nomargin nopadding"/>
<?php $this->load->view('partials/foot'); ?>
