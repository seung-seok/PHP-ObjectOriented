<?
// 인코딩 변경 함수
function switchEncoding($input, $encFrom, $encTo)
{
	if(is_array($input))
	{
		foreach($input as $k => $v)
		{
			$input[$k] = switchEncoding($v, $encFrom, $encTo);
		}
	}
	else if(is_string($input))
	{
		$encSrc = mb_detect_encoding($input, array($encFrom, $encTo), true);
		$input = iconv($encSrc, $encTo, $input);
	}

	return $input;
}

// Setting URL
$url	= 'https://ad.adggook.co.kr/adReq/';

// Setting Request Parameters
$word	= '가방';

$input	= array(
	'query'		=> $word,
	'channelId'	=> 'C01P001001',
	'serverUrl'	=> 'https://domeggook.com/main/item/itemList.php?sfc=ttl&sf=ttl&sw=' . urlencode($word),
	'userIp'	=> $_SERVER['REMOTE_ADDR'],
	'ua'		=> $_SERVER['HTTP_USER_AGENT'],
	'adType'	=> 'SRP'		// SRP: 통합검색, LP: 카테고리검색
);

$param	= switchEncoding($input, 'EUC-KR', 'UTF-8');

// Getting API Response
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($param));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HEADER, false);

$res = curl_exec($ch);
curl_close($ch);

// Parsing (UTF-8)
$data	= json_decode($res, true);
$data	= switchEncoding($data, 'UTF-8', 'CP949');

echo '<xmp>';
print_r($data);
echo '</xmp>';
?>