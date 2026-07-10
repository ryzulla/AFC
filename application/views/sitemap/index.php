<?php
header('Content-type: application/xml; charset=UTF-8', true);
$datetime1 = new DateTime(date('Y-m-d H:i:s'));
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc><?= base_url() ?></loc>
<lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
<changefreq>daily</changefreq>
<priority>1.0</priority>
</url>
<?php foreach($url->result() as $row) { ?>
<url>
<loc><?= base_url($row->navbar_slug) ?></loc>
<lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
<changefreq>weekly</changefreq>
<priority>0.8</priority>
</url>
<?php } ?>
<?php if (isset($posts)) { foreach($posts->result() as $row) { ?>
<url>
<loc><?= base_url('blog/'.$row->post_slug) ?></loc>
<lastmod><?= (new DateTime($row->post_date))->format(DATE_ATOM); ?></lastmod>
<changefreq>monthly</changefreq>
<priority>0.6</priority>
</url>
<?php } } ?>
<?php if (isset($products)) { foreach($products->result() as $row) { ?>
<url>
<loc><?= base_url('product/'.$row->product_slug) ?></loc>
<lastmod><?= (new DateTime($row->product_date))->format(DATE_ATOM); ?></lastmod>
<changefreq>monthly</changefreq>
<priority>0.7</priority>
</url>
<?php } } ?>
<?php if (isset($categories)) { foreach($categories->result() as $row) { ?>
<url>
<loc><?= base_url('category/'.$row->category_slug) ?></loc>
<lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
<changefreq>weekly</changefreq>
<priority>0.5</priority>
</url>
<?php } } ?>
<?php if (isset($tags)) { foreach($tags->result() as $row) { ?>
<url>
<loc><?= base_url('tag/'.$row->tag_name) ?></loc>
<lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
<changefreq>weekly</changefreq>
<priority>0.4</priority>
</url>
<?php } } ?>
</urlset>
