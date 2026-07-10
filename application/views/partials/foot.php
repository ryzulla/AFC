<?php
/**
 * Template FOOT terpusat.
 * Dipanggil: $this->load->view('partials/foot', array(...));
 *
 * Parameter (opsional):
 *   p_extrajs    : array nama file js di theme/js/ (mis. ['slick.min.js'])
 *   p_footinline : HTML/script inline tambahan sebelum </body>
 *
 * Variabel controller yang dipakai bila ada: $footer.
 *
 * CATATAN OPTIMASI:
 * Plugin berat yang TIDAK dipakai di front-end sudah dibuang dari core
 * (isotope, masonry, magnific-popup, parallax, imagesloaded, waypoints,
 * counterup). "slick" hanya dimuat di halaman yang butuh (home) lewat
 * p_extrajs. Karena theme/js/script.js memanggil plugin tanpa pengecekan,
 * ada blok STUB no-op di bawah supaya script.js tetap jalan walau plugin
 * tsb tidak dimuat.
 */
$p_extrajs    = isset($p_extrajs)    ? (array) $p_extrajs : array();
$p_footinline = isset($p_footinline) ? $p_footinline : '';

/*
 * JS inti kini digabung + di-minify jadi 1 file: theme/js/core.bundle.min.js
 * Isinya (urut): jquery-2.2.4, jquery.easing, bootstrap, jquery.viewport.mini,
 * jquery.scrollTo, jquery.localScroll, jquery.sticky, jquery.fitvids,
 * imagesloaded.pkgd (WAJIB: dipakai script.js untuk menyembunyikan preloader),
 * wow, lib/arcontactus, lib/script.
 * Untuk membangun ulang setelah mengubah salah satu file di atas, jalankan
 * kembali perintah terser (lihat catatan di akhir file).
 */
?>
			<?php echo isset($footer) ? $footer : ''; ?>
		</main>
	</div><!-- /#top -->

	<!-- Modal Search -->
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

	<!-- JS inti (gabungan + minified) -->
	<script src="<?php echo base_url('theme/js/core.bundle.min.js'); ?>"></script>
	<!-- JS khusus halaman -->
	<?php foreach ($p_extrajs as $js): ?>
	<script src="<?php echo base_url('theme/js/'.$js); ?>"></script>
	<?php endforeach; ?>
	<!-- Stub no-op: cegah error di script.js untuk plugin yang sengaja tidak dimuat -->
	<script>
	(function($){
		if(!$) return;
		var noop = function(){ return this; };
		['slick','isotope','masonry','magnificPopup','counterUp','parallax','waypoint'].forEach(function(m){
			if(!$.fn[m]) $.fn[m] = noop;
		});
		if(!$.magnificPopup) $.magnificPopup = { open: noop, close: noop };
	})(window.jQuery);
	</script>
	<!-- Init tema (harus paling akhir) -->
	<script src="<?php echo base_url('theme/js/script.min.js'); ?>"></script>
	<?php echo $p_footinline; ?>
</body>
</html>
<?php
/*
 * ============================================================================
 * CARA MEMBANGUN ULANG BUNDEL (jalankan dari root project bila mengubah aset):
 *
 * CSS:
 *   cd theme/css && npx clean-css-cli@5 -O2 --inline local -o core.bundle.min.css \
 *     bootstrap.min.css style.css padding-margin.css font-awesome.min.css lib/arcontactus.css
 *
 * JS inti:
 *   cd theme/js && npx terser@5 \
 *     jquery-2.2.4.min.js jquery.easing.min.js bootstrap.min.js jquery.viewport.mini.js \
 *     jquery.scrollTo.min.js jquery.localScroll.min.js jquery.sticky.js jquery.fitvids.js \
 *     imagesloaded.pkgd.min.js wow.min.js lib/arcontactus.js lib/script.js \
 *     -o core.bundle.min.js --compress --mangle
 *
 * Init tema:
 *   cd theme/js && npx terser@5 script.js -o script.min.js --compress --mangle
 * ============================================================================
 */
?>
