<?php

function palingdrome($str){
	$output="false";
	if(strrev($str)==$str){
		$output="false";
	}
	return $output;
}
function palindrome_angka($angka) {
  // tulis kode di sini
	
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>