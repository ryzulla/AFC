<?php
/**
 * Template HEAD terpusat.
 * Dipanggil: $this->load->view('partials/head', array(...));
 *
 * Parameter (semua opsional, prefix p_ agar tidak bentrok dgn variabel controller):
 *   p_title      : judul <title> & og:title
 *   p_desc       : meta description & og:description
 *   p_keywords   : meta keywords
 *   p_canonical  : URL canonical (default: site_url() halaman aktif)
 *   p_ogtype     : og:type (default 'website')
 *   p_ogimage    : URL gambar og (default: logo situs)
 *   p_ogurl      : og:url (default = canonical)
 *   p_jsonld     : blok <script type="application/ld+json"> mentah
 *   p_analytics  : blok tracking mentah (default: gtag + adsense umum)
 *   p_headextra  : HTML tambahan di dalam <head> (font, inline style, dll)
 *   p_extracss   : array nama file css di theme/css/ (mis. ['slick.css'])
 *   p_loader     : tampilkan preloader (default FALSE)
 *   p_mainclass  : class untuk <main> (default 'cd-main-content mt-100')
 *
 * Variabel dari controller yang dipakai bila tersedia: $header, $icon,
 * $site_name, $site_image, $site_twitter.
 */

$site_name_v = isset($site_name)  ? $site_name  : 'AFC Store Indonesia';
$site_tw_v   = isset($site_twitter) ? $site_twitter : '';
$logo_img    = isset($site_image) ? base_url('theme/images/'.$site_image) : base_url('theme/images/afc-logo.png');

$p_title     = isset($p_title)     ? $p_title     : $site_name_v;
$p_desc      = isset($p_desc)      ? $p_desc      : 'AFC Store Indonesia - Distributor resmi produk kesehatan AFC: Subarashi, SOP, Utsukushhii.';
$p_keywords  = isset($p_keywords)  ? $p_keywords  : 'AFC, AFC Official, AFC Store, AFC Store Indonesia, Subarashi, SOP Subarashi, Utsukushhii';
$p_canonical = isset($p_canonical) ? $p_canonical : current_url();
$p_ogtype    = isset($p_ogtype)    ? $p_ogtype    : 'website';
$p_ogimage   = isset($p_ogimage)   ? $p_ogimage   : $logo_img;
$p_ogurl     = isset($p_ogurl)     ? $p_ogurl     : $p_canonical;
$p_jsonld    = isset($p_jsonld)    ? $p_jsonld    : '';
$p_headextra = isset($p_headextra) ? $p_headextra : '';
$p_robots    = isset($p_robots)    ? $p_robots    : 'index,follow';
$p_extracss  = isset($p_extracss)  ? (array) $p_extracss : array();
$p_loader    = isset($p_loader)    ? $p_loader    : FALSE;
$p_mainclass = isset($p_mainclass) ? $p_mainclass : 'cd-main-content mt-100';
$icon_v      = isset($icon) ? $icon : 'favicon.png';

// Blok analytics default (dipakai mayoritas halaman). Halaman dgn tracking
// berbeda (mis. contact) mengirim p_analytics sendiri.
$p_analytics = isset($p_analytics) ? $p_analytics : '
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QQRJXKRN9M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());
  gtag(\'config\', \'G-QQRJXKRN9M\');
  gtag(\'config\', \'AW-16562056140\');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9402613678162601" crossorigin="anonymous"></script>';
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- SEO -->
	<title><?php echo $p_title; ?></title>
	<meta name="description" content="<?php echo htmlspecialchars($p_desc, ENT_QUOTES); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars($p_keywords, ENT_QUOTES); ?>" />
	<meta name="robots" content="<?php echo $p_robots; ?>" />
	<link rel="canonical" href="<?php echo $p_canonical; ?>" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="<?php echo $p_ogtype; ?>" />
	<meta property="og:title" content="<?php echo htmlspecialchars($p_title, ENT_QUOTES); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars($p_desc, ENT_QUOTES); ?>" />
	<meta property="og:url" content="<?php echo $p_ogurl; ?>" />
	<meta property="og:site_name" content="<?php echo htmlspecialchars($site_name_v, ENT_QUOTES); ?>" />
	<meta property="og:image" content="<?php echo $p_ogimage; ?>" />
	<meta property="og:image:secure_url" content="<?php echo $p_ogimage; ?>" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo htmlspecialchars($p_title, ENT_QUOTES); ?>" />
	<meta name="twitter:description" content="<?php echo htmlspecialchars($p_desc, ENT_QUOTES); ?>" />
	<meta name="twitter:site" content="<?php echo $site_tw_v; ?>" />
	<meta name="twitter:image" content="<?php echo $p_ogimage; ?>" />
	<?php echo $p_jsonld; ?>

	<!-- Preconnect (percepat koneksi ke domain pihak ketiga) -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link rel="dns-prefetch" href="https://pagead2.googlesyndication.com">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon_v); ?>">

	<!-- CSS gabungan (bootstrap + style + plugin-combine + padding-margin + font-awesome + arcontactus) -->
	<link rel="stylesheet" href="<?php echo base_url('theme/css/core.bundle.min.css'); ?>"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400i,700&display=swap"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:400,500,600,700,900&display=swap"/>
	<?php foreach ($p_extracss as $css): ?>
	<link rel="stylesheet" href="<?php echo base_url('theme/css/'.$css); ?>"/>
	<?php endforeach; ?>

	<?php echo $p_headextra; ?>

	<!-- Analytics -->
	<?php echo $p_analytics; ?>
</head>
<body class="content-animate">
<?php if ($p_loader): ?>
	<div class="page-loader">
		<div class="loader-area"></div>
		<div class="loader font-face1">loading...</div>
	</div>
<?php endif; ?>

	<div id='arcontactus'></div>

	<div id="top" class="page">
		<?php echo isset($header) ? $header : ''; ?>
		<main class="<?php echo $p_mainclass; ?>">
