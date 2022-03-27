<?php
define('DOMAIN', 'https://animegrabscript.herokuapp.com'); //domain website
define('TITLE', 'KissAnime'); //judul website
$hasil = json_decode(fetch('https://fulan.eu.org/anime/?url='.urlencode($_GET['url'])),true);

// print_r($hasil);die();
// print_r($_GET['url']);die();
if(isset($hasil['data']['list'])){
	include('./html/page.php');
}elseif(isset($hasil['data']['list_eps'])){
	include('./html/watch.php');
}else{
	// print_r($hasil);
	header("Location: ".DOMAIN."/404?message=".urlencode($hasil['message']));
}


function fetch($url){
	try{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 		curl_setopt($ch, CURLOPT_PROXY, '172.19.0.1:2231');

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    throw new Exception(curl_errno($ch));    
		}
		curl_close($ch);
		return ($result);
	}catch(Exception $e){
		return $e->getMessage();
	}

}
?>
