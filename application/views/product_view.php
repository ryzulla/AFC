<?php
error_reporting(0);

$products = $data->result();
$items = array();
$pos = 1;
foreach ($products as $p) {
	$items[] = array('@type' => 'ListItem', 'position' => $pos++, 'url' => site_url('product/'.$p->product_slug), 'name' => $p->product_title);
}
$jsonld = '<script type="application/ld+json">'.json_encode(array(
	'@context' => 'https://schema.org', '@type' => 'ItemList',
	'name' => $judul.' | '.$site_name, 'url' => $canonical,
	'itemListElement' => $items,
), JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>';

$robots = isset($robots) ? $robots : 'index,follow';
$this->load->view('partials/head', array(
	'p_jsonld'    => $jsonld,
	'p_title'     => $judul.' | '.$site_name,
	'p_desc'      => 'Daftar produk kesehatan resmi AFC Store Indonesia: Subarashi, SOP 100, Utsukushhii, dan lainnya. Produk asli, harga terbaik, pengiriman ke seluruh Indonesia.',
	'p_canonical' => (isset($canonical) ? $canonical : site_url('product')),
	'p_robots'    => $robots,
	'p_extracss'  => array('product.css'),
));
?>
			<section class="page-section small-section">
				<div class="container relative afc-shop">
					<div class="afc-shop-head">
						<h1><?php echo $judul;?></h1>
						<p>Produk kesehatan asli &amp; resmi AFC. Pesan mudah via WhatsApp, dikirim ke seluruh Indonesia.</p>
					</div>

					<div class="afc-grid">
						<?php foreach ($products as $row):?>
						<article class="afc-card wow fadeIn">
							<a class="afc-card-media" href="<?php echo site_url('product/'.$row->product_slug);?>" title="<?php echo htmlspecialchars($row->product_title, ENT_QUOTES);?>">
								<img loading="lazy" src="<?php echo base_url().'assets/images/thumb/'.$row->product_image;?>" alt="<?php echo htmlspecialchars($row->product_title, ENT_QUOTES);?>">
							</a>
							<div class="afc-card-body">
								<h2 class="afc-card-title"><a href="<?php echo site_url('product/'.$row->product_slug);?>"><?php echo $row->product_title;?></a></h2>
								<div class="afc-card-price">Rp <?php echo $row->product_price;?></div>
								<div class="afc-card-foot">
									<span class="afc-views"><i class="fa fa-eye"></i><?php echo $row->product_views;?></span>
									<a class="afc-btn afc-btn-outline afc-btn-sm" href="<?php echo site_url('product/'.$row->product_slug);?>">Lihat Detail</a>
								</div>
							</div>
						</article>
						<?php endforeach;?>
					</div>

					<!--pagination-->
					<?php echo $page;?>
				</div>
			</section>
<?php $this->load->view('partials/foot'); ?>
