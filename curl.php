<?php
$login_email = 'froty.a7';
$login_pass = '010196100514';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.facebook.com/login.php');
curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.urlencode($login_email).'&pass='.urlencode($login_pass).'&login=Login');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "1cookies.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "1cookies.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36");
curl_setopt($ch, CURLOPT_REFERER, "http://www.facebook.com");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
$page = curl_exec($ch) or die(curl_error($ch));
echo $page;
?>