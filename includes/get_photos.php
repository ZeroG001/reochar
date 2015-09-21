<?php
		

header("Content-Type: application/json");

function getAccessToken() {
	$aCode = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=866515813415087&client_secret=5c19dd551cc00c0003fa196371dde23f&grant_type=client_credentials');
	return $aCode;
} 


$access_token = getAccessToken();

$fields = "id,name,description,link,count"; #source - for the actual photo source;
$fb_page_id = "234249230011385"; # 53249966765 1456387134662284 234249230011385

// $json_link = "http://graph.facebook.com/v2.4/${fb_page_id}/albums?fields=${fields}&access_token=${access_token}";
// $json = file_get_contents($json_link);
// $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

// $album_count = count($obj['data']);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v2.4/". $album_number ."/photos/?fields=id,name,images,description&${access_token}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_HEADER , false);
$json = curl_exec($ch);
curl_close($ch);

# $results = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

echo $results;

?>