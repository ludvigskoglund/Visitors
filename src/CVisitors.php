<?php

namespace Anax\Visitors;


class CVisitors{

use \Anax\DI\TInjectable;





public function getIpAddress(){
	$ip_address = $_SERVER['REMOTE_ADDR'];

	return $ip_address;
}

public function logIpAddress(){
	$now = date("Y-m-d h:i:sa"); 
	$file = '../app/content/visitors.md';
	$ip_address = $this->getIpAddress();
	$current = file_get_contents($file);

	$current .= $ip_address ." | ". $now . "     \r\n";
	if (strpos(file_get_contents($file), $ip_address) !== false) {
    
	}
	else{
		file_put_contents($file, $current);
	}

}

public function countVisitors(){

	$this->logIpAddress();
	$file = '../app/content/visitors.md';
	$linecount = -1;
	$handle = fopen($file, "r");
	while(!feof($handle)){
  		$line = fgets($handle);
  		$linecount++;
	}

	fclose($handle);

	return "<b> ".  $linecount . "</b>";


}




}

