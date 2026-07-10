<?php
// Structured Data (Schema.org)
$ld = array(
	'@context'         => 'https://schema.org',
	'@type'            => 'BlogPosting',
	'mainEntityOfPage' => site_url('blog/'.$slug),
	'headline'         => $title,
	'description'      => $description,
	'image'            => base_url().'assets/images/'.$image,
	'datePublished'    => date('c', strtotime($date)),
	'dateModified'     => date('c', strtotime($date)),
	'author'           => array('@type' => 'Person', 'name' => $author),
	'publisher'        => array(
		'@type' => 'Organization',
		'name'  => $site_name,
		'logo'  => array(
			'@type' => 'ImageObject',
			'url'   => base_url('theme/images/'.$site_image),
		),
	),
);
$breadcrumb = array(
	'@context'        => 'https://schema.org',
	'@type'           => 'BreadcrumbList',
	'itemListElement' => array(
		array('@type' => 'ListItem', 'position' => 1, 'name' => 'Beranda', 'item' => site_url()),
		array('@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',    'item' => site_url('blog')),
		array('@type' => 'ListItem', 'position' => 3, 'name' => $title,    'item' => site_url('blog/'.$slug)),
	),
);
$jsonld = '<script type="application/ld+json">'.json_encode($ld, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>'
        . '<script type="application/ld+json">'.json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>';

$headextra = '<meta property="article:publisher" content="'.$site_facebook.'" />'
           . '<meta property="article:section" content="'.htmlspecialchars($category, ENT_QUOTES).'" />'
           . '<meta property="article:published_time" content="'.date('c', strtotime($date)).'" />'
           . '<meta property="article:modified_time" content="'.date('c', strtotime($date)).'" />';

$footinline = '<script>
$(document).ready(function(){
	$(".SocialShareArticle").jsSocials({
		showCount: false,
		showLabel: true,
		shareIn: "popup",
		shares: [
			{ share: "facebook", label: "Facebook" },
			{ share: "whatsapp", label: "WhatsApp" }
		]
	});
});
</script>';

$this->load->view('partials/head', array(
	'p_title'     => $title.' | '.$site_name,
	'p_desc'      => $description,
	'p_keywords'  => $keyword_focus,
	'p_canonical' => site_url('blog/'.$slug),
	'p_ogtype'    => 'article',
	'p_ogimage'   => base_url('assets/images/'.$image),
	'p_jsonld'    => $jsonld,
	'p_headextra' => $headextra,
	'p_extracss'  => array('jssocials.css', 'jssocials-theme-flat.css'),
));
?>
			<section class="page-section">
				<div class="container relative">
					<div class="row">
						<div class="col-md-12">
							<div class="blog-item clearfix">
								<!--POST TITLE-->
								<h1 class="heading5 mt-0 font-face1 fw700"><?php echo $title;?></h1>

								<!--POST BODY-->
								<div class="blog-item-body light-text clearfix">
									<?php echo $content;?>
								</div>

								<!--SHARE-->
								<div class="post-meta-section clearfix">
									<div class="float-right">
										<div class="SocialShareArticle" style="color: #fff;font-size: 10px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<hr class="nomargin nopadding"/>
<?php $this->load->view('partials/foot', array(
	'p_extrajs'    => array('jssocials.min.js'),
	'p_footinline' => $footinline,
)); ?>
