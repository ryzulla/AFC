<?php
// Script Redirect ke WA agar tetap terdeteksi sebagai trafik domain sendiri
$nomor_wa = "628111797970"; // Ganti dengan nomor Anda
$pesan = "Halo AFC Store, saya melihat iklan video Anda dan ingin tanya tentang SOP Subarashi.";
$wa_url = "https://api.whatsapp.com/send/?phone=" . $nomor_wa . "&text=" . urlencode($pesan);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menghubungkan ke WhatsApp Resmi...</title>
    <script type="text/javascript">
        window.location.href = "<?php echo $wa_url; ?>";
    </script>
    <meta http-equiv="refresh" content="1;url=<?php echo $wa_url; ?>">
</head>
<body style="font-family: Arial, sans-serif; text-align: center; padding-top: 50px;">
    <p>Sedang menghubungkan ke WhatsApp Admin AFC...</p>
    <p>Jika tidak terbuka otomatis, <a href="<?php echo $wa_url; ?>">klik di sini</a>.</p>
</body>
</html>