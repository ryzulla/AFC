<?php
// Structured Data (Schema.org)
$ld = array(
	'@context'    => 'https://schema.org',
	'@type'       => 'Product',
	'name'        => $title,
	'description' => $description,
	'image'       => base_url().'assets/images/'.$image,
	'sku'         => (string)$product_id,
	'brand'       => array('@type' => 'Brand', 'name' => 'AFC'),
	'offers'      => array(
		'@type'         => 'Offer',
		'priceCurrency' => 'IDR',
		'price'         => preg_replace('/[^0-9]/', '', $price),
		'availability'  => 'https://schema.org/InStock',
		'url'           => site_url('product/'.$slug),
	),
);
$breadcrumb = array(
	'@context'        => 'https://schema.org',
	'@type'           => 'BreadcrumbList',
	'itemListElement' => array(
		array('@type' => 'ListItem', 'position' => 1, 'name' => 'Beranda', 'item' => site_url()),
		array('@type' => 'ListItem', 'position' => 2, 'name' => 'Produk',  'item' => site_url('product')),
		array('@type' => 'ListItem', 'position' => 3, 'name' => $title,     'item' => site_url('product/'.$slug)),
	),
);
$jsonld = '<script type="application/ld+json">'.json_encode($ld, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>'
        . '<script type="application/ld+json">'.json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>';

$headextra = '<meta property="product:price:amount" content="'.preg_replace('/[^0-9]/', '', $price).'" />'
           . '<meta property="product:price:currency" content="IDR" />';

$footinline = '<script>
$(document).ready(function(){
	$(".SocialShareArticle").jsSocials({
		showCount: false,
		showLabel: false,
		shareIn: "popup",
		shares: [ "facebook", "whatsapp", "twitter", "linkedin" ]
	});
});
</script>';

// Link pesan WhatsApp dengan nama produk terisi otomatis
$wa_text = 'Halo, saya tertarik memesan produk *'.$title.'* (Rp '.$price.') di AFC Store. Apakah masih tersedia?';
$wa_link = 'https://api.whatsapp.com/send/?phone=628111797970&text='.rawurlencode($wa_text).'&type=phone_number&app_absent=0';

$this->load->view('partials/head', array(
	'p_title'     => $title.' | '.$site_name,
	'p_desc'      => $description,
	'p_keywords'  => $keyword_focus,
	'p_canonical' => site_url('product/'.$slug),
	'p_ogtype'    => 'product',
	'p_ogimage'   => base_url('assets/images/'.$image),
	'p_jsonld'    => $jsonld,
	'p_headextra' => $headextra,
	'p_extracss'  => array('product.css', 'jssocials.css', 'jssocials-theme-flat.css'),
));
?>
			<section class="page-section small-section">
				<div class="container relative afc-shop afc-product-detail">

					<nav class="afc-breadcrumb" aria-label="breadcrumb">
						<a href="<?php echo site_url();?>">Beranda</a>
						<span class="sep">/</span>
						<a href="<?php echo site_url('product');?>">Produk</a>
						<span class="sep">/</span>
						<span class="current"><?php echo $title;?></span>
					</nav>

					<div class="afc-detail-grid">
						<!-- Media -->
						<div class="afc-detail-media">
							<img loading="lazy" src="<?php echo base_url().'assets/images/'.$image;?>" alt="<?php echo htmlspecialchars($title, ENT_QUOTES);?>">
						</div>

						<!-- Info -->
						<div class="afc-detail-info">
							<?php if(!empty($category)):?><span class="afc-badge"><?php echo $category;?></span><?php endif;?>
							<h1 class="afc-detail-title"><?php echo $title;?></h1>
							<div class="afc-detail-meta">
								<span><i class="fa fa-eye"></i><?php echo number_format($views);?> dilihat</span>
								<span><i class="fa fa-comments"></i><?php echo number_format($comment);?> diskusi</span>
								<span><i class="fa fa-calendar-o"></i><?php echo date('d M Y',strtotime($date));?></span>
							</div>
							<div class="afc-detail-price">Rp <?php echo $price;?><small>Harga sudah termasuk konsultasi gratis</small></div>

							<div class="afc-cta">
								<a class="afc-btn afc-btn-wa afc-btn-block" href="<?php echo $wa_link;?>" target="_blank" rel="nofollow">
									<i class="fa fa-whatsapp"></i> Pesan via WhatsApp
								</a>
							</div>

							<ul class="afc-trust">
								<li><i class="fa fa-check-circle"></i> Produk 100% asli &amp; resmi AFC</li>
								<li><i class="fa fa-truck"></i> Pengiriman ke seluruh Indonesia</li>
								<li><i class="fa fa-comments-o"></i> Gratis konsultasi kesehatan</li>
							</ul>

							<div class="afc-share">
								<span>Bagikan:</span>
								<div class="SocialShareArticle"></div>
							</div>
						</div>
					</div>

					<!-- Deskripsi -->
					<div class="afc-detail-desc">
						<h2 class="afc-section-title">Deskripsi Produk</h2>
						<div class="afc-desc-body"><?php echo $content;?></div>
					</div>

					<!-- Produk terkait -->
					<?php if(isset($related_product) && $related_product->num_rows() > 0):?>
					<div class="afc-related">
						<h2 class="afc-section-title">Produk Terkait</h2>
						<div class="afc-grid afc-grid-related">
							<?php foreach ($related_product->result() as $rel):?>
							<article class="afc-card">
								<a class="afc-card-media" href="<?php echo site_url('product/'.$rel->product_slug);?>" title="<?php echo htmlspecialchars($rel->product_title, ENT_QUOTES);?>">
									<img loading="lazy" src="<?php echo base_url().'assets/images/thumb/'.$rel->product_image;?>" alt="<?php echo htmlspecialchars($rel->product_title, ENT_QUOTES);?>">
								</a>
								<div class="afc-card-body">
									<h2 class="afc-card-title"><a href="<?php echo site_url('product/'.$rel->product_slug);?>"><?php echo $rel->product_title;?></a></h2>
									<div class="afc-card-price">Rp <?php echo $rel->product_price;?></div>
									<div class="afc-card-foot">
										<span class="afc-views"><i class="fa fa-eye"></i><?php echo $rel->product_views;?></span>
										<a class="afc-btn afc-btn-outline afc-btn-sm" href="<?php echo site_url('product/'.$rel->product_slug);?>">Detail</a>
									</div>
								</div>
							</article>
							<?php endforeach;?>
						</div>
					</div>
					<?php endif;?>

					<!-- Diskusi -->
					<div class="afc-discuss">
						<h2 class="afc-section-title"><?php echo number_format($comment);?> Diskusi</h2>

						<ul class="afc-comments">
						<?php foreach ($show_comments->result() as $row):?>
							<li class="comment">
								<div class="c-head">
									<img class="c-avatar" loading="lazy" src="<?php echo base_url().'assets/images/'.$row->comment_image;?>" alt="<?php echo htmlspecialchars($row->comment_name, ENT_QUOTES);?>">
									<div>
										<div class="c-name"><?php echo $row->comment_name;?></div>
										<div class="c-date"><?php echo date('d M Y H:i',strtotime($row->comment_date));?></div>
									</div>
								</div>
								<p class="c-body"><?php echo $row->comment_message;?></p>
								<?php
									$comment_id=$row->comment_id;
									$query = $this->db->query("SELECT * FROM tbl_comment_product WHERE comment_status='1' AND comment_parent='$comment_id'");
									if($query->num_rows() > 0):
								?>
								<ul class="children">
									<?php foreach ($query->result() as $i):?>
									<li class="comment">
										<div class="c-head">
											<img class="c-avatar" loading="lazy" src="<?php echo base_url().'assets/images/'.$i->comment_image;?>" alt="<?php echo htmlspecialchars($i->comment_name, ENT_QUOTES);?>">
											<div>
												<div class="c-name"><?php echo $i->comment_name;?></div>
												<div class="c-date"><?php echo date('d M Y H:i',strtotime($i->comment_date));?></div>
											</div>
										</div>
										<p class="c-body"><?php echo $i->comment_message;?></p>
									</li>
									<?php endforeach;?>
								</ul>
								<?php endif;?>
							</li>
						<?php endforeach;?>
						<?php if($show_comments->num_rows() == 0):?>
							<li class="afc-empty">Belum ada diskusi. Jadilah yang pertama bertanya!</li>
						<?php endif;?>
						</ul>

						<h3 class="afc-section-title" style="font-size:18px;">Tinggalkan Pertanyaan</h3>
						<?php echo $this->session->flashdata('msg');?>
						<form class="afc-form" method="post" action="<?php echo site_url('send_comment_product');?>" role="form">
							<input type="hidden" name="product_id" value="<?php echo $product_id;?>" required>
							<input type="hidden" name="slug" value="<?php echo $slug;?>" required>
							<div class="row-2">
								<input type="text" name="name" placeholder="Nama *" maxlength="100" required>
								<input type="email" name="email" placeholder="Email *" maxlength="100" required>
							</div>
							<textarea name="comment" placeholder="Tulis pertanyaan atau komentar Anda *" maxlength="400" required></textarea>
							<button type="submit" class="afc-btn afc-btn-primary">Kirim</button>
						</form>
					</div>

				</div>
			</section>
<?php $this->load->view('partials/foot', array(
	'p_extrajs'    => array('jssocials.min.js'),
	'p_footinline' => $footinline,
)); ?>
