<?php

/*

  What is wrong with this code?
  1. урл неправильно получается скрипт должен брать из массив entities->media

*/

	require_once('class.php'); 
	
	$twitt = new twitt;
	$twitt->getLinkByUserName("lewishamilton");

?>
