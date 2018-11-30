<?php
$file = file_get_contents("ua.txt");
$ex = explode("\n", $file);
$au = $ex[array_rand($ex)];
echo $au;
fopen("x", "w");
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.bestchange.com/?p=691208");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Connection: keep-alive";
$headers[] = "Upgrade-Insecure-Requests: 1";
curl_setopt($ch, CURLOPT_REFERER, 'https://infobitcoin.ml');
curl_setopt($ch, CURLOPT_USERAGENT, $au);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_COOKIEJAR, "x");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
if (curl_errno($ch)) {
	echo 'Error:' . curl_error($ch);
}
echo $result;
curl_close($ch);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.bestchange.com/action.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "action=track");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:63.0) Gecko/20100101 Firefox/63.0";
$headers[] = "Accept: */*";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Content-Type: application/x-www-form-urlencoded";
$headers[] = "Connection: keep-alive";
$headers[] = "Cookie: _ga=GA1.2.1928598682.1543570861; _gid=GA1.2.1385136642.1543570861";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_USERAGENT, $au);
curl_setopt($ch, CURLOPT_REFERER, "https://www.bestchange.com/?p=691208");
curl_setopt($ch, CURLOPT_COOKIEFILE, "x");
$result = curl_exec($ch);
if (curl_errno($ch)) {
	echo 'Error:' . curl_error($ch);
}
echo $result;
curl_close($ch);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.bestchange.com/action.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "action=getrates&page=main&tsid=0");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:63.0) Gecko/20100101 Firefox/63.0";
$headers[] = "Accept: */*";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Content-Type: application/x-www-form-urlencoded";
$headers[] = "Connection: keep-alive";
$headers[] = "Cookie: _ga=GA1.2.1928598682.1543570861; _gid=GA1.2.1385136642.1543570861";
curl_setopt($ch, CURLOPT_REFERER, 'https://www.bestchange.com/?p=691208');
curl_setopt($ch, CURLOPT_COOKIEFILE, "x");
curl_setopt($ch, CURLOPT_USERAGENT, $au);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
	echo 'Error:' . curl_error($ch);
}
echo $result;
curl_close($ch);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.bestchange.com/list.html");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:63.0) Gecko/20100101 Firefox/63.0";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Connection: keep-alive";
$headers[] = "Upgrade-Insecure-Requests: 1";
$headers[] = "Cookie: _ga=GA1.2.1928598682.1543570861; _gid=GA1.2.1385136642.1543570861";
curl_setopt($ch, CURLOPT_USERAGENT, $au);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_REFERER, 'https://www.bestchange.com/partner/');
curl_setopt($ch, CURLOPT_COOKIEFILE, "x");
$result = curl_exec($ch);
if (curl_errno($ch)) {
	echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.bestchange.com/perfectmoney-usd-to-perfectmoney-eur.html");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:63.0) Gecko/20100101 Firefox/63.0";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Connection: keep-alive";
$headers[] = "Upgrade-Insecure-Requests: 1";
$headers[] = "Cookie: _ga=GA1.2.1928598682.1543570861; _gid=GA1.2.1385136642.1543570861";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_USERAGENT, $au);
curl_setopt($ch, CURLOPT_REFERER, 'https://www.bestchange.com/partner/');
curl_setopt($ch, CURLOPT_COOKIEFILE, "x");
$result = curl_exec($ch);
if (curl_errno($ch)) {
	echo 'Error:' . curl_error($ch);
}
curl_close($ch);

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.bestchange.com/action.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "action=getrates&page=rates&from=40&to=45&city=0&type=&give=&get=&commission=0&sort=&range=&tsid=0");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:63.0) Gecko/20100101 Firefox/63.0";
$headers[] = "Accept: */*";
$headers[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
$headers[] = "Content-Type: application/x-www-form-urlencoded";
$headers[] = "Connection: keep-alive";
$headers[] = "Cookie: _ga=GA1.2.1928598682.1543570861; _gid=GA1.2.1385136642.1543570861";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_USERAGENT, $au);
curl_setopt($ch, CURLOPT_REFERER, 'https://www.bestchange.com/perfectmoney-usd-to-paypal-usd.html');
curl_setopt($ch, CURLOPT_COOKIEFILE, "x");
$result = curl_exec($ch);
if (curl_errno($ch)) {
	echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $result;
?>