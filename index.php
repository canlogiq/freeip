<?php
// Proxy IP'sini al
$proxy_ip = isset($_GET['proxy_ip']) ? $_GET['proxy_ip'] : 'Unknown';

// Mevcut IP'yi al
$current_ip = $_SERVER['REMOTE_ADDR'];

// Sonuç
if ($current_ip == $proxy_ip) {
    $status = "true";
} else {
    $status = "false";
}

// Title olarak sonucu döndür
echo "<html><head><title>$status</title></head><body></body></html>";
echo $current_ip;
echo $proxy_ip;
?>
