<?php
error_reporting(0);
$headextra = '';
if (!empty($url_prev)) $headextra .= '<link rel="prev" href="'.$url_prev.'" />';
if (!empty($url_next)) $headextra .= '<link rel="next" href="'.$url_next.'" />';

$posts = $data->result();
$items = array();
$pos = 1;
foreach ($posts as $p) {
	$items[] = array('@type' => 'ListItem', 'position' => $pos++, 'url' => site_url('blog/'.$p->post_slug), 'name' => $p->post_title);
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
	'p_desc'      => 'Baca artikel kesehatan terbaru dari AFC Store Indonesia. Informasi lengkap tentang produk AFC, Subarashi, SOP, Utsukushhii, dan tips hidup sehat.',
	'p_canonical' => $canonical,
	'p_robots'    => $robots,
	'p_headextra' => $headextra,
));
?>
			<section class="page-section small-section">
				<div class="container relative">
					<div class="row"><div class="col-md-12"><h1 class="heading5 mt-0 mb-30 font-face1 fw700"><?php echo $judul;?></h1></div></div>
					<div class="row multi-columns-row">
						<?php foreach ($posts as $row):?>
						<div class="col-md-4 col-sm-6 mb-30 wow fadeIn">
							<article>
								<a class="articles-card" href="<?php echo site_url('blog/'.$row->post_slug);?>" title="<?php echo $row->post_title;?>">
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
<?php $this->load->view('partials/foot'); ?>
