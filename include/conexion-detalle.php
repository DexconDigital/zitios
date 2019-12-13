<?php 

$codigo = $_GET["co"];
$ch = curl_init();
$headers =  'Authorization:jiFAXtWQqS3FWVqsYCVAZxbKuzPj3gI0LTLMZqZ7-940';
curl_setopt($ch, CURLOPT_URL, 'https://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $codigo . '');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);
if(is_array($r))
{
    $asesor = $r['asesor'][0]['ntercero'];
    $asesor =str_replace('Ã', 'ñ', $asesor); 
}else{
	echo $result;
}



?>