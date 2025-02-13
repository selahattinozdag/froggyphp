<?php
set_time_limit(0); // PHP'nin zaman aşımını kapat
ini_set('memory_limit', '-1'); // Bellek sınırını kaldır
header("Content-Type: audio/mpeg");
header("Connection: keep-alive");
header("Accept-Ranges: bytes");

$radio_url = "https://prod-44-202-242-101.amperwave.net/audacy-wggyfmaac-imc";
header("Content-Type: audio/mpeg");
$handle = fopen($radio_url, "rb");
if ($handle) {
    while (!feof($handle)) {
        echo fread($handle, 8192);
        flush();
        ob_flush();
    }
    fclose($handle);
}
?>
