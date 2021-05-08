<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'back/service.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);
echo $data;
