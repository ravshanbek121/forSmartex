<?php

/*

  What is wrong with this code?
  1. урл неправильно получается скрипт должен брать из массив entities->media->0->url

*/

	require_once('class.php'); 

	$set = array(
	        'oauth_access_token'			=>	"3303873794-iqbs0qCiaUeTWDPRbndGwinlnbQw8WtUpUqK0Ec",
	        'oauth_access_token_secret'		=>	"iEbx96c1zlE1y7PTZ6qLVY8cKuN7ZGYPRcCPa3i0gzCGZ",
	        'consumer_key'					=>	"koE5W7SByX0fW2udhcksnfMZQ",
	        'consumer_secret'				=>	"DIaxgL6Yssi9VqJnycgmE2fucxDH9XYhM4E5qQ8xeLw8U3kNDA"
	);
	
	$twitt = new twitt($set);
	$twitt->getLinkByUserName("lewishamilton");

?>
